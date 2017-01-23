<?php

namespace Rest\CategoryBundle\Service;

use Rest\CategoryBundle\DataTransferObject\CategoryDTO;
use Rest\CategoryBundle\DataTransferObject\DataTransferObjectInterface;
use Rest\CategoryBundle\Entity\Category;
use Rest\CategoryBundle\Entity\EntityInterface;
use Rest\CategoryBundle\Exception\ServiceException;
use Rest\CategoryBundle\Repository\AbstractRepository;
use Symfony\Component\HttpFoundation\Response;


/**
 * Class CategoryService
 * @package Rest\CategoryBundle\Service
 */
class CategoryService extends AbstractRepository
{
    /**
     * @param DataTransferObjectInterface $dto
     * @param EntityInterface|null $object
     * @return Category|EntityInterface
     * @throws ServiceException
     */
    public function getEntityFromDataTransferObject(DataTransferObjectInterface $dto, EntityInterface $object = null)
    {

        $entity = $object ? $object : new Category();
        $entity->setName($dto->name);
        $entity->setSlug($dto->slug);
        $entity->setIsVisible($dto->isVisible);

        if ($dto->parentCategory) {
            $rep = $this->om->getRepository($this->getObjectClass());
            $parentCategory = $rep->find($dto->parentCategory);
            if (!$parentCategory) {
                throw new ServiceException("Object not found", Response::HTTP_NOT_FOUND);
            }
            $entity->setParentCategory($parentCategory);
        }

        return $entity;
    }

    /**
     * @return string
     */
    public function getObjectClass()
    {
        return 'Rest\CategoryBundle\Entity\Category';
    }

    /**
     * @param EntityInterface $category
     * @return CategoryDTO
     */
    public function getDataTransferObject(EntityInterface $category)
    {

        $object = new CategoryDTO();
        $object->id = $category->getId();
        $object->name = $category->getName();
        $object->isVisible = $category->getIsVisible();
        $object->slug = $category->getSlug();

        $parent = $category->getParentCategory();
        if ($parent && $parent instanceof Category) {
            $object->parentCategory = $category->getParentCategory()->getId();
        }

        $createdDate = $category->getCreatedAt();
        if ($createdDate && $createdDate instanceof \DateTime) {
            $object->createdAt = $createdDate->format('d-m-Y H:i:s');
        }

        $updatedDate = $category->getUpdatedAt();
        if ($updatedDate && $updatedDate instanceof \DateTime) {
            $object->updatedAt = $updatedDate->format('d-m-Y H:i:s');
        }

        return $object;
    }

    /**
     * @return string
     */
    public function getDataTransferObjectClass()
    {
        return 'Rest\CategoryBundle\DataTransferObject\CategoryDTO';
    }
}
