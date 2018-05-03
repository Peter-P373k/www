<?php
$pricesNYC = array();
$pricesNYC["hamburger"] = 1 ;
$pricesNYC["fried"]= .70;


$noAsRay=array();
$noAsRay[0] ="funny bones";
$noAsRay[1] = 200;

 

$pricesEGY = array(0 => 1, 1 => .70);


$testAss=array(1,3,"help",'ho', 200, 20/30);

$userList = array(" Ellen" =>55, "John" => 76);

$prices=array();
$prices["New York"]["hamburger"] = 1;
$prices["New York"]["fries"] = 0.70;
$prices["Los Angeles"]["hamburger"] = 1.30;
$prices["Los Angeles"]["fries"] = 0.50;

var_dump($prices);
$prices2 = array("Los Angeles" => array("hamburger" => 1.3, "fries" => 0.5),
                "New York" => array("hamburger" => 1, "fries" => 0.7));

$squares = array();
for ($key = 0; $key < 10; $key++) {
    $squares[$key] = $key * $key;
}

$output = $noAsRay[200];
print_r($noAsRay.'<br>');
?>
<?php
foreach ($prices as $city => $snack) {
    echo  "<b>" . $city . "</b><br>";
    foreach ($snack as $item => $price) {
        echo $item . " = " . $price . "<br>";
    }
}
?>
