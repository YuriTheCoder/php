<h1>Primeira aula de PHP</h1>

<?php
echo "Olá Mundo!";
echo "<br>";

/*variáveis iniciam com cifrão
POdem conter letras, numeros, e o caractere sublinhado
não podem começar com numeros
nao podem conter espaços em branco
não podem conter caracteres especiais, exceto o _
Não podem conter palavras reservadas ao php */
$nome = "Joaquim"; //sring
$idade = 16; //inteiro
$altura = 1.831; //float
$peso = 45.8; //float
$casado = false; //booleano
$filhos = null; // nulo - sem valor definido

echo "Nome: $nome <br>";
echo "Idade: $idade <br>";
echo "Altura: $altura <br>";
echo "peso: $peso <br>";
echo "casado: $casado <br>";
echo "filhos: $filhos <br>";
?>