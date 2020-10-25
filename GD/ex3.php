<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);

$gray = imagecolorallocate($image, 100, 100, 100);

$dirFonts = "fonts" . DIRECTORY_SEPARATOR;

imagettftext(
    $image, //Imagem
    32, //Tamanho
    0, //Ângulo
    320, //Largura
    250, //Altura
    $titleColor, //Cor do texto
    $dirFonts . "Bevan" . DIRECTORY_SEPARATOR . "Bevan-Regular.ttf", //Fonte
    "CERTIFICADO" //Mensagem
);

imagettftext(
    $image,
    32,
    0,
    375,
    350,
    $titleColor,
    $dirFonts . "Playball" . DIRECTORY_SEPARATOR . "Playball-Regular.ttf",
    "Divanei Aparecido"
);


imagestring($image, 5, 440, 370, utf8_decode("Concluído em: ") . date("d/m/Y"), $titleColor);

header("Content-type: image/jpeg");

//Renderiza a imagem
imagejpeg($image);

imagedestroy($image);
