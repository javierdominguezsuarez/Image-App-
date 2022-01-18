<link rel="stylesheet" href="estilo.css" type="text/css" media="all" >
<header>
<ul>
  <li><a style ="margin: 10px" href="index.php">Home</a></li>
  <li><a  style = "margin: 10px" href="myGallery.php">My gallery</a></li>
  <li><a  style = "margin: 10px" href="favourites.php">Favourites</a></li>
  <li><a  style = "margin: 10px" href="upload.php">Upload Photo</a></li>
  <li><a  style = "margin: 10px" href="search.php">Search Photo</a></li>
  <li style="float:right"><a  style = "margin: 10px" class="active" href="logout.php">Log out</a></li>
</ul> 
</header>
<body>
    <div class="gallery" >
        <?php
        //Include database configuration file
        include('config.php');

        session_start();
        $id_user = $_SESSION["id"];
        //get images from database
        $query = $connection->query("SELECT * FROM image where user = '$id_user' ORDER BY date_upload DESC");
        
        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                $imageURL = $row["path"];
                $a = "modify.php?";
                $b = $a . $imageURL;

        ?>  
            
            <a href=<?php echo $b; ?>><img style = "width: 28.2%" src="<?php echo $imageURL; ?>" alt =""></a>
            
        <?php }
        } 
        mysqli_free_result($query);
		mysqli_close($connection);?>
    </div>
</body>
<footer>

</footer>

