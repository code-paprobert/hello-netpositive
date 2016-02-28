<?php

namespace Security\UserBundle\EventListener;

use Symfony\Component\Security\Core\Event\AuthenticationFailureEvent;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Gedmo\Timestampable\Traits\TimestampableEntity;


use Security\UserBundle\Event;

class AuthenticationListener
{

    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function onAuthenticationFailure( AuthenticationFailureEvent $event )
    {
        // executes on failed login
    }

    public function onAuthenticationSuccess( InteractiveLoginEvent $event )
    {

        // executes on successful login
        $user = $event->getAuthenticationToken()->getUser();

        $user->setLastLoginClientIp($this->container->get("request")->getClientIp());
        $user->setLastLoginDatetime(new \Datetime());

        $em = $this->container->get('doctrine')->getEntityManager();

        $em->persist($user);
        $em->flush();

    }
}