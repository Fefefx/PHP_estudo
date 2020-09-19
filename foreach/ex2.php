<form>

    <input type="text" name="name">
    <input type="date" name="birth">
    <input type="submit" value="OK">

</form>
<?php
if (isset($_GET)) {
    foreach ($_GET as $key => $value) {
        echo "Nome do campo: " . $key . "<br>";
        echo "Valor do campo: " . $value;
        echo "<hr>";
    }
}
?>