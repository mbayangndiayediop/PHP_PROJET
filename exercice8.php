<?php
$personnes8 = array(
    'DIOP' => array('Mbayang', 'Dakar', 20),
    'NDIAYE' => array('Penda', 'Thies', 12)
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau Exercice 8</title>
</head>
<body>

<table border="1">
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Ville</th>
        <th>Âge</th>
    </tr>
    
    <?php foreach ($personnes8 as $nom => $infos) : ?>
        <tr>
            <td><?php echo $nom; ?></td>
            <?php foreach ($infos as $valeur) : ?>
                <td><?php echo $valeur; ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
    
</table>

</body>
</html>