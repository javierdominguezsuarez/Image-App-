

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
<h1>Upload your photo</h1>
<br>
<form enctype="multipart/form-data" action="upload.php" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="512000" />
   <p  style= "font-size:15px"> Send my file: <input name="upload_file" type="file" /></p>
   <br>
   <p style= "font-size:15px">Introduce the description of the photo: </p>
   <p><input name="descriptionFill"  class = "description" type="text"></p>
   <p style= "font-size:15px">Introduce the categories of the photo: </p>
   <p><input name="categories"  class = "description" type="text"></p>
   <p> <input type="submit" value="Send file" /></p>
</form>
</div>
</body>
<link rel="stylesheet" href="upload.css" type="text/css">    
<?php
error_reporting(0);
include('config.php');
session_start();
$desc = $_POST['descriptionFill'];
$cat= $_POST['categories'];
$adress = 'images/';
$upload = $adress.basename($_FILES['upload_file']['name']);
$id_user = $_SESSION["id"];
$date = date('Y-m-d H:i:s');   

if (move_uploaded_file($_FILES['upload_file']['tmp_name'], $upload)) {
      $pathPhoto = $adress . $_FILES['upload_file']['name'] ;
      ?>
<div style= "width:100%;display:flex;justify-content: center;align-items: center;">
      <p >Suceful upload!</p>
      </div>
      <?php 
       $query = $connection->query("INSERT INTO image VALUES (NULL ,'$desc','$pathPhoto','$id_user','$date','$cat') ");
    } 
    
?>