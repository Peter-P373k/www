<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>
<?php
// define variables and set to empty values
$class_code = $Temail = $Cohort = $comment = $NOS = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $class_code = test_input($_POST["class_code"]);
  $Temail = test_input($_POST["Temail"]);
  $NOS = test_input($_POST["NOS"]);
  $comment = test_input($_POST["comment"]);
  $Cohort = test_input($_POST["Cohort"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>