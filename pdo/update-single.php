<?php
/**
 * Use an HTML form to edit an entry in the
 * users table.
 *
 */
require "../public/common.php";
if (isset($_POST['Submit'])) {
 try {
 require_once '../src/DBconnect.php';
 $user =[
 "id" => escape($_POST['id']),
 "firstname" => escape($_POST['firstname']),
 "lastname" => escape($_POST['lastname']),
 "username" => escape($_POST['username']),
 "location" => escape($_POST['location']),
 ];
 $sql = "UPDATE users
 SET id = :id,
 firstname = :firstname,
 lastname = :lastname,
 username = :username,
 location = :location
 WHERE id = :id";
 $statement = $connection->prepare($sql);
 $statement->execute($user);
 } catch(PDOException $error) {
 echo $sql . "<br>" . $error->getMessage();
 }
}
if (isset($_GET['id'])) {
 try {
 require_once '../src/DBconnect.php';
 $id = $_GET['id'];
 $sql = "SELECT * FROM users WHERE id = :id";
 $statement = $connection->prepare($sql);
 $statement->bindValue(':id', $id);
 $statement->execute();
 $user = $statement->fetch(PDO::FETCH_ASSOC);
 } catch(PDOException $error) {
 echo $sql . "<br>" . $error->getMessage();
 }
} else {
 echo "Something went wrong!";
 exit;
}
?>
<?php require "../template/header.php"; ?>

<?php if (isset($_POST['Submit']) && $statement) : ?>
    <?php echo escape($_POST['firstname']); ?> successfully updated.
<?php endif; ?>
<h2>Edit a user</h2>
<form method="post" class="form-update">
    <?php foreach ($user as $key => $value) : ?>
        <label class="form-update" for=<?php echo $key; ?>"><?php echo ucfirst($key); ?></label>
        <input type="text" name="<?php echo $key; ?>" id="<?php echo $key;
        ?>" value="<?php echo escape($value); ?>" <?php echo ($key === 'id' ?
            'readonly' : null); ?>>
    <?php endforeach; ?>
    <input type="submit" name="Submit" value="Submit">
</form>
<a href="../pdo">Back to own directory</a>
<?php require "../template/footer.php"; ?>
