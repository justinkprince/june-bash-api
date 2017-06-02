<?php

namespace AppBundle\Controller;

// use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
// use Symfony\Bundle\FrameworkBundle\Controller\Controller;
// use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
// use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

use FOS\RestBundle\Controller\Annotations\View;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use AppBundle\Entity\User;

class ExampleController extends FOSRestController
{
    /**
     * Get all posts regardless of type (image|video|status|poll).
     *
     * @ApiDoc(
     *  description="Get posts",
     *  parameters={
     *      {"name"="propId", "dataType"="string", "required"=true, "description"="Property/Hotel id"},
     *      {"name"="kioskId", "dataType"="string", "required"=true, "description"="Kiosk id"},
     *      {"name"="confNum", "dataType"="string", "required"=true, "description"="Reservation confirmation number"}
     *  }
     * )
     * View()
     */
    public function getPostsAction()
    {
        return ['kthis' => 'that'];
    }
}
