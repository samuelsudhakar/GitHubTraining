<?php
echo "<h1>Welcome Samuel!</h1>"; //Usage of echo
echo "<br>";
$age = array("Samuel"=>"29", "Sudhakar"=>"30"); //Associative array
echo "Samuel is " .$age['Samuel']. " years old.<br>";
$age1 = 29;
echo "Samuel is $age1 years old.<br>";

//Global variables test
echo "Global variables test (Exception)";
$x = 75;
$y = 25; 

function addition()
{
$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo "<br>";
echo $z;
?>
