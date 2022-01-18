<?php
include('config.php');
if($_POST['action'] == 'likeFuntionality') { //$_POST['id'] aqui obtengo el id del like (elegante)
    $query = $connection->query("SELECT * FROM likes where (user = ". $_POST['userId'] . " and image = ". $_POST['imageId'] . " )");
    $row = $query->fetch_assoc();
  
    $date = date('Y-m-d H:i:s');   
  
    if($query->num_rows > 0){
        $liked = true;
    }else {
        $liked = false;
    }
    
    if ($liked ==false){//esta likeado o no //select miro si esta liked o no 
        $query = $connection->query("INSERT INTO likes VALUES (NULL ,'$date',". $_POST['userId'] . " ,". $_POST['imageId'] . ") ");
        
        echo "like";
    } else{
        $query = $connection->query(" DELETE FROM likes WHERE  ( user = ". $_POST['userId'] . " and image = ". $_POST['imageId'] . " ) ");
        
        //actualizar la base de datos unlikeando el elemento
        echo"unlike";//si esta liked lo pongo a unlike
       
    }
}
?>