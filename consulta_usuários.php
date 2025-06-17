<h1>Tela de consulta</h1>

<?php
include 'config.php';
// Exibindo texto na tela
$sql = "SELECT * FROM usuarios;"; //Consulta SQL para selecionar todos os registros

$result = mysqli_query(
    mysql: $conn,
    query: $sql);

while($row = mysqli_fetch_assoc(result: $result)){
    echo $row["nome"] . "<br>";
}
?>