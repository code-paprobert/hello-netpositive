<?php

namespace Security\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use \Doctrine\ORM\Event\LifecycleEventArgs;
use FOS\UserBundle\Entity\User as BaseUser;


/**
 * User
 */
class User extends BaseUser
{

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $password;

    protected $roles;

    protected $plainPassword;

    /**
     * @return mixed
     */
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    /**
     * @param mixed $plainPassword
     */
    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;
    }

    private $isActive = true;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $email = is_null($email) ? '' : $email;

        $this->email = $email;

        $this->username = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    public function setRoles(array $roles)
    {
        $this->roles = $roles;

        return $this;
    }

    public function getRoles()
    {
        $roles = $this->roles;

        $roles[] = "ROLE_USER";

        return array_unique($roles);
    }

    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getIsActive()
    {
        return $this->isActive;
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    public function getSalt()
    {
        return null;
    }

    /**
     * AdvancedUserInterface methods
     */

    public function isAccountNonExpired()
    {
        return true;
    }

    public function isAccountNonLocked()
    {
        return true;
    }

    public function isCredentialsNonExpired()
    {
        return true;
    }

    public function isEnabled()
    {
        return $this->getIsActive();
    }

    function __toString()
    {
        return $this->getUsername();
    }


    public function serialize()
    {
        return serialize([
            $this->id,
            $this->username,
            $this->password
        ]);
    }

    public function ereaseCredentials()
    {
        $this->setPlainPassword(null);
    }

    public function unserialize($serialized)
    {
        return list ( $this->id, $this->username, $this->password ) = unserialize($serialized);
    }

    public function encodePassword(User $user, $plainPassword)
    {
        $encoder = $this->container->get('security.encoder_factory')->getEncoder($user);

        return $encoder->encodePassword($plainPassword, $user->getSalt());
    }
    /**
     * @var string
     */
    private $full_name;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var \DateTime
     */
    private $create_datetime;

    /**
     * @var \DateTime
     */
    private $update_datetime;

    /**
     * @var \DateTime
     */
    private $last_login_datetime;

    /**
     * @var string
     */
    private $last_login_client_ip;


    /**
     * Set full_name
     *
     * @param string $fullName
     * @return User
     */
    public function setFullName($fullName)
    {
        $this->full_name = $fullName;

        return $this;
    }

    /**
     * Get full_name
     *
     * @return string 
     */
    public function getFullName()
    {
        return $this->full_name;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set create_datetime
     *
     * @param \DateTime $createDatetime
     * @return User
     */
    public function setCreateDatetime($createDatetime)
    {
        $this->create_datetime = $createDatetime;

        return $this;
    }

    /**
     * Get create_datetime
     *
     * @return \DateTime 
     */
    public function getCreateDatetime()
    {
        return $this->create_datetime;
    }

    /**
     * Set update_datetime
     *
     * @param \DateTime $updateDatetime
     * @return User
     */
    public function setUpdateDatetime($updateDatetime)
    {
        $this->update_datetime = $updateDatetime;

        return $this;
    }

    /**
     * Get update_datetime
     *
     * @return \DateTime 
     */
    public function getUpdateDatetime()
    {
        return $this->update_datetime;
    }

    /**
     * Set last_login_datetime
     *
     * @param \DateTime $lastLoginDatetime
     * @return User
     */
    public function setLastLoginDatetime($lastLoginDatetime)
    {
        $this->last_login_datetime = $lastLoginDatetime;

        return $this;
    }

    /**
     * Get last_login_datetime
     *
     * @return \DateTime 
     */
    public function getLastLoginDatetime()
    {
        return $this->last_login_datetime;
    }

    /**
     * Set last_login_client_ip
     *
     * @param string $lastLoginClientIp
     * @return User
     */
    public function setLastLoginClientIp($lastLoginClientIp)
    {
        $this->last_login_client_ip = $lastLoginClientIp;

        return $this;
    }

    /**
     * Get last_login_client_ip
     *
     * @return string 
     */
    public function getLastLoginClientIp()
    {
        return $this->last_login_client_ip;
    }


    /**
     * @var string
     */
    private $facebook_access_token;


    /**
     * Set facebook_access_token
     *
     * @param string $facebookAccessToken
     * @return User
     */
    public function setFacebookAccessToken($facebookAccessToken)
    {
        $this->facebook_access_token = $facebookAccessToken;

        return $this;
    }

    /**
     * Get facebook_access_token
     *
     * @return string 
     */
    public function getFacebookAccessToken()
    {
        return $this->facebook_access_token;
    }
    /**
     * @var string
     */
    private $facebook_id;


    /**
     * Set facebook_id
     *
     * @param string $facebookId
     * @return User
     */
    public function setFacebookId($facebookId)
    {
        $this->facebook_id = $facebookId;

        return $this;
    }

    /**
     * Get facebook_id
     *
     * @return string 
     */
    public function getFacebookId()
    {
        return $this->facebook_id;
    }
}
