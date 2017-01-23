<?php
namespace Rest\CategoryBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Class CategoryControllerTest
 * @package Rest\CategoryBundle\Tests
 */
class CategoryControllerTest extends WebTestCase
{

    /**
     * 
     */
    public function testGetAccessTokenAction()
    {
        $client = static::createClient();

        $crawler = $client->request('POST', '/token');
        $this->assertNotEmpty($client->getResponse()->getContent());
    }

    /**
     * 
     */
    public function testCreateAction()
    {
        $client = static::createClient();

        $crawler = $client->request('POST', '/category');
        $this->assertNotEmpty($client->getResponse()->getContent());
    }

    /**
     * 
     */
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/categories');
        $this->assertNotEmpty($client->getResponse()->getContent());
    }

    /**
     * 
     */
    public function testFindAction()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/category/1');
        $this->assertNotEmpty($client->getResponse()->getContent());
    }

    /**
     * 
     */
    public function testUpdateAction()
    {
        $client = static::createClient();

        $crawler = $client->request('PUT', '/category/1');
        $this->assertNotEmpty($client->getResponse()->getContent());
    }

    /**
     * 
     */
    public function testDeleteAction()
    {
        $client = static::createClient();

        $crawler = $client->request('DELETE', '/category/1');
        $this->assertNotEmpty($client->getResponse()->getContent());
    }

    /**
     * 
     */
    public function testChildrenAction()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/category/1/children');
        $this->assertNotEmpty($client->getResponse()->getContent());
    }


}