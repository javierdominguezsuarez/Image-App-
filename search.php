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
<body >
<div class="main">
<h1>Search your photo</h1>
<br>
<form action="search.php" method="POST">
   <p style= "font-size:15px">Introduce categories: </p>
   <p><input name="descriptionFill"  class = "description" type="text"></p>
   <p> <input type="submit" value="Search" /></p>
</form>
</div>
</body>
<link rel="stylesheet" href="searchStyle.css" type="text/css">    
<div class="gallery">
<?php
    error_reporting(0);
    include('config.php');
    session_start();
    $photos = [];
    $flag = false;
    $aKeyword = explode(" ",  $_POST['descriptionFill']);
    if( !empty($_POST)){
        for($i = 0; $i < count($aKeyword); $i++) {
            if(!empty($aKeyword[$i])) {
                $query = $connection->query ("SELECT * FROM image WHERE category like '%" . $aKeyword[$i] . "%'  ");
                if($query->num_rows > 0 ){
                    while($row = $query->fetch_assoc()){
                        if (!in_array ($row["path"],$photos)){
                            array_push($photos ,$row["path"]);
                            $flag = true;
                        }
                    }
                }
                mysqli_free_result($query);

            }
                   }
    }
    if($flag == true){
    $send =implode(" ", $photos);
    header("Location:selection.php?varPhotos=$send");
    exit();
    }    
    
?>
</div>