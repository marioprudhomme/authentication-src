<?php

namespace Messenger\Message\Event\Login;

use Messenger\Message\Command\Login;

/**
 * Class PreEvent
 */
final class PreEvent
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
