<?php
session_start();?>
<?php
if (isset($_POST['Submit'])) {

    try {
       require_once '../src/DBconnect.php';
       require '../public/common.php';
        $new_user = array(
            "firstname" => escape($_POST['firstname']),
            "lastname" => escape($_POST['lastname']),
            "username" => escape($_POST['username']),
            "location" => escape($_POST['location'])
        );
        $sql = sprintf("INSERT INTO %s (%s) values (%s)", "users",
            implode(", ", array_keys($new_user)),
            ":" . implode(", :", array_keys($new_user)));
        $statement = $connection->prepare($sql);
        $statement->execute($new_user);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>
<?php
if (isset($_POST['Submit']) && $statement)
 {
 echo $new_user['firstname']. ' successfully added';
 }
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
    <body>
    <div class="container">
        <form method="post"  class="form-control">
            <h2 class="form-register-heading">Please register</h2>
            <label for="firstname">Enter your First Name</label>
            <input name="firstname" type="text" id="firstname" class="form-control" placeholder="First Name" required autofocus>
            <label for="lastname">Enter your Last Name</label>
            <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last Name" required>
            <label for="username">Enter your username</label>
            <input type="text" name="username"  id="username" class="form-control" placeholder="Username" required >
            <label for="password">Enter your Password</label>
            <input type="password" name="password"  id="password" class="form-control" placeholder="Password" required>
            <label for="location"> Enter your location </label>
            <input type="text" name="location"  id="location" class="form-control" placeholder="Location" required>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me </label>
            </div>
            <input type="submit" name="Submit" value="Submit">

        </form>
    </div>

<?php

global $Username, $Password;
/*isset - determine if a variable is declared and is different from NULL*/

if (isset($_POST['Submit']))  {
    $_SESSION['Active'] = true;
    header("location:../public/products.php");
    exit;

}
?>