<?php

$matches = [];
$result = preg_match_all("/Muhammad |Fadil/i", "Muhammad Fadil", $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu ANJING BABI BANGSAT! BERENGSEK ASU PUKIMAK ");

var_dump($result);

$result = preg_split("/[\s,-]/", "Muhammad Fadil,Belajar php");

var_dump($result);