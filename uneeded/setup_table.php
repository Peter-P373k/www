<?php
$db = new PDO("mysql:host=127.0.0.1;dbname=testposts", "root", "mysql");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
try {
    $queryStr = "CREATE TABLE posts (id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY, content LONGTEXT)";
    $db->query($queryStr);
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>