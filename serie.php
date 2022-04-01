<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">

    <h2>Meny</h2>
  <ul>
      <li><a href="serie.php">SERIE </a></li>
      <li><a href="index.php">FILM </a></li>
  </ul>

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

$sql = "SELECT * FROM serie JOIN sjanger ON serie.idsjanger=sjanger.idsjanger";
$resultat = $kobling->query($sql);


echo "<table>";
 echo "<tr>
 
 <th>TITTEL</th>
 <th>SJANGER</th>
 <th>TRAILER</th>
 <th>LAND</th>
 <th>ÅRSTALL</th>
 <th>SPRÅK</th>
 <th>RATING</th>
 </tr>
 ";


while($rad = $resultat->fetch_assoc()) {
    $tittel= $rad["tittel"];
    $rating = $rad["rating"];
    $årstall = $rad["årstall"];
    $land = $rad["land"];
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
    <td>$rating</td>
    </tr>

   ";

  
}

 echo" </table>";

?>
</body>
</html>