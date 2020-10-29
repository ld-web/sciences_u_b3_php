<?php
$array = [1, 4, "test", 8, 9];
var_dump($array);

echo $array[2];

$arrayIndexes = [2 => 1, "re test" => 4];
var_dump($arrayIndexes);

for ($i = 0; $i < count($array); $i++) {
  echo $array[$i] . "<br />";
}

$i = 0; // Initialisation
while ($i < count($array)) { // condition de maintien
  // Code à exécuter
  echo $array[$i] . "<br />";
  $i++; // même chose que $i = $i + 1;
}

foreach ($array as $elem) {
  echo $elem . "<br />";
  var_dump($elem);
}

echo "Foreach sur tableau avec index personnalisés : <br />";

foreach ($arrayIndexes as $key => $val) {
  echo $key . "=>" . $val . "<br />";
}

$i = 0; // Initialisation
do {
  echo $array[$i] . "<br />";
  $i++;
} while ($i < count($array));

// Tableau multi-dimensionnel
$people = [
  [
    "name" => "Test",
    "firstname" => "John",
    "age" => 34
  ],
  [
    "name" => "Williams",
    "firstname" => "Jane",
    "age" => 24
  ]
];

var_dump($people);

/*
John Test - 34 ans
Jane Williams - 24 ans
*/

foreach ($people as $profile) {
  $name = $profile['name'];
  $firstname = $profile['firstname'];
  $age = $profile['age'];
  echo "$firstname $name - $age ans<br />";
}
