<?php 
setcookie("empresa", "Cookies para o chrome", time() + 3600);
echo "Cookie criado <br>";

var_dump($_COOKIE);
?>