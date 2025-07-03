<?php

// function teste()
// {
//     return "teste";
// };

// function teste2($callback)
// {
//     if(is_callable($callback)) {
//         return $callback();
//     } else {
//         return "não é um callback!";
//     }
// }

// $name = "leonardo";
// echo teste2('teste');

// function teste($name)
// {
//     return "Olá, meu nome é $name";
// };

// echo call_user_func('teste', "Leonardo");

class Person
{
    public function teste($name, $age) {
        return "Seu nome é $name e sua idade é $age";
    }

    public function teste2() {
        return "teste2";
    }
};

$person = new Person;

echo call_user_func([$person, 'teste'], "Leonardo", 18);