<?php
$pricesNYC = array();
$pricesNYC["hamburger"] = 1 ;
$pricesNYC["fried"]= .70;
<br><br><br>


$noAsRay=array();
$noAsRay[0] ="funny bones";
$noAsRay[1] = 200;
<br><br><br>
 

$pricesEGY = array(0 => 1, 1 => .70);
<br><br><br>

$testAss=array(1,3,"help",'ho', 200, 20/30);
<br><br><br>
$userList = array(" Ellen" =>55, "John" => 76);
<br><br><br>
$prices=array();
$prices["New York"]["hamburger"] = 1;
$prices["New York"]["fries"] = 0.70;
$prices["Los Angeles"]["hamburger"] = 1.30;
$prices["Los Angeles"]["fries"] = 0.50;
<br><br><br>
var_dump($prices);
$prices2 = array("Los Angeles" => array("hamburger" => 1.3, "fries" => 0.5),
                "New York" => array("hamburger" => 1, "fries" => 0.7));
<br><br><br>
$squares = array();
for ($key = 0; $key < 10; $key++) {
    $squares[$key] = $key * $key;
}
<br><br><br>
$output = $noAsRay[200];
print_r($noAsRay);
?>
