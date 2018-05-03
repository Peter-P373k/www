
<!DOCTYPE html>
<html>
<head>

</head>
<body>
  <?php
require 'connect.php';
    $result = $conn->query("select Email_address, First_name, Last_name from TeacherData");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='Email_adddress' id='email-list' onchange='showUser(this.value)'>";

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

                  unset($email, $first,$last);
                  $email = $row['Email_adddress'];
                  $first = $row['First_name']; 
                  $last = $row['Last_name'];
                  echo '<option value="'.$email.'">'.$first."-".$last.'</option>';
                 
}
    echo "</select>";
    echo "</body>";
    echo "</html>";

  ?>
<br>
  <?php
require 'connect.php';
    $result = $conn->query("select Class_id, FirstName, LastName, Sex from StudentData");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='Class_id' id='Student-list' onchange='showUser(this.value)'>";

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

                  unset($email, $first,$last);
                  $sex = $row['Sex'];
                  $first = $row['FirstName']; 
                  $last = $row['LastName'];
                  $class = $row['Class_id'];
                  echo '<option value="'.$class.'">'.$class.'</option>';
                 
}
    echo "</select>";
    echo "</body>";
    echo "</html>";

  ?>
<div id="txtHint"><b>Person info will be listed here.</b></div>

</body>
</html>
