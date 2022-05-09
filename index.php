

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

  <link rel="stylesheet" href="index.css">

  <h2>infoFLIX filmer</h2>
  <ul>
      <li><a href="serie.php">SERIE </a></li>
      <li><a href="index.php">FILM </a></li>
  </ul>

</head>
<body>


<?php


include 'kobling.php';


$sql = "SELECT * FROM film JOIN sjanger ON film.idsjanger=sjanger.idsjanger";
$resultat = $kobling->query($sql);




echo "<table>";
 echo "<tr>
 
 <th>TITTEL</th>
 <th>SJANGER</th>
 <th>LAND</th>
 <th>ÅRSTALL</th>
 <th>SPRÅK</th>
 <th>VARIGHET</th>
 <th>RATING</th>
 <th>AWARDS</th>

 </tr>
 ";


while($rad = $resultat->fetch_assoc()) {
    $idfilm = $rad["idfilm"]; 
    $tittel= $rad["tittel"];
    $varighet = $rad["varighet"];
    $rating = $rad["rating"];
    $årstall = $rad["årstall"];
    $land = $rad["land"];
    $awards = $rad["awards"];
    $språk = $rad["språk"];
    $sjanger = $rad["navn"];  // hentes fra sjanger tabell
    $YouTube = $rad["filnavn"];
    $bilde = $rad["bilde"];

    

    echo "
    
    <tr> 
      <td>
        $tittel<a href='vis_film.php?film=$idfilm'><br> Visning  <br></a> 
        <img class='bilde' src='Bilder_film/" . $bilde . "' alt='img'>
      </td> 

    <td>$sjanger</td>
    <td>$land</td>
    <td>$årstall</td>
    <td>$språk</td>
    <td>$varighet</td>
    <td>$rating</td>
    <td>$awards</td>
    
    </tr>
   ";
 //echo slutt
    }



?> 
</body>
</html>