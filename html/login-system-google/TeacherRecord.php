<?php
require "connect.php"; // Database Connection

$sql="SELECT * FROM `TeacherData` WHERE `Email_address` = Email_address "; 
//$row=$conn->prepare($sql);
//$row->execute();
foreach ($sql as $row) {
	$result=$row->fetchAll(PDO::FETCH_ASSOC);
echo $result;
}
echo "<table>
<tr><th>Email_address</th></tr>";

foreach ($conn->query($sql) as $row) {
echo "<tr ><td>$row[*]</td>";
}
echo "</table>";
?>