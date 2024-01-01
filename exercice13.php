<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul TVA</title>
</head>
<body>
    <form action="traitement_tva.php" method="post">
        <label for="prixHT">Prix HT :</label>
        <input type="text" name="prixHT" value="<?php echo isset($_POST['prixHT']) ? $_POST['prixHT'] : ''; ?>" required><br>

        <label for="tauxTVA">Taux de TVA :</label>
        <input type="text" name="tauxTVA" value="<?php echo isset($_POST['tauxTVA']) ? $_POST['tauxTVA'] : ''; ?>" required>%<br>

        <input type="submit" value="Calculer">
    </form>
</body>
</html>


 //traitement_tva.php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat TVA</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupération des données du formulaire
        $prixHT = isset($_POST['prixHT']) ? floatval($_POST['prixHT']) : 0;
        $tauxTVA = isset($_POST['tauxTVA']) ? floatval($_POST['tauxTVA']) : 0;

        // Calcul de la TVA et du prix TTC
        $montantTVA = $prixHT * ($tauxTVA / 100);
        $prixTTC = $prixHT + $montantTVA;

        // Affichage des résultats dans des zones de texte
        echo "<h2>Résultat TVA</h2>";
        echo "<label for='montantTVA'>Montant de la TVA :</label>";
        echo "<input type='text' name='montantTVA' value='$montantTVA' readonly><br>";

        echo "<label for='prixTTC'>Prix TTC :</label>";
        echo "<input type='text' name='prixTTC' value='$prixTTC' readonly>";
    }
    ?>
</body>
</html>

