<?php

require_once("config.php");

echo session_save_path();

echo "<br>";

//Retorna o status da sessão
var_dump(session_status());

echo "<br>";

switch(session_status()){
    case PHP_SESSION_DISABLED:
        echo "As sessões estão desabilitadas";
    break;
    case PHP_SESSION_NONE:
        echo "Sessões habilitadas, porém não há sessão ativa";
    break;
    case PHP_SESSION_ACTIVE:
        echo "Sessão ativa";
    break;
}

?>