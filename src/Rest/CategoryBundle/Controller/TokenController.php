<?php

namespace Rest\CategoryBundle\Controller;

use OAuth2\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class TokenController
 * @package Rest\CategoryBundle\Controller
 */
class TokenController extends AbstractController
{
    /**
     * @return JsonResponse|Response
     */
    public function getAccessTokenAction()
    {
        try {
            $response = $this->getOAuthServer()->handleTokenRequest(Request::createFromGlobals());

            $resp = new Response($response->getResponseBody(), Response::HTTP_OK);
            $resp->setETag(md5($response->getResponseBody()));
            $resp->setPublic(); // make sure the response is public/cacheable
            return $resp;

        } catch (\Exception $e) {
            return new JsonResponse($e->getMessage(), $e->getCode() ? $e->getCode() : Response::HTTP_BAD_REQUEST);
        }
    }
    
}
