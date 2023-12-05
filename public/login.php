<?php require_once ('config.php');
session_start();
?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/signin.css">
        <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
        <title>Sign in</title>
    </head>

    <title>Sign in</title>
        <a href="index.php">Home</a>



    <body>
    <div class="container">
        <form action="login.php" method="post" name="Login_Form" class="form-signin">
            <h2 class="form-signin-heading">Please sign in</h2>
            <label for="inputUsername" >Username</label>
            <input name="Username" type="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
            <label for="inputPassword">Password</label>
            <input name="Password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button name="Submit" value="Login" class="button" type="submit">Sign in</button>

        </form>
        <form action="logout.php" method="post" name="Logout_Form" class="form-signin">
            <button name="Submit" value="Logout" class="button" type="submit">Log out</button>
        </form>

    </div>

<?php
//function testLogin() {
global $Username, $Password;
/*Check if login form has been submitted */
/*isset - determine if a variable is declared and is different from NULL*/

if (isset($_POST['Submit'])) if (($_POST['Username'] == $Username) && ($_POST['Password'] == $Password)) {

    $_SESSION['Username'] = $Username;
    $_SESSION['Active'] = true;
    header("location:products.php");
    exit;

} else
    echo 'Incorrect Username and Password';

?>