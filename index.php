

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

  <link rel="stylesheet" href="index.css">

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

echo "Spørringen $sql ga $resultat->num_rows titler.<br>";


while($rad = $resultat->fetch_assoc()) {
    $tittel= $rad["tittel"];
    $varighet = $rad["varighet"];
    $rating = $rad["rating"];
    $årstall = $rad["årstall"];
    $land = $rad["land"];
    $awards = $rad["awards"];
    $trailer = $rad["trailer"];
    $språk = $rad["språk"];


    echo 
    "<h1> <p>$tittel</p></h1>
    
    varighet: <p>$varighet
    
    rating: <p>$rating</p>
    
    årstall: $årstall
    
    land: $land 
    
    awards: $awards
    
    trailer: $trailer
    
    språk: $språk</p>";
}




?> 
</body>
</html>