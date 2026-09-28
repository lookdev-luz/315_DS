<?php

echo "Metodo recebido: ";
echo $_SERVER["REQUEST_METHOD"];

echo "\n\nDados recebidos pelo POST:\n";

print_r($_POST);
?>