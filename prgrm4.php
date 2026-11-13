<!DOCTYPE html>
<html>
<head>
    <title>Electricity Bill</title>
</head>
<body>

<h2>Electricity Bill Calculator</h2>

<form method="post">
    Enter Consumer Name:
    <input type="text" name="name" required>
    <br><br>

    Enter Units Consumed:
    <input type="number" name="units" min="0" required>
    <br><br>

    <input type="submit" name="submit" value="Calculate Bill">
</form>

<?php

if(isset($_POST['submit']))
{
    $name = htmlspecialchars($_POST['name']);
    $units = (int)$_POST['units'];

    // Calculate electricity bill based on tariff
    if($units <= 100)
    {
        $bill = $units * 1.50;
    }
    else if($units <= 200)
    {
        $bill = (100 * 1.50) + (($units - 100) * 2.50);
    }
    else if($units <= 300)
    {
        $bill = (100 * 1.50) + (100 * 2.50) + (($units - 200) * 4.00);
    }
    else
    {
        $bill = (100 * 1.50) + (100 * 2.50) +
                (100 * 4.00) + (($units - 300) * 5.00);
    }

    echo "<h3>Electricity Bill Details</h3>";
    echo "Consumer Name: " . $name . "<br>";
    echo "Units Consumed: " . $units . "<br>";
    echo "Total Electricity Bill: ₹" . number_format($bill, 2);
}

?>

</body>
</html>

