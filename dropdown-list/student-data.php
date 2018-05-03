<?Php
require "config.php"; // Database Connection

$sql="select  id, name  from student "; 
$row=$dbo->prepare($sql);
$row->execute();
$result=$row->fetchAll(PDO::FETCH_ASSOC);

echo json_encode(array('data'=>$result));
?>

