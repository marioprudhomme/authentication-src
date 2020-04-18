<?php

namespace Messenger\Handler;

use Messenger\Message\Command\Login;
use Messenger\Message\Event\Login\PreEvent;
use Messenger\Message\Event\Login\PostEvent;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;
use Symfony\Component\Messenger\MessageBusInterface;

/**
 * Class LoginHandler
 */
final class LoginHandler implements MessageHandlerInterface
{
    /**
     * @var MessageBusInterface
     */
    private MessageBusInterface $messageBus;

    /**
     * Constructor
     *
     * @param MessageBusInterface $messageBus
     */
    public function __construct(MessageBusInterface $messageBus)
    {
        $this->mesasgeBus = $messageBus;
    }

    /**
     * @param Login $login
     */
    public function __invoke(Login $login)
    {
        $this->messageBus->dispatch(new PreEvent($login));

        // Login
        // ...

        $this->messageBus->dispatch(new PostEvent($login));
    }
}
