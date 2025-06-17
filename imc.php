<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC Simples</title>
    <link rel="stylesheet" href="3.1 imcstyle.css">
</head>
<body>
    <h2>Calculadora de IMC</h2>

    <form method = "post">
        Peso (kg): <input type= "number" name="peso"
        step = "0.1" required><br><br>
        Altura (m): <input type= "number" name="altura"
        step = "0.01" required><br><br>
        <input type="submit" value="Calcular IMC">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"]== "POST"){
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];

        if ($altura > 0){
            $imc = $peso/($altura*$altura);
            echo "<p>Seu IMC é: <strong>" . number_format
            (num: $imc, decimals: 2) . "</strong></p>";
            
            if ($imc < 18.5) {
            echo "<p>Classificação: Abaixo do peso</p>";
            } elseif ($imc < 24.9){
            echo "<p>Classificação: Peso normal </p>";
            } elseif ($imc < 29.9){
            echo "<p> Classificação: Sobrepeso </p>";
            } else {
            echo "<p>Você está obeso</p>";
            }
        } 
    }

    ?>
</body>
</html>
