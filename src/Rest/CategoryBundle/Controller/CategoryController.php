<?php

namespace Rest\CategoryBundle\Controller;

use Rest\CategoryBundle\Exception\ServiceException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class CategoryController
 * @package Rest\CategoryBundle\Controller
 */
class CategoryController extends AbstractController
{
    /**
     * @return JsonResponse
     */
    public function indexAction()
    {
        try {
            $objects = $this->getCategoryService()->findAll();

            $response =  new JsonResponse($objects, Response::HTTP_OK);
            $response->setETag(md5("list"));
            $response->setPublic(); // make sure the response is public/cacheable
            return $response;
        } catch (\Exception $e) {
            return new JsonResponse($e->getMessage(), $e->getCode());
        }
    }

    /**
     * @param $id
     * @return JsonResponse
     */
    public function findAction($id)
    {
        try {
            if (!$id) {
                return new JsonResponse("Invalid Argument", Response::HTTP_BAD_REQUEST);
            }
            if((int) $id) {
                $object = $this->getCategoryService()->find($id);
            } else {
                $object = $this->getCategoryService()->findBy(['slug' => $id]);
            }

            $response = new JsonResponse($object, Response::HTTP_OK);
            $response->setETag(md5($id));
            $response->setPublic();
            return $response;

        } catch (\Exception $e) {
            return new JsonResponse($e->getMessage(), $e->getCode());
        }
    }

    /**
     * @param Request $request
     * @return bool|JsonResponse
     */
    public function createAction(Request $request)
    {
        try {
            $auth = $this->checkAuthorization();

            if ($auth === true) {
                $object = $request->getContent();
                if (!$object) {
                    return new JsonResponse("Invalid Arguments", Response::HTTP_BAD_REQUEST);
                }

                $objectDto = $this->getSerializer()->deserialize($object, $this->getCategoryService()->getDataTransferObjectClass(), 'json');
                if (!$objectDto) {
                    return new JsonResponse("Invalid Object", Response::HTTP_BAD_REQUEST);
                }
                $objectDto = $this->getCategoryService()->create($objectDto);

                $response = new JsonResponse($objectDto, Response::HTTP_OK);
                $response->setETag(md5($request->getContent()));
                $response->setPublic();
                return $response;
            } else {
                return $auth;
            }
        } catch (ServiceException $e) {
            return new JsonResponse($e->getMessage(), $e->getCode());
        } catch (\Exception $e) {
            return new JsonResponse($e->getMessage(), $e->getCode());
        }
    }

    /**
     * @param $id
     * @param Request $request
     * @return bool|JsonResponse
     */
    public function updateAction($id, Request $request)
    {

        try {
            $auth = $this->checkAuthorization();
            if ($auth === true) {
                $object = $request->getContent();
                if (!$id && !$object) {
                    return new JsonResponse("Invalid Arguments", Response::HTTP_BAD_REQUEST);
                }

                $objectDto = $this->getSerializer()->deserialize($object, $this->getCategoryService()->getDataTransferObjectClass(), 'json');
                if (!$objectDto) {
                    return new JsonResponse("Invalid Object", Response::HTTP_BAD_REQUEST);
                }

                $objectDto = $this->getCategoryService()->update($id, $objectDto);

                $response = new JsonResponse($objectDto, Response::HTTP_OK);
                $response->setETag(md5($id . $request->getContent()));
                $response->setPublic();
                return $response;
            } else {
                return $auth;
            }

        } catch (ServiceException $e) {
            return new JsonResponse($e->getMessage(), $e->getCode());
        } catch (\Exception $e) {
            return new JsonResponse($e->getCode(), $e->getMessage());
        }
    }

    /**
     * @param $id
     * @return bool|JsonResponse
     */
    public function deleteAction($id)
    {
        try {
            $auth = $this->checkAuthorization();
            if ($auth === true) {
                if (!$id) {
                    return new JsonResponse("Invalid Arguments", Response::HTTP_BAD_REQUEST);
                }

                $this->getCategoryService()->delete($id);

                return new JsonResponse("The object has beenn successfuly deleted.", Response::HTTP_OK);
            } else {
                return $auth;
            }
        } catch (ServiceException $e) {
            return new JsonResponse($e->getMessage(), $e->getCode());
        } catch (\Exception $e) {
            return new JsonResponse($e->getCode(), $e->getMessage());
        }
    }

    /**
     * @param $id
     * @return JsonResponse
     */
    public function childrenAction($id)
    {
        if (!$id) {
            return new JsonResponse("Invalid Arguments", Response::HTTP_BAD_REQUEST);
        }

        try {
            $objects = $this->getCategoryService()->findBy(['parentCategory' => $id]);

            $response = new JsonResponse($objects, Response::HTTP_OK);
            $response->setETag(md5($id));
            $response->setPublic();
            return $response;
        } catch (\Exception $e) {
            return new JsonResponse($e->getMessage(), $e->getCode());
        }
    }

}
