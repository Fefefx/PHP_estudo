<?php

require_once("config.php");

//Recupera a seguinte sessão
session_id("05280420885d6c646514fed23e053d18");

//Gera um novo id de sessão
//Ideal para sistemas de login, afim de evitar ataques de id de sessão
//session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>