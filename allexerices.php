<html>
    <head></head>
    <body>

//exercice4
<?php
$note_maths = 15;
$note_francais = 12;
$note_histoire_geo = 9;

$moyenne = ($note_maths + $note_francais + $note_histoire_geo) / 3;

echo 'La moyenne est de : '.$moyenne.'/20';
?>


//exercce5
<?php
$prix_ht = 50;
$tva = 20;

$prix_ttc = $prix_ht + ($prix_ht * $tva / 100);

echo 'Le prix TTC est : '.$prix_ttc.' €';
?>

//exricice6
<?php
$test = "42";
var_dump($test);
?>
//exercice7
<?php
$budget = 1553.89;
$achats = 1554.76;

if ($budget >= $achats) {
    echo "Le budget permet de payer les achats.";
} else {
    echo "Le budget ne permet pas de payer les achats.";
}
?>
//exercice8
<?php
$nombre = 15;

if ($nombre % 3 == 0 && $nombre % 5 == 0) {
    echo "Le nombre est un multiple de 3 et de 5.";
} else {
    echo "Le nombre n'est pas un multiple de 3 et de 5.";
}
?>


 </body>
 </html>
