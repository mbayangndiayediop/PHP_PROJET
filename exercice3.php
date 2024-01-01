<?php

if (!isset($_POST['nombre_initial'])) {

    $nombre_initial = rand(100, 999);

    $nombre_de_coups = 0;

} else {

    $nombre_initial = $_POST['nombre_initial'];

    $nombre_de_coups = $_POST['nombre_de_coups'] + 1;

}

 

if (isset($_POST['submit'])) {

    $tentative = $_POST['tentative'];

 

    if ($tentative == $nombre_initial) {

        $message = "Félicitations ! Vous avez trouvé le nombre en $nombre_de_coups

 

        $nombre_initial = rand(100, 999);

        $nombre_de_coups = 0;

    }

}

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Devinez le nombreavec bouble while</title>

</head>

<body>

 

    <h1>Devinez le nombre</h1>

    <p><?php echo $message; ?></p>

 

    <form method="post" action="">

        <input type="hidden" name="nombre_initial" value="<?php echo $nombre_initial; ?>">

        <input type="hidden" name="nombre_de_coups" value="<?php echo $nombre_de_coups; ?>">

        <label for="tentative"> label>

        <input type="text" name="tentative" id="tentative" required>

        <button type="submit" name="submit">Soumettre</button>

    </form>

 

    <?php

    $i = 1;

    while ($i <= $nombre_de_coups) {

        echo "<p>Tentative $i : " . ($_POST["historique_tentatives_$i"] ?? "Pas disponible") . "</p>";

        $i++;

    }

    ?>

 

</body>

</html>

 