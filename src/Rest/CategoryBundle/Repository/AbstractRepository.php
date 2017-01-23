<?php
namespace Rest\CategoryBundle\Repository;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\DBAL\DBALException;
use Doctrine\ORM\EntityRepository;
use Rest\CategoryBundle\DataTransferObject\DataTransferObjectInterface;
use Rest\CategoryBundle\Entity\EntityInterface;
use Rest\CategoryBundle\Exception\ServiceException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * Class AbstractRepository
 * @package Rest\CategoryBundle\Repository
 */
abstract class AbstractRepository extends EntityRepository implements RepositoryInterface
{

    /**
     * @var ObjectManager
     */
    protected $om;

    /**
     * @var ValidatorInterface
     */
    protected $validator;

    /**
     * @var SerializerInterface
     */
    protected $serializer;

    /**
     * @var array
     */
    protected $errors = [];

    /**
     * AbstractAssembler constructor.
     * @param ObjectManager $om
     * @param ValidatorInterface $validator
     * @param SerializerInterface $serializer
     */
    public function __construct(ObjectManager $om, ValidatorInterface $validator, SerializerInterface $serializer)
    {
        $this->om = $om;
        $this->validator = $validator;
        $this->serializer = $serializer;
    }

    /**
     * @param DataTransferObjectInterface $dto
     * @return mixed
     * @throws ServiceException
     */
    public function create(DataTransferObjectInterface $dto)
    {
        try {
            if (!$this->validate($dto)) {
                throw new ServiceException($this->serializer->serialize($this->errors, 'json'), Response::HTTP_BAD_REQUEST);
            }

            $object = $this->getEntityFromDataTransferObject($dto);

            $this->om->persist($object);
            $this->om->flush();

            return $this->getDataTransferObject($object);
        } catch (DBALException $e) {
            throw new ServiceException($e->getMessage(), $e->getCode() ? $e->getCode() : Response::HTTP_INTERNAL_SERVER_ERROR);
        } catch (\Exception $e) {
            throw new ServiceException($e->getMessage(), $e->getCode() ? $e->getCode() : Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @param $object
     * @return bool
     */
    public function validate($object)
    {
        $errors = $this->validator->validate($object);

        if (count($errors) > 0) {
            foreach ($errors as $error) {
                $this->errors[$error->getPropertyPath()] = $error->getMessage();
            }
            return false;
        }

        return true;
    }

    /**
     * @param DataTransferObjectInterface $dto
     * @param EntityInterface|null $object
     * @return mixed
     */
    abstract function getEntityFromDataTransferObject(DataTransferObjectInterface $dto, EntityInterface $object = null);

    /**
     * @param EntityInterface $entity
     * @return mixed
     */
    abstract function getDataTransferObject(EntityInterface $entity);

    /**
     * @param $id
     * @param DataTransferObjectInterface $dto
     * @return mixed
     * @throws ServiceException
     */
    public function update($id, DataTransferObjectInterface $dto)
    {
        try {
            $rep = $this->om->getRepository($this->getObjectClass());
            $object = $rep->find($id);
            if (!$object) {
                throw new ServiceException("Object not found", Response::HTTP_NOT_FOUND);
            }

            if (!$this->validate($dto)) {
                throw new ServiceException($this->serializer->serialize($this->errors, 'json'), Response::HTTP_BAD_REQUEST);
            }

            $object = $this->getEntityFromDataTransferObject($dto, $object);

            $this->om->persist($object);
            $this->om->flush();
            return $this->getDataTransferObject($object);
        } catch (DBALException $e) {
            throw new ServiceException($e->getMessage(), $e->getCode() ? $e->getCode() : Response::HTTP_INTERNAL_SERVER_ERROR);
        } catch (\Exception $e) {
            throw new ServiceException($e->getMessage(), $e->getCode() ? $e->getCode() : Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @return mixed
     */
    abstract function getObjectClass();

    /**
     * @param mixed $id
     * @return mixed
     * @throws ServiceException
     */
    public function find($id)
    {
        try {
            $rep = $this->om->getRepository($this->getObjectClass());
            $object = $rep->find($id);
            if (!$object) {
                throw new ServiceException("Object not found", Response::HTTP_NOT_FOUND);
            }
            $dto = $this->getDataTransferObject($object);

            return $dto;
        } catch (DBALException $e) {
            throw new ServiceException($e->getMessage(), $e->getCode() ? $e->getCode() : Response::HTTP_INTERNAL_SERVER_ERROR);
        } catch (\Exception $e) {
            throw new ServiceException($e->getMessage(), $e->getCode() ? $e->getCode() : Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @param array $criteria
     * @param array|null $orderBy
     * @param null $limit
     * @param null $offset
     * @return array
     * @throws ServiceException
     */
    public function findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
    {
        $dtos = [];
        try {
            $rep = $this->om->getRepository($this->getObjectClass());
            $objects = $rep->findBy($criteria, $orderBy, $limit, $offset);
            if (!$objects) {
                throw new ServiceException("Object not found", Response::HTTP_NOT_FOUND);
            }
            foreach ($objects as $object) {
                $dtos[] = $this->getDataTransferObject($object);
            }

            return $dtos;
        } catch (DBALException $e) {
            throw new ServiceException($e->getMessage(), $e->getCode() ? $e->getCode() : Response::HTTP_INTERNAL_SERVER_ERROR);
        } catch (\Exception $e) {
            throw new ServiceException($e->getMessage(), $e->getCode() ? $e->getCode() : Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @return array
     * @throws ServiceException
     */
    public function findAll()
    {
        $dtos = [];
        try {
            $rep = $this->om->getRepository($this->getObjectClass());
            $objects = $rep->findAll();
            if (!$objects) {
                throw new ServiceException('Database is empty', Response::HTTP_NOT_FOUND);
            }

            foreach ($objects as $object) {
                $dtos[] = $this->getDataTransferObject($object);
            }

            return $dtos;
        } catch (DBALException $e) {
            throw new ServiceException($e->getMessage(), $e->getCode() ? $e->getCode() : Response::HTTP_INTERNAL_SERVER_ERROR);
        } catch (\Exception $e) {
            throw new ServiceException($e->getMessage(), $e->getCode() ? $e->getCode() : Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @param $id
     * @return null
     * @throws ServiceException
     */
    public function delete($id)
    {
        try {
            $rep = $this->om->getRepository($this->getObjectClass());
            $object = $rep->find($id);
            if (!$object) {
                throw new ServiceException("Object not found", Response::HTTP_NOT_FOUND);
            }

            $this->om->remove($object);
            $this->om->flush();

            return null;
        } catch (DBALException $e) {
            throw new ServiceException($e->getMessage(), $e->getCode() ? $e->getCode() : Response::HTTP_INTERNAL_SERVER_ERROR);
        } catch (\Exception $e) {
            throw new ServiceException($e->getMessage(), $e->getCode() ? $e->getCode() : Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @return mixed
     */
    abstract function getDataTransferObjectClass();

}