<?php
namespace Rest\CategoryBundle\Repository;

use Rest\CategoryBundle\DataTransferObject\DataTransferObjectInterface;
use Rest\CategoryBundle\Entity\EntityInterface;

/**
 * Interface RepositoryInterface
 * @package Rest\CategoryBundle\Repository
 */
interface RepositoryInterface
{
    /**
     * @return mixed
     */
    public function getObjectClass();

    /**
     * @param DataTransferObjectInterface $dto
     * @return mixed
     */
    public function getEntityFromDataTransferObject(DataTransferObjectInterface $dto);

    /**
     * @param EntityInterface $entity
     * @return mixed
     */
    public function getDataTransferObject(EntityInterface $entity);

    /**
     * @return mixed
     */
    public function getDataTransferObjectClass();
}