<?php

namespace AppBundle\Entity;

use AppBundle\Entity\User;


class Task
{
    private static $_taskNumbers = 0;

    private $id;

    private $title;

    private $description;

    private $complete;

    private $user;


    public function __construct($title, $description, $complete = false, User $user)
    {
        self::$_taskNumbers++;
		$this->id = uniqid();
        $this->title = $title;
        $this->description = $description;
        $this->complete = $complete;
        $this->user = $user;
    }
    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
    /**
     * Get the value of complete
     */
    public function getComplete()
    {
        return $this->complete;
    }

    /**
     * Set the value of complete
     *
     * @return  self
     */
    public function setComplete($complete)
    {
        $this->complete = $complete;

        return $this;
    }

    /**
     * Get the value of user
     */ 
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  self
     */ 
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }
}
