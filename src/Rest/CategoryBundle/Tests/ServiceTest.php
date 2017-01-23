<?php

namespace Rest\CategoryBundle\Tests;


use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityRepository;
use Rest\CategoryBundle\DataTransferObject\CategoryDTO;
use Rest\CategoryBundle\Entity\Category;
use Rest\CategoryBundle\Service\CategoryService;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Validator\RecursiveValidator;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Validator\ValidatorBuilder;

class RepositoryTest extends \PHPUnit_Framework_TestCase
{

    private $object;

    private $categoryService;

    private $entityManager;

    public function setUp()
    {
        parent::setUp();

        // Last, mock the EntityManager to return the mock of the repository
        $this->entityManager = $this
            ->getMockBuilder(ObjectManager::class)
            ->disableOriginalConstructor()
            ->getMock();

        $validator = Validation::createValidator();;
        $serializer = new Serializer();
        $this->object = new CategoryDTO();
        $this->object->name = "test";
        $this->object->slug = "test";
        $this->categoryService = new CategoryService($this->entityManager, $validator, $serializer);
    }

    public function testCreate()
    {
        $this->assertEquals($this->object, $this->categoryService->create($this->object));
    }

    public function testUpdate()
    {
        $category = $this->createMock(Category::class);
        // Now, mock the repository so it returns the mock of the employee
        $categoryRepository = $this
            ->getMockBuilder(EntityRepository::class)
            ->disableOriginalConstructor()
            ->getMock();
        $categoryRepository->expects($this->once())
            ->method('find')
            ->will($this->returnValue($category));

        $this->entityManager->expects($this->once())
            ->method('getRepository')
            ->will($this->returnValue($categoryRepository));

        $this->object->name = null;
        $this->object->slug = null;

        $this->assertEquals($this->object, $this->categoryService->update(1, $this->object));
    }

    public function testFind()
    {
        $category = $this->createMock(Category::class);
        // Now, mock the repository so it returns the mock of the employee
        $categoryRepository = $this
            ->getMockBuilder(EntityRepository::class)
            ->disableOriginalConstructor()
            ->getMock();
        $categoryRepository->expects($this->once())
            ->method('find')
            ->will($this->returnValue($category));

        $this->entityManager->expects($this->once())
            ->method('getRepository')
            ->will($this->returnValue($categoryRepository));

        $this->object->name = null;
        $this->object->slug = null;

        $this->assertEquals($this->object, $this->categoryService->find(1));
    }

    public function testFindAll()
    {
        $category = $this->createMock(Category::class);
        // Now, mock the repository so it returns the mock of the employee
        $categoryRepository = $this
            ->getMockBuilder(EntityRepository::class)
            ->disableOriginalConstructor()
            ->getMock();
        $categoryRepository->expects($this->once())
            ->method('findAll')
            ->will($this->returnValue($category));

        $this->entityManager->expects($this->once())
            ->method('getRepository')
            ->will($this->returnValue($categoryRepository));

        $this->assertEquals([], $this->categoryService->findAll());
    }

    public function testFindBy()
    {
        $category = $this->createMock(Category::class);
        // Now, mock the repository so it returns the mock of the employee
        $categoryRepository = $this
            ->getMockBuilder(EntityRepository::class)
            ->disableOriginalConstructor()
            ->getMock();
        $categoryRepository->expects($this->once())
            ->method('findBy')
            ->with([])
            ->will($this->returnValue($category));

        $this->entityManager->expects($this->once())
            ->method('getRepository')
            ->will($this->returnValue($categoryRepository));

        $this->assertEquals([], $this->categoryService->findBy([]));
    }

    public function testDelete()
    {
        $category = $this->createMock(Category::class);
        // Now, mock the repository so it returns the mock of the employee
        $categoryRepository = $this
            ->getMockBuilder(EntityRepository::class)
            ->disableOriginalConstructor()
            ->getMock();
        $categoryRepository->expects($this->once())
            ->method('find')
            ->will($this->returnValue($category));

        $this->entityManager->expects($this->once())
            ->method('getRepository')
            ->will($this->returnValue($categoryRepository));

        $this->assertEquals(null, $this->categoryService->delete(1));
    }


}