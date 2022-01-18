<?php

?>
<body>  
    <div class="formstart">
        <form action="home.php" method="post" id="form1">
        <label for="fname"><h1>Start your work time counter:</h1></label>
        </form>
        <button  name = "start"     class = "boton " type="submit" form="form1" value="Submit">Start</button>
    
    
</body>
<link rel="stylesheet" href="home.css" type="text/css">
<?php
if  (isset($_POST['start'])){

    ?>
    <div class="preloader"></div>
    </div>
    <div class="formstart">
        <form action="home.php" method="post" id="form2">
        </form>
        <button style="margin-top:20px;background-color:coral;  " name = "stop" class = "boton " type="submit" form="form2" value="Submit2">Stop</button>
        </div>
    <?php
    
}
if (isset($_POST['stop'])){

    echo "hola";
   
}
?>


