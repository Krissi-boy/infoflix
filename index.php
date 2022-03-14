

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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

$sql = "SELECT * FROM film";
$resultat = $kobling->query($sql);

echo "Spørringen $sql ga $resultat->num_rows radar.";

while($rad = $resultat->fetch_assoc()) {
    $film_id = $rad["film_id"]
    $filmnavn = $rad["filmnavn"];

    echo "$film_id $filmnavn <br>";
}

?>   
</body>
</html>