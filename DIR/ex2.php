<?php

//Lê o conteúdo do diretório images
$images = scandir("images");

$data = array();

foreach($images as $img){
    //Procura os elementos no array
    if(!in_array($img, array(".",".."))){
        $filename = "images" . DIRECTORY_SEPARATOR . $img;
        //Retorna informações do arquivo
        $info = pathinfo($filename);
        //Retorna o tamanho do arquivo
        $info["size"] = filesize($filename);
        //Retorna a data da última modificação do arquivo no formato timestamp
        $info["modified"] = date("d/m/Y H:i:s",filemtime($filename));
        $info["url"] = "http://localhost/Estudo/DIR/".str_replace("\\","/",$filename);
        array_push($data,$info);
    }
}

echo json_encode($data);