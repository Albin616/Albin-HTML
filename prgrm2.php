<!DOCTYPE html>
<html>
<head>
 <title>Array Sorting</title>
</head>
<body>

<h2>PHP Array Sorting Example</h2>
<?php
$a=["Ann","Christeena","Blessey","Sona"];
echo"<b>Original Array:</b><br>";
print_r($a);

echo"<br><br><b>Ascending Order:</b><br>";
asort($a);
print_r($a);

echo"<br><br><b>Descending Order:</b><br>";
asort($a);
print_r($a);
?>
</body>
</html> 
