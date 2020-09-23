<?php

//Muda a configuração  de lingugem para português
setlocale(LC_ALL, "pt_BR","pt_BR.utf-8","portuguese");

//Recupera informações do dia
echo ucwords(strftime("%A %B"));

?>