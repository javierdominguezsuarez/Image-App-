<?php

include('config.php');
session_start();
$id_user = $_SESSION["id"];
$link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$linkSplit = explode('?', $link);
$photoURL = $linkSplit[1];
echo $photoURL;
echo $id_user;
$query = $connection->query(" DELETE FROM image WHERE  ( path = '$photoURL'  AND user = '$id_user') ");
header( 'Location:myGallery.php')


?>