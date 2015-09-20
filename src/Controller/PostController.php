<?php

namespace Controller;

use Phpillip\Application;
use Symfony\Component\HttpFoundation\Request;

/**
 * Post controller
 */
class PostController
{
    /**
     * List posts
     *
     * @param Request $request
     * @param Application $app
     * @param array $posts
     *
     * @return array
     */
    public function index(Request $request, Application $app, array $posts)
    {
        return ['posts' => $posts];
    }

    /**
     * Show a post
     *
     * @param Request $request
     * @param Application $app
     * @param array $post
     *
     * @return array
     */
    public function show(Request $request, Application $app, array $post)
    {
        return ['post' => $post];
    }
}
