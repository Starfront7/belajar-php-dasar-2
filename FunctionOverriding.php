<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Fadil";
$manager->sayHello("Fadil");

$vp = new VicePresident();
$vp->name = "Gimms";
$vp->sayHello("Gimms");
