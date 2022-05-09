<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="add.css">
</head>
<body>




<?php

include "kobling.php";

if(isset($_POST["leggtil"])) {



    // Lagrer skjemafeltene i enklere navn
    $filmnavn = $_POST["filmnavn"];
    $sjanger = $_POST["sjanger"];
    $land = $_POST["land"];
    $årstall = $_POST["årstall"];
    $språk = $_POST["språk"];
    $varighet = $_POST["varighet"];
    $rating = $_POST["rating"];
    $awards = $_POST["awards"];
    $bilde = $_POST["bilde"];
    
  
    
    
    
    

    $sql = "INSERT INTO film (tittel, idsjanger, land, årstall, språk, varighet, rating, awards) VALUES ('$filmnavn', '$sjanger','$land','$årstall', '$språk', '$varighet', '$rating', '$awards', '$bilde')";

    if($kobling->query($sql)) {
        echo "Spørringen $sql ble gjennomført.";
    } else {
        echo "Noe gikk galt med spørringen $sql
         ($kobling->error).";
    }


}
?>

<form method="POST">
    Filmnavn
    <input type="text" name="filmnavn"><br><br>
    Sjanger
    <input type="text" name="sjanger"><br><br>
    Land
    <input type="text" name="land"><br><br>
    Årstall
    <input type="text" name="årstall"><br><br>
    Språk
    <input type="text" name="språk"><br><br>
    Varighet
    <input type="text" name="varighet"><br><br>
    Rating
    <input type="text" name="rating"><br><br>
    Awards
    <input type="text" name="awards"><br><br>
    Bilde
    <input type="text" name="bilde"><br><br>

    
    
  

   
    <input type="submit" name="leggtil" value="Legg til">
</form>

</body>
</html>

<form 

    

    
</body>
</html>