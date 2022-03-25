

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

$sql = "SELECT * FROM film JOIN sjanger ON film.idsjanger=sjanger.idsjanger";
$resultat = $kobling->query($sql);

echo "Spørringen $sql ga $resultat->num_rows titler.<br>";


echo "<table>";
 echo "<tr>
 
 <th>TITTEL</th>
 <th>SJANGER</th>
 <th>TRAILER</th>
 <th>LAND</th>
 <th>ÅRSTALL</th>
 <th>SPRÅK</th>
 <th>VARIGHET</th>
 <th>RATING</th>
 <th>AWARDS</th>

 </tr>
 ";


while($rad = $resultat->fetch_assoc()) {
    $tittel= $rad["tittel"];
    $varighet = $rad["varighet"];
    $rating = $rad["rating"];
    $årstall = $rad["årstall"];
    $land = $rad["land"];
    $awards = $rad["awards"];
    $trailer = $rad["trailer"];
    $språk = $rad["språk"];
    $sjanger = $rad["navn"];
    $YouTube = $rad["filnavn"];

    echo "

    <tr> 
    
    <td>$tittel</td>
    <td>$sjanger</td>
    <td>$trailer <iframe width='560' height='315' src='https://www.youtube.com/embed/$YouTube' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></td>
    <td>$land</td>
    <td>$årstall</td>
    <td>$språk</td>
    <td>$varighet</td>
    <td>$rating</td>
    <td>$awards</td>
    </tr>

   ";

  
}

 echo" </table>";


?> 
</body>
</html>