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
        // Phillip recommands that you use Controller Classes: http://silex.sensiolabs.org/doc/usage.html#controllers-as-classes

        $this->get('/', 'Controller\\PostController::index')
            ->contents('post')
            ->bind('post_list');

        $this->get('/{post}', 'Controller\\PostController::show')
            ->content('post')
            ->bind('post_show');
    }
}
