<?php
function calculerSinus($angle, $unite = 'radian') {
    
    switch ($unite) {
        case 'degre':
            $angle = deg2rad($angle);
            break;
        case 'grade':
            $angle = deg2rad($angle * 0.9);
            break;
       
    }

    
    $sinus = sin($angle);

    return $sinus;
}


$angleEnRadians = 1.5;
$angleEnDegres = 90;
$angleEnGrades = 100;

echo "Sinus en radians : " . calculerSinus($angleEnRadians) . "<br>";
echo "Sinus en degrés : " . calculerSinus($angleEnDegres, 'degre') . "<br>";
echo "Sinus en grades : " . calculerSinus($angleEnGrades, 'grade') . "<br>";
?>