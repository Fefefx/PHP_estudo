<?php

$folder = "arquivos";
$permission = "0775";

if(!is_dir($folder)) mkdir($folder, $permission);

echo "Diretório criado com sucesso!";

