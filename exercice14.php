<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence Immobilière</title>
</head>
<body>

    <h2>Choisissez une action :</h2>

    <form method="post" action="traitement.php">
        <button type="submit" name="action" value="vendre">Vendre</button>
        <button type="submit" name="action" value="acheter">Acheter</button>
        <button type="submit" name="action" value="louer">Louer</button>
    </form>

</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $action = $_POST["action"];

    
    switch ($action) {
        case "vendre":
            header("Location: vendre.php");
            break;
        case "acheter":
            header("Location: acheter.php");
            break;
        case "louer":
            header("Location: louer.php");
            break;
        default:
            
            header("Location: erreur.php");
    }
}
?>