<h1>Primeira aula de PHP</h1>

<?php
echo "Olá Mundo!"; //exibir mensagem // em vez de 'echo' pode ser 'print'
echo "<br>"; // quebra de linha

//comentário
#Comentário
/*comen
       tário */

/*variáveis iniciam com cifrão
POdem conter letras, numeros, e o caractere sublinhado
não podem começar com numeros
nao podem conter espaços em branco
não podem conter caracteres especiais, exceto o _
Não podem conter palavras reservadas ao php */
$nome = "Alana"; //sring / pode ser '' em vez de "" 
$idade = 16; //inteiro
$altura = 1.64; //float
$peso = 45.8; //float
$casado = false; //booleano
$filhos = "'Tenho': mais ou menos"; // nulo - sem valor definido

echo "Nome: $nome <br>";
echo "Idade: $idade <br>";
echo "Altura: $altura <br>";
echo "peso: $peso <br>";
echo "casado: $casado <br>";
echo "filhos: $filhos <br>";
$imc = $peso/($altura*$altura);
echo "IMC: $imc <br>";

if($imc < 18.5) {
    echo "Você está abaixo do peso.";
} elseif ($imc < 24.9){
    echo "Você está com o peso normal";
} elseif ($imc < 29.9){
    echo "Você está com sobrepeso";
} else {
    echo "Você está obeso";
}
?>