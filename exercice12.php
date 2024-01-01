<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Adresse Client</title>
</head>
<body>
    <form action="traitement.php" method="post">
        <fieldset>
      
        <legend>Adresse Client</legend>
            <label for="nom">Nom :</label>
            <input type="text" name="nom" required><br>

            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" required><br>

            <label for="adresse">Adresse :</label>
            <input type="text" name="adresse" required><br>

            <label for="ville">Ville :</label>
            <input type="text" name="ville" required><br>

            <label for="codePostal">Code Postal :</label>
            <input type="text" name="codePostal" required><br>
        </fieldset>
        <input type="submit" value="Soumettre">         
    </form>
</body>
</html>


//Php traitement 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement du Formulaire</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupération des données du formulaire
        $nom = htmlspecialchars($_POST["nom"]);
        $prenom = htmlspecialchars($_POST["prenom"]);
        $adresse = htmlspecialchars($_POST["adresse"]);
        $ville = htmlspecialchars($_POST["ville"]);
        $codePostal = htmlspecialchars($_POST["codePostal"]);

        // Affichage des données dans un tableau XHTML
        echo "<h2>Données du Client</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Nom</th><th>Prénom</th><th>Adresse</th><th>Ville</th><th>Code Postal</th></tr>";
        echo "<tr><td>$nom</td><td>$prenom</td><td>$adresse</td><td>$ville</td><td>$codePostal</td></tr>";
        echo "</table>";
    }
    ?>
</body>
</html>

