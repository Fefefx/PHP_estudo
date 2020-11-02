<form method="post">
    <input type="text" name="busca">
    <button type="submit">Enviar</button>
</form>
<?php

if(isset($_POST["busca"])){
    //Remove as tags html de uma string, deixando apenas as especificadas
    //echo strip_tags($_POST["busca"],"<strong>");
    //Escreve tags html como String
    echo htmlentities($_POST["busca"]); 
}

?>   