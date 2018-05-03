<?php
$db = new PDO("mysql:host=localhost;dbname=testposts",
 "root", "mysql");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
try {
    $queryStr = "INSERT INTO posts (content) 
VALUES ('this is my first solot test hope it works')";
    $db->query($queryStr);
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>