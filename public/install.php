<?php global $sql, $host, $dbname, $username, $password, $options;
/**
* Open a connection via PDO to create a new database and table with
structure. */
require "config.php";
try {
    $connection = new PDO("mysql:host=$host;dbname=$dbname", $username, $password, $options);
    $sql = file_get_contents("../data/init.sql");
    $connection->exec($sql);
    echo "Database sports created successfully.";
}
catch(PDOException $error) {
echo $sql . "<br>" . $error->getMessage();
} 