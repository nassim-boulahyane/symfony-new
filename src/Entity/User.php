<?php

namespace App\Entity;

class User
{

    protected $name;
    protected $email;
    protected $date;


    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        return $this->name;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        return $this->email;
    }
    public function getDate()
    {
        return $this->name;
    }
    public function setDate($name)
    {
        $this->name;
    }
}
