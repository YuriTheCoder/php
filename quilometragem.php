<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Consumo de combustível</title>
</head>
<body>
     <h2>Calculadora de IMC</h2>

    <form method = "post">
        Nome: <input type= "name" name="nome"
        step = "0.1" required><br><br>
        Distância percorrida (kg): <input type= "number" name="distancia"
        step = "0.1" required><br><br>
        Combustível gasto (L): <input type= "number" name="combustivel"
        step = "0.01" required><br><br>
        <input type="submit" value="Calcular consumo">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"]== "POST"){
        $distancia = $_POST["distancia"];
        $combustivel = $_POST["combustivel"];
        $consumo = $combustivel / $distancia;

        if ($consumo > 0){
            $consumo = $distancia/$combustivel;
            echo "<p>Seu consumo foi de: <strong> km/l" . number_format
            (num: $consumo, decimals: 2) . "</strong></p>";
            
            if ($consumo < 8) {
            echo "<p>Seu consumo foi muito alto</p>";
            } elseif ($consumo <14){
            echo "<p>Seu consumo está estável.</p>";
            } else {
            echo "<p>Seu consumo está ótimo.</p>";
            }
        } 
    }

    ?>
</body>
</html>