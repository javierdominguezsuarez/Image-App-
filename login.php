    <?php
 
include('config.php');
session_start();
 
if (isset($_POST['login'])) {
 
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = SHA1($password);
    $q = "SELECT id FROM user WHERE (email='$email' AND password='$password_hash')"; 
    $r = mysqli_query ($connection, $q) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($connection)); 
    echo mysqli_num_rows($r); 
    if (mysqli_num_rows($r) == 0 ) {
        echo '<p class="error">Username password combination is wrong!</p>';
    } else {
            $_SESSION = mysqli_fetch_array ($r, MYSQLI_ASSOC);
            
            mysqli_free_result($r);
			mysqli_close($connection);
            echo '<p class="success">Congratulations, you are logged in!</p>';
            header('Location: '.'index.php');
    }
}
 
?>
<link rel="stylesheet" href="login.css" type="text/css">
<div id="contenedor">
            <div id="central">
                <div id="login">
                    <div class="titulo">
                        Wellcome to IGalry
                        <p>Enter your user and your password</p>
                    </div>
                    <form method="post" action="" name="signin-form">
                        <div class="form-element">
                            <input type="email" name="email" placeholder = "Email" required />
                        </div>
                        <div class="form-element">
                            <input type="password" name="password" placeholder = "Password" required />
                        </div>
                        <button type="submit" name="login" value="login">Log In</button>
                    </form>
    <div class="pie-form">
                        <a href="#">¿Did you lose your password?</a>
                        <a href="register.php">¿Don't you have an account? Register</a>
    </div>
                </div>
            </div>
        </div>