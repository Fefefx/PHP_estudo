<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);

$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5, 440, 350, "Divanei Aparecido", $titleColor);
imagestring($image, 5, 440, 370, utf8_decode("Concluído em: ") . date("d/m/Y"), $titleColor);

header("Content-type: image/jpeg");

//Renderiza a imagem
/*
    1° A imagem a ser renderizada
    2° O nome que o arquivo terá ao ser salvo no disco rígido
    3° A qualidade da imagem final em uma escada 0 até 100
*/
imagejpeg($image, "certificado-" . date("Y-m-d") . ".jpg", 10);

imagedestroy($image);
