<?php

namespace AppBundle\Controller;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ApiController extends Controller
{
    /**
     * @ApiDoc(
     *  resource=true,
     *  description="This is a demo method. Just remove it",
     * )
     */
    public function getBlobAction()
    {
        return new \AppBundle\Entity\Blob('Blobby');
    }
}
