<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculs Cercle</title>
</head>
<body>

    <h2>Calculs pour un Cercle</h2>

    <form method="post" action="">
        <label for="radius">Entrez le rayon du cercle :</label>
        <input type="text" id="radius" name="radius" required pattern="\d+(\.\d+)?" title="Entrez un nombre">

        <button type="submit">Calculer</button>
    </form>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $radius = floatval($_POST["radius"]);

        
        $diameter = 2 * $radius;
        $perimeter = 2 * M_PI * $radius;
        $area = M_PI * pow($radius, 2);

        
        echo "<h3>Résultats :</h3>";
        echo "<p>Diamètre : " . $diameter . "</p>";
        echo "<p>Périmètre : " . $perimeter . "</p>";
        echo "<p>Surface : " . $area . "</p>";
    }
    ?>

</body>
</html>
