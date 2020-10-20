<?php

$filename = "users.csv";

if (file_exists($filename)) {

    //Abre o arquivo em modo leitura
    $file = fopen($filename, "r");
    //File gets obtém a primeira linha do arquivo
    //Explode quebra a string em um array
    $headers = explode(",", fgets($file));


    //Remove caracteres especiais do último elemento de um array
    function removeSpecialCharacters($row): array
    {
        $last = count($row) - 1;
        $specialCharacters = array();
        array_push($specialCharacters, "\n", "\r", "\t");
        foreach ($specialCharacters as $character) {
            $row[$last] = str_replace($character, "", $row[$last]);
        }
        return $row;
    }

    $headers = removeSpecialCharacters($headers);

    $data = array();
    while ($row = fgets($file)) {
        $rowData = removeSpecialCharacters(explode(",", $row));
        for ($i = 0; $i < count($headers); $i++) {
            //Cria uma chave com o elemento i do array headers
            $line[$headers[$i]] = $rowData[$i];
        }
        array_push($data, $line);
    }
    fclose($file);
    echo json_encode($data);
}
