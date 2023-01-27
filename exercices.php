

<!-- EXO 1 -->
<?php
$variable = 5;
$word = "c'est ";
$word2 = "vie.";
$word3 = "Simplon ";
$word4 = "la ";
echo($word3 . $word . $word4 . $word2);
?>

<!-- EXO 2 -->
<?php
$variable1 = 12;
$variable2 = 4;
echo($variable1 / $variable2);
?>

<!-- EXO 3 -->
<?php
$variable1 = "clement";
$variable2 = "extrapolation";
echo(strlen($variable1) + strlen($variable2));
?>

<!-- EXO 4 -->
<?php
$maitrise_du_code = 1000;
if ($maitrise_du_code >= 1000) {
    echo("je maitrise tellement le code maintenant");
}
?>

<!-- EXO 5 -->
<?php
$chiffre_fetiche_sandrine = 7;
$chiffre_fetiche_xavier = 130;
$chiffre_fetiche_andre = 8;

$chiffre_fetiche_andre = $chiffre_fetiche_sandrine;
$chiffre_fetiche_sandrine = $chiffre_fetiche_xavier;
$chiffre_fetiche_xavier = $chiffre_fetiche_andre;

echo($chiffre_fetiche_xavier);
echo("/");
echo($chiffre_fetiche_sandrine);
echo("/");

if($chiffre_fetiche_sandrine - ($chiffre_fetiche_andre . $chiffre_fetiche_xavier) > 50) {
    echo($chiffre_fetiche_sandrine - ($chiffre_fetiche_andre . $chiffre_fetiche_xavier));
}
?>

<!-- EXO 6 -->
<?php
$compte = -100;
if($compte > 0) {
    echo("bravo vous Ãªtes un bon gestionnaire");
} else {
    echo("vous faites vraiment n'importe quoi avec votre argent");
}
?>

<!-- EXO 7 -->
<?php
$vent = 40;
$houle = 15;
$cadence_vague = 9;

if ($vent > 30 && $houle <= 20 && $cadence_vague >= 10) {
    echo("vous pouvez aller surfer");
} else if ($vent < 30 && $houle <= 30 && $cadence_vague <= 8) {
    echo("vous pouvez aller surfer");
} else {
    echo("vous ne pouvez pas aller surfer");
}
?>

<!-- EXO 8 -->

<?php
    $nombre_1 = 88;
    $nombre_2 = 7;
    $nombre_3 = 23;
    $nombre_4 = 5;
    $nombre_5 = 45;
    $nombre_6 = 12;

function multipleDeDeux($nbr1, $nbr2) {

    if($nbr1 % $nbr2 == 0) {
        return $nbr1;
    } else {
        return $nbr1 * -1;
    }
}

$result = multipleDeDeux($nombre_1, 2) + multipleDeDeux($nombre_2, 2) + multipleDeDeux($nombre_3, 2) +multipleDeDeux($nombre_4, 2) + multipleDeDeux($nombre_5, 2) + multipleDeDeux($nombre_6, 2);

echo $result;
?>
Réduire
exo.php
3 Ko
﻿
Benjamin-Benoit-DWWM7-Alès#5088
Sosie non officiel de Beyoncé