<head><link rel="stylesheet" href="favourites.css" type="text/css"></head>
<header>
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="myGallery.php">My gallery</a></li>
  <li><a href="favourites.php">Favourites</a></li>
  <li><a href="upload.php">Upload Photo</a></li>
  <li><a href="search.php">Search Photo</a></li>
  <li style="float:right"><a class="active" href="logout.php">Log out</a></li>
</ul> 
</header>
<body>
    <div class="gallery">
        <?php
        $mensaje=$_GET["varPhotos"];
        $photos =explode(" ", $mensaje);
            while(count($photos)!= 0){
                $ruta = array_pop($photos);
        ?>
            <img src="<?php echo $ruta; ?>"    alt ="">
        <?php 
            }
    ?>

    </div>

</body>
<footer>

</footer>
<link rel="stylesheet" href="selection.css" type="text/css">    
