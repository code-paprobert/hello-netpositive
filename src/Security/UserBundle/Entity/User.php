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

    /**
     * @var array
     */
    protected $roles;

    /**
     * @var string
     */
    protected $plainPassword;

    /**
     * @var bool
     */
    protected $isActive = true;

    /**
     * @var string
     */
    protected $full_name;

    /**
     * @var string
     */
    protected $phone;

    /**
     * @var \DateTime
     */
    protected $create_datetime;

    /**
     * @var \DateTime
     */
    protected $update_datetime;

    /**
     * @var \DateTime
     */
    protected $last_login_datetime;

    /**
     * @var string
     */
    protected $last_login_client_ip;

    /**
     * @var string
     */
    protected $facebook_access_token;

    /**
     * @var string
     */
    protected $facebook_id;

    /**
     * @return mixed
     */
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    /**
     * @param string $plainPassword
     * @return $this
     */
    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;
        return $this;
    }

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
     * @return $this
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
     * @return $this
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
     * @return $this
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

    /**
     * @param array $roles
     * @return $this
     */
    public function setRoles(array $roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @return array
     */
    public function getRoles()
    {
        $roles = $this->roles;

        $roles[] = "ROLE_USER";

        return array_unique($roles);
    }

    /**
     * @param $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @return null
     */
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

    /**
     * @return bool
     */
    public function isAccountNonLocked()
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isCredentialsNonExpired()
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return $this->getIsActive();
    }

    /**
     * @return string
     */
    function __toString()
    {
        return $this->getUsername();
    }

    /**
     * @return string
     */
    public function serialize()
    {
        return serialize([
            $this->id,
            $this->username,
            $this->password
        ]);
    }

    public function eraseCredentials()
    {
        $this->setPlainPassword(null);
    }

    public function unserialize($serialized)
    {
        return list($this->id, $this->username, $this->password) = unserialize($serialized);
    }

    /**
     * Set full_name
     *
     * @param string $fullName
     * @return $this
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
     * @return $this
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
     * @return $this
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
     * @return $this
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
     * @return $this
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
     * @return $this
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
     * Set facebook_access_token
     *
     * @param string $facebookAccessToken
     * @return $this
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
     * Set facebook_id
     *
     * @param string $facebookId
     * @return $this
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
