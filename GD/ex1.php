<?php

//Define que o retorno será uma imagem do tipo png.
header("Content-type: image/png");

//Cria uma imagem. 
$image = imagecreate(256, 256);

//Cria as cores black e red usando do padrão RGB.
//Como a cor black foi criada primeiro, define ela como plano de fundo.
$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);

//Escreve o texto "Curso de PHP 7" na imagem
/**
 * Parâmetros:
 *  1° Imagem,
 *  2° Tamanho da fonte de 1 a 5
 *  3° Largura em pixels
 *  4° Altura em pixels
 *  5° Texto a ser escrito
 *  6° Cor do texto
 */
imagestring($image, 5, 60, 120,"Curso de PHP 7",$red);

//Gera a imagem
imagepng($image);

//Limpa a imagem da memória do servidor
imagedestroy($image);