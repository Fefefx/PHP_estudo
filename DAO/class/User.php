<?php

class User
{

    private $userid;
    private $deslogin;
    private $despassword;
    private $dtcadastre;

    private $sql;

    public function __construct($login = "", $password = "")
    {
        $this->sql = new Sql(MYSQLDBNAME, MYSQLPASSWORD);
        $this->setDeslogin($login);
        $this->setDespassword($password);
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
            $this->setData($results[0]);
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
            $this->setData($results[0]);
        } else {
            throw new Exception("Login e/ou senha inválidos");
        }
    }

    public function setData($data)
    {
        $this->setUserId($data["userid"]);
        $this->setDeslogin($data["deslogin"]);
        $this->setDespassword($data["despassword"]);
        $this->setDtCadastre(new DateTime($data["dtcadastre"]));
    }

    public function insert()
    {
        $results = $this->sql->select("CALL sp_users_insert(:LOGIN, :PASSWORD)", array(
            ":LOGIN" => $this->getDeslogin(),
            ":PASSWORD" => $this->getDespassword(),
        ));
        if (count($results) > 0) {
            $this->setData($results[0]);
        }
    }

    public function update($login, $password)
    {
        $this->setDeslogin($login);
        $this->setDespassword($password);
        $this->sql->query("UPDATE tb_users SET deslogin = :LOGIN, despassword = :PASSWORD WHERE userid = :ID;", array(
            ":LOGIN" => $this->getDeslogin(),
            ":PASSWORD" => $this->getDespassword(),
            ":ID" => $this->getUserId()
        ));

    }

    public function delete()
    {
        $this->sql->query("DELETE FROM tb_users WHERE userid= :ID;",array(
            ":ID"=>$this->getUserId()
        ));
        $this->setUserId(0);
        $this->setDeslogin("");
        $this->setDespassword("");
        $this->setDtCadastre(new DateTime());
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
