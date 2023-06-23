<?php
include("config.php");
$nome=$_POST["nome"];
$email=$_POST["email"];
$telefone=$_POST["telefone"];
$lavagens=$_POST["lavagens"];

$sql="INSERT INTO usuarios(nome,email,telefone,lavagens) VALUES ('$nome','$email','$telefone','$lavagens')";

if(mysqli_query($conexao, $sql)){
    echo "Sucesso";
}
else
{
    }
    mysqli_close($conexao);
?>