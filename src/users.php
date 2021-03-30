<?php
// src/Product.php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class users
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    /**
     * @ORM\Column(type="integer")
     */
    private $user_id;
    /**
     * @ORM\Column(type="string")
     */
    private $user_name;
    /**
     * @ORM\Column(type="integer"
     */
    private $user_password;
    /**
     * @ORM\Column(type="")
     */
    private $user_email;
    /**
     *@ORM\Column(type="datetime")
     */
    private $user_time;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUserEmail()
    {
        return $this->user_email;
    }

    /**
     * @param mixed $user_name
     */
    public function setUserName($user_name): void
    {
        $this->user_name = $user_name;
    }
    /**
     * @return mixed
     */
    public function getUserPassword()
    {
        return $this->user_password;
    }

    /**
     * @param mixed $user_password
     */
    public function setUserPassword($user_password): void
    {
        $this->user_password = $user_password;
    }

    /**
     * @return mixed
     */
    public function getUserTime()
    {
        return $this->user_time;
    }

    /**
     * @param mixed $user_time
     */
    public function setUserTime($user_time): void
    {
        $this->user_time = $user_time;
    }
}