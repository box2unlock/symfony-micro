<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class DefaultController
 * @package AppBundle\Controller
 */
class DefaultController extends Controller
{
    /**
     * Render home page
     *
     * @param Request $request
     * @return Response
     */
    public function indexAction(Request $request)
    {
        return $this->render('Default/index.html.twig', [
            'version' => $this->get('app.util.symfony_version')->getVersion(),
        ]);
    }

    /**
     * Render hello page
     *
     * @param Request $request
     * @param string $name
     * @return Response
     */
    public function helloAction(Request $request, $name)
    {
        return $this->render('Default/hello.html.twig', [
            'name' => $name,
        ]);
    }
}
