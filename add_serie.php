<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="add.css">
    <ul>
        <li><a href="serie.php">SERIE </a></li><br>
        <li><a href="index.php">FILM </a></li><br>
        <li><a href="hovedmeny.php">HOVEDMENY </a></li>
    </ul>
</head>
<body>




<?php

include "kobling.php";

if(isset($_POST["leggtil"])) {



    // Lagrer skjemafeltene i enklere navn
    $serienavn = $_POST["serienavn"];
    $sjanger = $_POST["sjanger"];
    $rating = $_POST["rating"];
    $årstall = $_POST["årstall"];
    $land = $_POST["land"];
    $språk = $_POST["språk"];
    $bilde = $_POST["bilde"];
    
  
    
    
    
    

    $sql = "INSERT INTO film (tittel, idsjanger, rating, årstall, land, språk, bilde) VALUES ('$serienavn', '$sjanger', '$rating', '$årstall', '$land', '$språk', '$bilde')";

    if($kobling->query($sql)) {
        echo "Spørringen $sql ble gjennomført.";
    } else {
        echo "Noe gikk galt med spørringen $sql
         ($kobling->error).";
    }


}
?>

<form method="POST">
    Serienavn
    <input type="text" name="serienavn"><br><br>
    Sjanger
    <input type="text" name="sjanger"><br><br>
    Rating
    <input type="text" name="rating"><br><br>
    Årstall
    <input type="text" name="årstall"><br><br>
    Land
    <input type="text" name="land"><br><br>
    Språk
    <input type="text" name="språk"><br><br>
    Bilde
    <input type="text" name="bilde"><br><br>


 
    
    
  

   
    <input type="submit" name="leggtil" value="Legg til">
</form>

</body>
</html>

<form 

    

    
</body>
</html>