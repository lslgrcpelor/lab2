<!DOCTYPE html>
<html>
<body>

<?php
$x = 5; // global scope
 
function myTest() {
  // using x inside this function will generate an error
  echo "<p>The Variable x inside function is: $x</p>";
} 
myTest();

echo "<p>The Variable x outside function is: $x</p>";
?>

</body>
</html>