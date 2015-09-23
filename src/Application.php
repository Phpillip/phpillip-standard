<?php

use Phpillip\Application as BaseApplication;

/**
 * Your Phpillip application
 */
class Application extends BaseApplication
{
    /**
     * {@inheritdoc}
     */
    public function __construct(array $values = array())
    {
        parent::__construct($values);

        // Register your controllers as you would in any Silex app!

        // A closure:
        // $this->get('/', function () { return []; })->template('index.html.twig');

        // Your own controller class in 'src/Controller':
        // (auto template 'Blog/index.html.twig')
        // $this->get('/blog', 'Controller\\BlogController::index');

        // The Phpillip content controller service:
        // (auto template: 'post/show.html.twig')
        // $this->get('/blog/{post}', 'content.controller:show')->content('post');
    }
}
