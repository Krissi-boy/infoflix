<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    

<link rel="stylesheet" href="vis_film.css">

</head>
<body> 
<h1>TRAILER</h1>

    <?php 
        include 'kobling.php';


    $id = $_GET['film'];

    $sql = "SELECT * FROM film JOIN sjanger ON film.idsjanger=sjanger.idsjanger WHERE idfilm='$id'";
    $resultat = $kobling->query($sql);

    $film = $resultat->fetch_assoc();

    $tittel = $film["tittel"];
    $varighet = $film["varighet"];
    $beskrivelse = $film["beskrivelse"];
    $link = $film['filnavn'];
    
    ?>
    <div class='innpakning'>
    <?php   
    ?>

    
        <div> <?php 
        echo "<h1>$tittel</h1>";
        ?>
        </div>

        <div>
            <iframe src="https://www.youtube.com/embed/<?php echo $link;?>" 
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
            gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
        </div> 
    </div> <!-- lukker innpakning -->
   
</body>
</html>