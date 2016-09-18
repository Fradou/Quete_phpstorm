<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 18/09/16
 * Time: 11:43
 */
$students = [
    "Emmanuel" => 42,
    "Thierry" => 51,
    "Pascal" =>45,
    "Eric" => 48,
    "Nicolas" => 19
];

$cLasse=count($students);

foreach ($students as $key => $value) {
    echo $key." est âgé de ".$value." ans.<br>";
};

$agetot = 0;
foreach ($students as $value){
    $agetot= $value + $agetot;
};
$moyenne = $agetot / $cLasse;

echo "La moyenne d'âge est ".$moyenne;

?>