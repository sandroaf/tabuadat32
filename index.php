<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada Simples 0-10</title>
</head>
<body>
    <h1>Tabadua de 0-10</h1>
    <form action="#" method="GET">
         <label for="fnum">Tabuade de: </label>
         <input type="number" id="fnum" name="fnum">
         <br>
         <button type="submit">Tabuada</button>
    </form>
    <br>
    <?php 
        if (isset($_GET["fnum"])) {
            $num = $_GET["fnum"];
            echo "<table>";
            echo "<tr><th colspan='3'>Tabuada de $num</th></tr>";
            for($i = 0;$i <= 10;$i++) {
                echo "<tr><td>$i X $num</td><td> = </td><td>".$i * $num."</td></tr>";
            }
            echo "</table>";
        }   
    ?>
    <br>
    <form action="tabuadacompleta.php" method="GET">
    <h1>Tabadua Completa 0-10</h1>
    <form action="#" method="GET">
         <label for="ftabuada">Tabuade até: </label>
         <input type="number" id="ftabuada" name="ftabuada">
         <br>
         <button type="submit">Tabuadas</button>
    </form>
    <br>
 
    </form>
</body>
</html>