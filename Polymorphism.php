<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Fadil");
var_dump($company);

$company->programmer = new BackendProgrammer("Fadil");
var_dump($company);

$company->programmer = new FrontendProgrammer("Fadil");
var_dump($company);

sayHelloProgrammer(new Programmer("Fadil"));
sayHelloProgrammer(new BackendProgrammer("Fadil"));
sayHelloProgrammer(new FrontendProgrammer("Fadil"));