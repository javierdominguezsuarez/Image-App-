<?php

include('config.php');
session_start();
 
if (isset($_POST['register'])) {
 
$name = $_POST['name'];
$surnames = $_POST['surnames'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_hash = SHA1($password);

$query = $connection->prepare("SELECT * FROM user WHERE email=?");
$query->execute();

if ($query->num_rows > 0) {
echo '<p class="error">The email address is already registered!</p>';
 }

 if ($query->num_rows == 0) {
     $query = ("INSERT INTO user(name,surnames,email,password) VALUES ('$name','$surnames','$email','$password_hash')");  
     $result = mysqli_query ($connection, $query) ;
     

     if ($result) {
         echo '<p class="success">Your registration was successful!</p>';
     } else {
         echo '<p class="error">Something went wrong!</p>';
     }
 }
}

?>
<link rel="stylesheet" href="register.css" type="text/css">
<div id="contenedor">
            <div id="central">
                <div id="login">
                    <div class="titulo">
                        Wellcome to IGalry
                        <p>Register for free</p>
                    </div>
                    <form method="post" action="" name="signup-form">
                        <div class="form-element">
                            <input type="text" name="name" placeholder = "Name" required />
                        </div>
                        <div class="form-element">
                            <input type="text" name="surnames" placeholder = "Surnames"  required />
                        </div>
                        <div class="form-element">
                            <input type="email" name="email" placeholder = "Email" required />
                        </div>
                        <div class="form-element">
                            <input type="password" name="password" placeholder = "Password" required />
                        </div>
                        <button type="submit" name="register" value="register">Register</button>
                    </form>
<div class="pie-form">
                        <a href="login.php">Do you have an account?</a>
                        
    </div>
                </div>
            </div>
        </div>