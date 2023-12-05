<?php

require_once '../src/session.php';
$session = new session();
$session->forgetSession();
?>

<form action="logout.php" method="post" name="Logout_Form" class="form-signin">
    <button name="Submit" value="Logout" class="button" type="submit">Log out</button>
</form>
