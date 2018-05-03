<?Php
require "connect.php"; // Database Connection

$sql="select  Email_address, First_name, Last_name from TeacherData"; 
$row=$conn->prepare($sql);
$row->execute();
$result=$row->fetchAll(PDO::FETCH_ASSOC);

echo json_encode(array('data'=>$result));
?>