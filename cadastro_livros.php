<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editora = $_POST['editora'];
    $ano_publicacao = $_POST['ano-publicacao'];
    $categoria = $_POST['categoria'];

    $sql = "INSERT INTO livros (titulo, autor, editora, ano_publicacao, categoria) VALUES(
    '$titulo', '$autor', '$editora', '$ano_publicacao', '$categoria')";
    if (mysqli_query(mysql:$conn, query:$sql)){
        echo "Livro cadastrado com sucesso!";
    } else{
        echo "Erro ao cadastrar livro!";
        mysqli_error(mysql:$conn);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de livros</title>
</head>
<body>
    <h1>Cadastro de Novo Livro</h1>
    <form method="post" action="">
        <label for="titulo"> Título:</label><br>
        <input type="text" id="titulo" name="titulo" required> <br><br>

        <label for="autor"> Autor:</label><br>
        <input type="text" id="autor" name="autor" required> <br><br>

        <label for="editora"> Editora:</label><br>
        <input type="text" id="editora" name="editora" required> <br><br>

         <label for="ano_publicacao"> Ano de publicação:</label><br>
        <input type="numb34" id="ano_publicacao" name="ano_publicacao" min="0" max="9999"><br><br>

        <label for="categoria">Categoria:</label><br>
        <input type="text" id="categoria" name="categoria"><br><br>

        <input type="submit" value="Cadastrar Livro">
    </form>
</body>
</html>