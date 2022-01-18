<?php
error_reporting(0);
$link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$linkSplit = explode('?', $link);
$photoURL = $linkSplit[1];
setcookie("photoURL",$photoURL);
?>
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
<link rel="stylesheet" href="modify.css" type="text/css">   
<?php
include('config.php');
session_start();
$id_user = $_SESSION["id"];

$a = "delete.php?";
$b = $a . $photoURL;
?>
<body >
<div class="main">
<h1>Edit your photo</h1>
<br>
<form action="modify.php" method="POST">
   <img style = "margin-left:24%;width: 40.2%;border-radius:12px" src="<?php echo $photoURL; ?>" alt ="">
   <a id = "delete" style = "text-decoration: none;color:white;padding:8px 8px; position: relative; bottom : 70px; right: 0; margin-left:40px;background-color:#F3950D;border-radius:15px" href=<?php echo $b; ?>>Delete</a>
   <p style= "font-size:15px">Add a new category: </p>
   <p><input name="descriptionFill"  class = "description" type="text"></p>
   <p> <input type="submit" value="Add" /></p>
</form>
</div>
</body>

<?php
   
    if( !empty($_POST)){
        $add = " " .  $_POST['descriptionFill'];
        $photoURL = $_COOKIE['photoURL'];
        $query =$connection->query("UPDATE image SET category = CONCAT(category,'$add') WHERE (path = '$photoURL'  AND user = '$id_user')");
        header('Location: '.'myGallery.php');
            
        
        
    }
    
?>