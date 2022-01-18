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

<div class="container">
    <div class="gallery">
        <?php
        session_start();
        include('config.php');
        $query = $connection->query("SELECT * FROM image ORDER BY date_upload DESC");
        $id_user = $_SESSION["id"];
        $liked = false;

        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                $id_img = $row["id"];
                $queryD = $connection->query("SELECT * FROM likes where (user = '$id_user' and image = '$id_img' )");
                $queryN = $connection->query("SELECT name FROM user where id in (SELECT user from image where id= '$id_img' )");
                $rowN = $queryN->fetch_assoc();
                
                if($queryD->num_rows > 0){
                    $liked = true;
                }
                $imageURL = $row["path"];
                
                
        ?>          
            <div  class="photo_container">
            <p style= "font-size:13px;padding-left:5px;color:white;"><?php echo  substr($row["date_upload"],0,10)?></p>
            <img style = "width:100%;height:437px;object-fit:cover;" src="<?php echo $imageURL; ?>" alt="" /> 
            
            <button onclick ="myAjax(<?php echo  $row['id']?>,<?php echo  $id_user?>,<?php echo $id_img?>);" class = "boton" style="width: 60px; height: 60px; border-radius: 50%; background-color:white; position: absolute; bottom : 83px; right: 0; margin:20px;display:flex;justify-content:center; align-items: center;">
            <svg  id="heart-image--<?php echo  $row["id"]?>"  xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="<?php echo $liked?  '#F3950D' : 'grey';?>" class="bi bi-heart-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/></svg>
            </button>
            <p style= "font-weight:500"><?php echo $rowN["name"]?></p>
            <p style= "color:rgb(228, 212, 212);font-weight:200"><?php echo  $row["description"]?></p>
            </div>
               
        <?php 
         $liked = false;
        }
        }
        mysqli_free_result($query);
		mysqli_close($connection); ?>
    </div>
</div>
</body>
<footer>

</footer>
<link rel="stylesheet" href="index.css" type="text/css">    
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="funcionality.js"></script>
