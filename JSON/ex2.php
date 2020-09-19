<?php

    $json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glaucio","idade":25}]';
    /*
        Decodifica o JSON e transforma o valor array graças ao parâmetro true,
        sem o parâmetro decodifica os dados em objetos.
    */
    $data = json_decode($json,true); 
    var_dump($data);
?>