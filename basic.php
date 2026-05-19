<?php
//Varialbes always start with a $ sign
$name = "John";
$age = 30;
$height = 1.75; 
//Output to page    
echo "Hello " . $name;
//Conditionals
if ($age > 18) {
    echo "Adult";
} else {
    echo "Minor";
}   
//Arrays
$skills =["HTML","CSS"];
foreach ($skills as $s) {
echo"<li>" . $s . "</li>";
}
?>