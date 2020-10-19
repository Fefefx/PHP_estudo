<?php

/*Abre o aqruivo log.txt. Com a opção + cria o arquivo
se não existir e com w habilita a opção de escrita.
Zera o conteúdo do arquivo antes de cada escrita. */
//$file = fopen("log.txt","w+");

//Adiciona mais informações ao arquivo
$file = fopen("log.txt","a+");

//Escreve dentro do arquivo
fwrite($file,date("Y-m-d H:i:s") . "\r\n");

//Confirma as alterções no arquivo
fclose($file);

echo "Arquivo criado com sucesso !";