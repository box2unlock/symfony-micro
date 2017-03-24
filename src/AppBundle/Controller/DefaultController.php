<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Post;

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
        return $this->render('Default/index.html.twig');
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

    /**
     * Create new post
     *
     * @param Request $request
     * @return Response
     */
    public function postAction(Request $request)
    {
        $post = new Post('Some post: ' . date('Y-m-d H:m:s'));
        $em = $this->getDoctrine()->getManager();
        $em->persist($post);
        $em->flush();
        return $this->render('Default/post.html.twig', [
            'message' => 'Post created: ' . $post->getId(),
        ]);
    }
}
