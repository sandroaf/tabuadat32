<?php
   $ate = $_GET["ftabuada"];
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada Completa até<?=$ate?></title>
</head>

<body>
    <h1>Tabuada Completa até<?=$ate?></h1>
    <?php 
        for($j = 1;$j <= $ate;$j++) {
            echo "<table>";
            echo "<tr><th colspan='3'>Tabuada de $j</th></tr>";
            for($i = 0;$i <= 10;$i++) {
                echo "<tr><td>$i X $j</td><td> = </td><td>".$i * $j."</td></tr>";
            }
            echo "</table><br>";
        }
    ?>
    <a href="index.php">Voltar</a>
</body>

</html>