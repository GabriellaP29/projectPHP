<?php require_once '../template/header.php';
?>
<body>
<div id="container">
    <nav class="nav_bar">
        <ul>
            <li><a href="index.php" class="current_page">Home page</a> </li>
            <li><a href="about.php">About</a> </li>
            <li><a href="products.php">Products</a> </li>
            <li><a href="login.php">Log in </a> </li>
            <li><a href="contact.php">Contact us</a> </li>

        </ul>
    </nav>
</div>
<main>
    <h3> Welcome to SportsFun online store</h3>
    <h2> About this online store</h2>

<div class="info">
    <p> Here at SportsFun we have a huge selection of items in sale of up to 80% discount! <br>  If you want to know more keep reading.
    </p>
</div>

<div class="discount"> <h4>For the month of December for every new costumer registered in our website we will give a 10% discount!  </h4>
    <p> <a href="../pdo/register.php">Register now!</a> </p></div>


</main>

<?php require_once '../template/footer.php';
