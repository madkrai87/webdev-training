<?php
//Variables lways start with $
$name="Alice";
$age="25";
$isAdmin= true;

//Output to page
echo "Hello".$name;

//Conditionals
if ($age>=18){echo "Adult";}
else{echo "Minor"}

//Arrays
$skills=["HTML","CSS"]
foreach($skilss as $s){echo"<li>$s</li>;}
?>