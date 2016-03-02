<?php
namespace Security\UserBundle\Security\Core\User;

use HWI\Bundle\OAuthBundle\OAuth\Response\UserResponseInterface;
use HWI\Bundle\OAuthBundle\Security\Core\User\FOSUBUserProvider as BaseClass;
use Symfony\Component\Security\Core\User\UserInterface;

class FOSUBUserProvider extends BaseClass
{

    public function connect(UserInterface $user, UserResponseInterface $response)
    {
        $property = $this->getProperty($response);
        $username = $response->getUsername();

        $service = $response->getResourceOwner()->getName();
        $setter = 'set'.ucfirst($service);
        $setter_id = $setter.'Id';
        $setter_token = $setter.'AccessToken';

        if (null !== $previousUser = $this->userManager->findUserBy(array($property => $username))) {
            $previousUser->$setter_id(null);
            $previousUser->$setter_token(null);
            $this->userManager->updateUser($previousUser);
        }

        $user->$setter_id($username);
        $user->$setter_token($response->getAccessToken());
        $this->userManager->updateUser($user);
    }

    public function loadUserByOAuthUserResponse(UserResponseInterface $response)
    {
        $user = $this->userManager->findUserByUsernameOrEmail($response->getEmail());

        if (null === $user) {

            $facebook_id = $response->getUsername();

            $service = $response->getResourceOwner()->getName();
            $setter = 'set'.ucfirst($service);

            $setter_id = $setter.'Id';
            $setter_token = $setter.'AccessToken';

            $user = $this->userManager->createUser();
            $user->$setter_id($facebook_id);
            $user->$setter_token($response->getAccessToken());

            $user->setEmail($response->getEmail());
            $user->setFullName($response->getRealName());
            $user->setPassword($facebook_id);
            $user->setEnabled(true);
            $this->userManager->updateUser($user);

            return $user;

        }

        //$user = parent::loadUserByOAuthUserResponse($response);
        $serviceName = $response->getResourceOwner()->getName();
        $setter = 'set' . ucfirst($serviceName) . 'AccessToken';

        $user->$setter($response->getAccessToken());
        return $user;
    }
}