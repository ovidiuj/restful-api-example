<?php

namespace Rest\CategoryBundle\Controller;


use OAuth2\Request;
use OAuth2\Server;
use Rest\CategoryBundle\Service\CategoryService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Serializer;

/**
 * Class AbstractController
 * @package Rest\CategoryBundle\Controller
 */
abstract class AbstractController extends Controller
{
    /**
     * @var CategoryService
     */
    protected $service;

    /**
     * @var Serializer
     */
    protected $serializer;

    /**
     * @var Server
     */
    protected $OAuthServer;

    /**
     * @return CategoryService
     */
    protected function getCategoryService()
    {
        if(!$this->service) {
            $this->service = $this->container->get('category.service');
        }
        return $this->service;
    }

    /**
     * @return Serializer
     */
    protected function getSerializer()
    {
        if(!$this->serializer) {
            $this->serializer = $this->container->get('serializer');
        }
        return $this->serializer;
    }

    /**
     * @return Server
     */
    protected function getOAuthServer()
    {
        if(!$this->OAuthServer) {
            $this->OAuthServer = $this->container->get('oauth_server');
        }
        return $this->OAuthServer;
    }

    /**
     * @return bool|JsonResponse
     */
    protected function checkAuthorization()
    {
        if (!$this->getOAuthServer()->verifyResourceRequest(Request::createFromGlobals())) {
            return new JsonResponse($this->getOAuthServer()->getResponse()->getResponseBody(), $this->getOAuthServer()->getResponse()->getStatusCode());
        }
        return true;
    }
    
}