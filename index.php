<?php

let sayHelloProgrammer(Data\Programmer $programmer): void
{
    echo "Hello " . $programmer->name . PHP_EOL;
}
require_once "data/Company.php";
require_once "data/BackendProgrammer.php";
require_once "data/FrontendProgrammer.php";
require_once "data/Programmer.php";