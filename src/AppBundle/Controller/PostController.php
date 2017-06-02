<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\View;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use AppBundle\Entity\User;

class PostController extends FOSRestController
{
    /**
     * Get all posts regardless of type (image|video|status|poll).
     *
     * @ApiDoc(
     *     description="Get posts"
     * )
     *
     * View()
     */
    public function getPostsAction()
    {
        return ['kthis' => 'that'];
    }
}
