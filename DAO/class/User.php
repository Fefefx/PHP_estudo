<?php

class User
{

    private $userid;
    private $deslogin;
    private $despassword;
    private $dtcadastre;

    private $sql;

    public function __construct()
    {
        $this->sql = new Sql(MYSQLDBNAME, MYSQLPASSWORD);
    }

    public function getUserId(): int
    {
        return $this->userid;
    }

    public function setUserId($userid)
    {
        $this->userid = $userid;
    }

    public function getDeslogin(): string
    {
        return $this->deslogin;
    }

    public function setDeslogin($deslogin)
    {
        $this->deslogin = $deslogin;
    }

    public function getDespassword(): string
    {
        return $this->despassword;
    }

    public function setDespassword($despassword)
    {
        $this->despassword = $despassword;
    }

    public function getDtCadastre(): DateTime
    {
        return $this->dtcadastre;
    }

    public function setDtCadastre($dtcadastre)
    {
        $this->dtcadastre = $dtcadastre;
    }

    public function loadById($id)
    {
        $results = $this->sql->select("SELECT * FROM tb_users WHERE userid = :ID", array(
            ":ID" => $id
        ));
        if (count($results) > 0) {
            $row = $results[0];
            $this->setUserId($row["userid"]);
            $this->setDeslogin($row["deslogin"]);
            $this->setDespassword($row["despassword"]);
            $this->setDtCadastre(new DateTime($row["dtcadastre"]));
        }
    }

    public function getList()
    {
        return $this->sql->select("SELECT * FROM tb_users ORDER BY deslogin;");
    }

    public function search($login)
    {
        return $this->sql->select("SELECT * FROM tb_users WHERE deslogin LIKE :SEARCH ORDER BY deslogin;", array(
            ":SEARCH" => "%" . $login . "%"
        ));
    }

    public function login($login, $password)
    {
        $results = $this->sql->select("SELECT * FROM tb_users WHERE deslogin = :DESLOGIN AND despassword = :DESPASSWORD;", array(
            ":DESLOGIN" => $login,
            ":DESPASSWORD" => $password
        ));
        if (count($results) > 0) {
            $row = $results[0];
            $this->setUserId($row["userid"]);
            $this->setDeslogin($row["deslogin"]);
            $this->setDespassword($row["despassword"]);
            $this->setDtCadastre(new DateTime($row["dtcadastre"]));
        }else {
            throw new Exception("Login e/ou senha inválidos");
        }        
    }

    public function __toString()
    {
        return json_encode(array(
            "userid" => $this->getUserId(),
            "deslogin" => $this->getDeslogin(),
            "despassword" => $this->getDespassword(),
            "dtcadastre" => $this->getDtCadastre()->format("d/m/Y H:i:s")
        ));
    }
}
