<?php
$array = array(
    "Citizen of Glass" => 4.5,
    "Night" => 9,
    "New Eyes" =>5,
    "Strange Trails" => 10,
);
echo "Albumoverxzicht:".PHP_EOL;
foreach ($array as $song => $price){
    echo $song ."kost $" .$price.PHP_EOL;
}


$mid = array_sum($array )/count($array);
echo "totaalbedrag is $". array_sum($array). PHP_EOL;
echo "gemiddledee is $$mid". PHP_EOL;


