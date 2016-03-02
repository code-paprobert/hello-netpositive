<?php

namespace Security\UserBundle\EventListener;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Security\Core\Event\AuthenticationFailureEvent;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;

class AuthenticationListener
{
    /**
     * @var EntityManagerInterface
     */
    protected $em;

    protected $requestStack;

    public function __construct(EntityManagerInterface $em, RequestStack $requestStack)
    {
        $this->em = $em;
        $this->requestStack = $requestStack;
    }

    public function onAuthenticationFailure(AuthenticationFailureEvent $event)
    {
        // executes on failed login
    }

    public function onAuthenticationSuccess(InteractiveLoginEvent $event)
    {
        // executes on successful login
        $user = $event->getAuthenticationToken()->getUser();

        $user->setLastLoginClientIp($this->requestStack->getMasterRequest()->getClientIp());
        $user->setLastLoginDatetime(new \Datetime());

        $this->em->persist($user);
        $this->em->flush();

    }
}