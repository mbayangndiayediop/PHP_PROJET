<?php
$personnes = array(
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau Exercice 9</title>
</head>
<body>

<table border="1">
    <tr>
        <th>Nom</th>
        <th>Informations</th>
    </tr>
    
    <?php foreach ($personnes as $nom => $infos) : ?>
        <tr>
            <td><?php echo $nom; ?></td>
            <td>
                <ul>
                    <?php foreach ($infos as $cle => $valeur) : ?>
                        <li><?php echo "$cle: $valeur"; ?></li>
                    <?php endforeach; ?>
                </ul>
            </td>
        </tr>
    <?php endforeach; ?>
    
</table>

</body>
</html>