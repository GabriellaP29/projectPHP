<?php require_once '../template/header.php';
if ($_SESSION['Active'] == false) { /* Redirects user to Login.php if not logged in. Remember, we set $_SESSION['Active'] == true in login.php*/
    header("location:login.php");
    exit;
}
?>

<h2> Thank you for register! Now you can search for our products. </h2>
<p> <a href="../pdo/read.php"> View our products </a> </p>