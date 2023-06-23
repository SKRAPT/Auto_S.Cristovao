<?php

$dbHost ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbName = "usuarios";

$conexao = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

if(!$conexao){
    die("Connect Failed".mysqli_connect_error() );
}

?>
