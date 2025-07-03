<?php

// $name = 'Leonardo';

//arrays

$data = ["são paulo", "Bola", "Henrique", false];
$person = ["name" => 'Leonardo', "age" => 18, "documents" => ["cpf" => "493923392", "rg" => "23213212"]];

$lengh = count($data);

//4
$data[$lengh] = "Leo";


// var_dump($names[2]);


// var_dump($names[3]);

// foreach($names as $name)
// {
//     echo $name;
// }


$names = ["Leonardo", "Maria", "Pedro", "Gustavo", "Lucas"];

for ($i=0; $i < count($names) ; $i++) { 
    if($i == 1) {
        continue;
    }
    // echo "$names[$i] ";
}

foreach ($names as $key => $name) {
    if($key == 3) {
        continue;
    }
    echo "$name ";
}

// for ($i=0; $i < count($names) ; $i++) { 
//     echo $names[$i];
// }

// $i = 0;
// while ($i < count($names)) {
//     echo $names[$i];
//     $i++;
// }
                    //uso do key opcional, somente quando quiser trabalhar com o indice
foreach ($names as $key => $name) {
    // echo $key . "=>" . $name;
}