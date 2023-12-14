<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/voyage.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue:regular" rel="stylesheet" />
    <title>Voyage</title>
</head>
<body>

<?php
include "./header.php";
?>

<audio autoplay="true" controls="true" loop="true">
    <source src="./sonvoyage.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>


 <div class="hero">

    <video autoplay loop muted plays-inline class="back-video">
        <source src="./videotravel.mp4" type="video/mp4">
    </video>
   
<div class="content">


<div id="wrapper">
    <h1><span class="letter01">T</span>
        <span class="letter02">r</span>
        <span class="letter03">a</span>
        <span class="letter04">v</span>
        <span class="letter05">e</span>
        <span class="letter06">l</span>
        <span class="letter08">&nbsp;</span>
        <span class="letter09">3</span>
   </h1>
  </div>
  
  
<a href="#">CANADA, MAROC, FRANCE...à vous de choisir!</a>

</div>
</div>



<?php 
include "./footer.php"
?>



</body>
</html>