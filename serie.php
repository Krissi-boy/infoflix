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
    include "kobling.php";

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
    $idserie = $rad["idserie"]; 
    $tittel= $rad["tittel"];
    $rating = $rad["rating"];
    $årstall = $rad["årstall"];
    $land = $rad["land"];
    $trailer = $rad["trailer"];
    $språk = $rad["språk"];
    $sjanger = $rad["navn"]; // hentes fra sjanger tabell
    $YouTube = $rad["filnavn"];
    $bilde = $rad["bilde"]
   

    echo "

    <tr> 
      <td>
        $tittel<a href='vis_serie.php?serie=$idserie'> Visning  </a> 
        <img src='Bilder_serie/" . $bilde . "' alt='img'>;
      </td> 
    
    <td>$tittel <a href='vis_serie.php?serie=$idserie'> Visning  </a> </td>
    <td>$sjanger</td>
    <td>$trailer</td>
    <td>$land</td>
    <td>$årstall</td>
    <td>$språk</td>
    <td>$rating</td>
    <td>$bilde</td>
    </tr>

   ";

  
}

 echo" </table>";

?>
</body>
</html>