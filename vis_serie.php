<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<link rel="stylesheet" href="vis_serie.css">

</head>
<body> 
<h1>TRAILER</h1>
    <?php 
        include 'kobling.php';


    $id = $_GET['serie'];

    $sql = "SELECT * FROM serie JOIN sjanger ON serie.idsjanger=sjanger.idsjanger WHERE idserie='$id'";
    $resultat = $kobling->query($sql);

    $serie = $resultat->fetch_assoc();

    $tittel = $serie["tittel"];
    $varighet = $serie["varighet"];
    $beskrivelse = $serie["beskrivelse"];
    $link = $serie['filnavn'];
    
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