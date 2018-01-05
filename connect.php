<?php


$connect = mysql_connect("localhost", "root", "pizzapie3") or die(mysql_error());

mysql_select_db("rememberMe", $connect) or die(mysql_error());


?>