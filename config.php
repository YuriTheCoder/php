<?php
//Configurações de conexão com o banco de dados 
$host = "localhost";
$database = "biblioteca2a";
$user = "root";
$senha = "";

//criar conexão
$conn = new mysqli (hostname: $host, username: $user, password: $senha, database: $database);

//Verificar conexão
if ($conn -> connect_error){
    die("Conexão falhou: " . $conn ->connect_error);
}
?>