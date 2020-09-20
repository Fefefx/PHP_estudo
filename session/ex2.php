<?php

require_once ("config.php");

//Apaga os dados da sessão
session_unset();

//Apaga apenas um dado da sessão
//unset($_SESSION["name"]);

echo $_SESSION["name"];

//Limpa a sessão e remove o usuário do servidor
session_destroy();

?>