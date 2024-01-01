<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diviseurs d'un Nombre</title>
</head>
<body>

    <h2>Diviseurs d'un Nombre</h2>

    <form method="post" action="">
        <label for="number">Entrez un nombre :</label>
        <input type="text" id="number" name="number" required pattern="\d+" title="Entrez un nombre entier">

        <button type="submit">Afficher les Diviseurs</button>
    </form>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $number = intval($_POST["number"]);

       
        echo "<h3>Diviseurs de $number :</h3>";
        echo "<p>1";

        for ($i = 2; $i <= $number / 2; $i++) {
            if ($number % $i === 0) {
                echo ", $i";
            }
        }

        echo ", $number</p>"; 
    }
    ?>

</body>
</html>