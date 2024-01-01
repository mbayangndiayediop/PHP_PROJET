<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices 8 et 9</title>
</head>
<body>

<h2>Exercice 8</h2>
<table border="1">
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Ville</th>
        <th>Âge</th>
    </tr>

    <?php
    $personnes8 = array(
        'DIOP' => array('Mbayang', 'Dakar', 20),
        'NDIAYE' => array('Penda', 'Thies', 12)
    );

    reset($personnes8);
    while ($nom = key($personnes8)) {
        $infos = current($personnes8);
        echo "<tr>";
        echo "<td>$nom</td>";
        foreach ($infos as $valeur) {
            echo "<td>$valeur</td>";
        }
        echo "</tr>";
        next($personnes8);
    }
    ?>
    
</table>

<h2>Exercice 9</h2>
<table border="1">
    <tr>
        <th>Nom</th>
        <th>Informations</th>
    </tr>

    <?php
    $personnes9 = array(
        'DIOP' => array(
            'prenom' => 'Mareme',
            'ville' => 'Dakar',
            'age' => 28
        ),
        'GUEYE' => array(
            'prenom' => 'Fatou',
            'ville' => 'Thies',
            'age' => 32
        )
    );

    reset($personnes9);
    while ($nom = key($personnes9)) {
        $infos = current($personnes9);
        echo "<tr>";
        echo "<td>$nom</td>";
        echo "<td>";
        foreach ($infos as $cle => $valeur) {
            echo "$cle: $valeur<br>";
        }
        echo "</td>";
        echo "</tr>";
        next($personnes9);
    }
    ?>
    
</table>

</body>
</html>