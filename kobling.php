<?php
// Tilkoblingsinformasjon
$tjener = "localhost";
$brukernavn = "root";
$passord = "";
$database = "school_flix"; // Denne vil variere

// Oprette en kobling
$kobling = new mysqli ($tjener, $brukernavn, $passord, $database);

// Sjekk om koblingen virker
if ($kobling->connect_error) {
    die("noe gikk galt: " . $kobling->connect_error);
} else {
    echo "koblingen virker.<br>";
}   

// Angi UTF-8 som tegnesett
$kobling->set_charset("utf8");


?>