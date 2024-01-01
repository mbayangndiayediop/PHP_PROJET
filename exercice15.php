<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capitalisation des Chaînes</title>
</head>
<body>

    <h2>Capitalisation des Chaînes</h2>

    <form method="post" action="">
        <label for="inputStrings">Entrez des chaînes (séparées par des virgules) :</label>
        <input type="text" id="inputStrings" name="inputStrings" required>

        <button type="submit">Capitaliser</button>
    </form>

    <?php
    function capitalizeFirstLetter(array &$strings) {
        foreach ($strings as &$str) {
            $str = ucfirst(strtolower($str));
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputStrings = isset($_POST["inputStrings"]) ? $_POST["inputStrings"] : "";
        $stringsArray = explode(",", $inputStrings);
        capitalizeFirstLetter($stringsArray);
    ?>
        <h3>Résultat :</h3>
        <ul>
            <?php foreach ($stringsArray as $str) : ?>
                <li><?php echo htmlspecialchars($str); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php } ?>

</body>
</html>