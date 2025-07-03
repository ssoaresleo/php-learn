<?php

$name = "Leonardo";
$age = 18;

function person() {
    global $name;

    echo $GLOBALS['age'];
    echo $name;
};

person();