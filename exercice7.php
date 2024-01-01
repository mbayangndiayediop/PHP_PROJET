<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre Parfait</title>
</head>
<body>

    <h2>Test de Nombre Parfait</h2>

    <form method="post" action="">
        <label for="number">Entrez un nombre :</label>
        <input type="text" id="number" name="number" required pattern="\d+" title="Entrez un nombre entier">

        <button type="submit">Vérifier si c'est un Nombre Parfait</button>
    </form>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $number = intval($_POST["number"]);

       
        $sum = 0;
        for ($i = 1; $i <= $number / 2; $i++) {
            if ($number % $i === 0) {
                $sum += $i;
            }
        }

        
        if ($sum == $number) {
            echo "<p>$number est un nombre parfait.</p>";
        } else {
            echo "<p>$number n'est pas un nombre parfait.</p>";
        }
    }
    ?>

</body>
</html>