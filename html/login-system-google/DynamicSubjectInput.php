<?php
require 'connect.php';
$subid=$_POST["SubjectID"];
$subname=$_POST["SubjectName"];
$subweight=$_POST["SubjectWeight"];
echo $subid,$subname,$subweight;
 $sql = "INSERT INTO `Subjects`(`SubjectID`, `SubjectName`, `SubjectWeight`) VALUES ('$subid','$subname','$subweight')";
    $conn->exec($sql);
    echo "New subject added successfully";
?>