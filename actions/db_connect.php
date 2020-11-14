<?php
error_reporting( ~E_DEPRECATED & ~E_NOTICE );


$localhost = "localhost";
$username ="root";
$password = "";
$dbname = "cr10-zage-biglibrary";




$connect = new mysqli ($localhost, $username,$password, $dbname);


