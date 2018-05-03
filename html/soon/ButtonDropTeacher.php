<?php
require 'connect.php';
    $result = $conn->query("select Email_address, First_name, Last_name from TeacherData");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='Email_adddress'>";

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