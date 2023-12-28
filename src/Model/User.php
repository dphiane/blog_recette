<?php

namespace App\Model;

class User{
    private $id;
    private $email;
    private $password;
    private $name;
    private $last_name;

    public function getPassword():?string
    {
        return $this->password;
    }

    public function setPassword(string $password):self
    {
        $this->password = $password;

        return $this;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId($id):self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of last_name
     */ 
    public function getLast_name()
    {
        return $this->last_name;
    }

    /**
     * Set the value of last_name
     *
     * @return  self
     */ 
    public function setLast_name($last_name)
    {
        $this->last_name = $last_name;

        return $this;
    }
}