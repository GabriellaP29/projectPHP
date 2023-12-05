<?php
/**
 * Function to query information based on
 * a parameter: product category.
 *
 */
if (isset($_POST['Submit'])) {
 try {
 require "../public/common.php";
 require_once '../src/DBconnect.php';
 $sql = "SELECT *
 FROM products
 WHERE productCategory = :productCategory";
 $category = $_POST['productCategory'];
 $statement = $connection->prepare($sql);
 $statement->bindParam(':productCategory', $category, PDO::PARAM_STR);
 $statement->execute();
 $result = $statement->fetchAll();
 } catch(PDOException $error) {
 echo $sql . "<br>" . $error->getMessage();
 }
}
?>
<h2>Find product based on category</h2>
<form method="post">
 <label for="productCategory">Category</label>
 <input type="text" id="productCategory" name="productCategory">
 <input type="Submit" name="Submit" value="View Results">
</form>
<a href="../public/products.php">Back to home</a>

<?php
    require "../template/header.php";
    if (isset($_POST['Submit'])) {
    if ($result && $statement->rowCount() > 0) {
    ?>
    <h2>Results</h2>
    <table>
        <thead>
        <tr>
            <th>#</th>
            <th>Product Name</th>
            <th>Product Category</th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($result as $row) { ?>
            <tr>
                <td><?php echo escape($row["id"]); ?></td>
                <td><?php echo escape($row["productName"]); ?></td>
                <td><?php echo escape($row["productCategory"]); ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
<?php } else { ?>
    > No results found for <?php echo escape($_POST['productCategory']); ?>.
<?php }
} ?>