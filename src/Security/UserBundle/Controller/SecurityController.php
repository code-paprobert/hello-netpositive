<?php

namespace Security\UserBundle\Controller;

use Security\UserBundle\Form\RegisterFormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Security\UserBundle\Entity\User;
use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;

class SecurityController extends Controller
{

    public function loginAction(Request $request)
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render(
            'UserBundle:Security:login.html.twig', [
                // last username entered by the user
                'last_username' => $lastUsername,
                'error'         => $error,
            ]
        );

    }

    public function logoutCheckAction()
    {
        // do not put anything here! The Symfony will handle it!
    }

    public function loginCheckAction()
    {
        // do not put anything here! The Symfony will handle it!
    }

    public function registrationAction(Request $request)
    {
        $form = $this->createForm(new RegisterFormType());
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $user = $form->getData();

            $user->setPassword($this->encodePassword($user, $user->getPlainPassword()));
            $user->setIsActive(true);
            $user->setRoles(["ROLE_USER"]);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->addFlash('success', 'Welcome to the Death Star! Have a magical day!');
        }

        return $this->render('UserBundle:Security:registration.html.twig', [
            'form' => $form->createView()
        ]);

    }

    public function profileAction()
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        return $this->render('UserBundle:Security:profile.html.twig');
    }


    private function encodePassword(User $user, $plainPassword)
    {
        /** @var PasswordEncoderInterface $encoder */
        $encoder = $this->get('security.encoder_factory')->getEncoder($user);

        return $encoder->encodePassword($plainPassword, $user->getSalt());
    }

    public function getFormErrorsAsString($form)
    {
        $errorsAsString = "";

        $errors = $this->getFormErrors($form);

        if(!empty($errors)) {
            $errorsAsString = implode(' | ', array_map(function ($subErrorArray) {
                return implode(', ',$subErrorArray);
            }, $errors));
        }

        return $errorsAsString;
    }

    public function getFormErrors($form)
    {
        $errors = array();

        if ($form instanceof FormInterface) {
            foreach ($form->getErrors() as $error) {
                $errors[] = $error->getMessage();
            }

            foreach ($form->all() as $key => $child) {
                if ($err = $this->getFormErrors($child)) {
                    $errors[$key] = $err;
                }
            }
        }

        return $errors;
    }

}
