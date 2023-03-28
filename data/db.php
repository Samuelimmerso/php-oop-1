<?php

include_once __DIR__ . "/../models/Movie.php";
include_once __DIR__ . "/../models/Genere.php";

$azione = new Genere(1, "Azione");
$avventura = new Genere(2, "Avventura");
$fantasy = new Genere(3, "Fantasy");
$Epico = new Genere(4, "Epico");
$thriller = new Genere(5, "thriller");