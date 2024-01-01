<?php
//Exercice8
$personnes8 = array(
    'DIOP' => array('Mbayang', 'Dakar', 20),
    'NDIAYE' => array('Penda', 'Thies', 12)
);

echo "<h2>Exercice 8</h2>";
echo "<table border='1'>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Ville</th>
            <th>Âge</th>
        </tr>";

foreach ($personnes8 as $nom => $infos) {
    echo "<tr>";
    echo "<td>$nom</td>";
    foreach ($infos as $valeur) {
        echo "<td>$valeur</td>";
    }
    echo "</tr>";
}

echo "</table>";

// Exercice 9
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

echo "<h2>Exercice 9</h2>";
echo "<table border='1'>
        <tr>
            <th>Nom</th>
            <th>Informations</th>
        </tr>";

foreach ($personnes9 as $nom => $infos) {
    echo "<tr>";
    echo "<td>$nom</td>";
    echo "<td>";
    foreach ($infos as $cle => $valeur) {
        echo "$cle: $valeur<br>";
    }
    echo "</td>";
    echo "</tr>";
}

echo "</table>";
?>