<?php

$file = fopen("test.txt","w+");

fclose($file);

//Remove um arquivo
unlink("test.txt");

echo "Arquivo removido com sucesso !";