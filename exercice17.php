
<?php
function afficherTableauXHTML($tableau) {
    echo '<table border="1">';
    
    
    echo '<tr>';
    foreach ($tableau as $cle => $valeur) {
        echo '<th>' . htmlspecialchars($cle) . '</th>';
    }
    echo '</tr>';

    foreach ($tableau[array_keys($tableau)[0]] as $index => $ligne) {
        echo '<tr>';
        foreach ($tableau as $cle => $valeur) {
            echo '<td>' . htmlspecialchars($tableau[$cle][$index]) . '</td>';
        }
        echo '</tr>';
    }

    echo '</table>';
}


$tableauMultidimensionnel = array(
    'Nom' => array('Penda', 'Mareme', 'Dieynaba'),
    'Age' => array(25, 30, 22),
    'Ville' => array('paris', 'New York', 'Berlin')
);

afficherTableauXHTML($tableauMultidimensionnel);
?>