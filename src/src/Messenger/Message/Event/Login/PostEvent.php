<?php

namespace Messenger\Message\Event\Login;

use Messenger\Message\Command\Login;

/**
 * Class PostEvent
 */
final class PostEvent
{
    /**
     * @var Login
     */
    public Login $login;

    /**
     * Constructor
     *
     * @param Login $login
     */
    public function __construct(Login $login)
    {
        $this->login = $login;
    }
}
