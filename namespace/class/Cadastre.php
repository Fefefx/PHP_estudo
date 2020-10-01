<?php

class Cadastre
{
    private $name;
    private $email;
    private $password;

    public function __construct($name = '', $email = '', $password = '')
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function __toString()
    {
        return json_encode(array(
            "name"=>$this->getName(),
            "email"=>$this->getEmail(),
            "password"=>$this->getPassword()
        ));
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
}
