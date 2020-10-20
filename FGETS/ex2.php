<?php

$filename = "logo.png";

//Realiza a leitura de imagens e converte para base64
$base64 = base64_encode(file_get_contents($filename));

//Instancia a classe que recupera informações dos arquivos
$fileinfo = new finfo(FILEINFO_MIME_TYPE);

//Retorna o mime type do arquivo
$mimetype = $fileinfo->file($filename);

$base64encode =  "data:" . $mimetype . ";base64," . $base64;

?>

<a href="<?=$base64encode?>" target="_blank">Link para imagem</a>

<img src="<?=$base64encode?>"/>