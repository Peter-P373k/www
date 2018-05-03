<?php
$db = new PDO("mysql:host=localhost;dbname=testposts",
 "root", "mysql");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
try {
    $queryStr = "SELECT * FROM posts";
    $query = $db->prepare($queryStr);
    $query->execute();
    while ($row = $query->fetch()) {
        echo $row['id'] . ' - ' . $row['content'];
        echo '<br>';
    }
    $query->closeCursor();
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>