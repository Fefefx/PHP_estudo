<?php

function treatName($name)
{
    if (!$name) {
        throw new Exception("Nenhum nome foi informado.", 1);
    }
    echo ucfirst($name) . "<br/>";
}


try {
    treatName("João");
    treatName("");
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    echo "Executou o bloco try!";
}
