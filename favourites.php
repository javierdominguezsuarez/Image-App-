<head><link rel="stylesheet" href="favouritesStyle.css" type="text/css"></head>
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
        //Include database configuration file
        include('config.php');

        session_start();
        $id_user = $_SESSION["id"];
        //get images from database
        $query = $connection->query("SELECT * FROM image  ORDER BY date_upload DESC");
        
        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                $queryb = $connection->query("SELECT * FROM likes where (user = '$id_user' and image = ". $row['id'] . " )");
                if ($queryb->num_rows > 0){
                    $imageURL = $row["path"];
        ?>
                    <img  src="<?php echo $imageURL; ?>" alt="" >
                
               <?php  } 
               mysqli_free_result($queryb);
                
        }
        } 
        mysqli_free_result($query);
		mysqli_close($connection);?>
    </div>
</body>
<footer>

</footer>
<link rel="stylesheet" href="favouritesStyle.css" type="text/css">    
