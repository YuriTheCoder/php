<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="5.1estilo.css">
</head>
<body>
 <h2>Calculadora de combustível</h2>
    <section>
    <form method = "post">
        Gasolina (x.xx): <input type= "number" name="gasolina"
        step = "0.1" required><br><br>
        Etanol (x.xx): <input type= "number" name="etanol"
        step = "0.01" required><br><br>
        <input type="submit" value="Calcular preço">
    </form>
    </section>
    <?php
    if ($_SERVER["REQUEST_METHOD"]== "POST"){
        $gasolina = $_POST["gasolina"];
        $etanol = $_POST["etanol"];

        if ($gasolina > 0){
            $combustivel = 70/100*$gasolina;
            echo "<p>O preço ideal do etanol é: <strong>" . number_format
            (num: $combustivel, decimals: 2) . "</strong></p>";
            
            if ($etanol<=$combustivel) {
            echo "<p>O etanol está mais vantajoso que a gasolina.</p>";
            } else {
            echo "<p>O etanol está muito caro. Utilize a gasolina.</p>";
            }
        } 
    }
    ?>
</body>
</html>
