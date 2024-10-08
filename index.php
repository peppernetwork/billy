<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: loginindex.php");
  exit;
}
 
// Include config file
require_once "inc/loginconfig.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "<span style=\"color:#ff0000;\">Bitte Benutzername eingeben</span>";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "<span style=\"color:#ff0000;\">Bitte Passwort eingeben</span>";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: loginindex.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "<span style=\"color:#ff0000;\">Passwort falsch</span>";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "<span style=\"color:#ff0000;\">Benutzername falsch</span>";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Billy</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<style>	

 .rotate {
 animation: rotation 1.5s linear;
 }

 @keyframes rotation {

 0% {
 transform: scale(0,0) rotate(130deg);
 }
    
 100% {
 transform: scale(1,1) rotate(360deg);
 }
}

@keyframes zoomin {

 0% {
 transform: scale(0,0);
 }
 
 85% {
 transform: scale(0,0);
 }
    
 100% {
 transform: scale(1,1);
 }
}
</style>
            


</head>
  <body>
    <br><br><br><br><br>
      <center>

        <img src="../../img/billy.png" class="rotate" width="410" height="222" /></a>

<div class="wrapper350">
	<br><br>
        <h2>Login</h2>
	<br><br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Benutzername</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Passwort</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
        </form>
    </div>
  </center>
</body>
</html>

