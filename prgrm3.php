<!DOCTYPE html>
<html>
<head>
    <title>Indian Cricket Players</title>
</head>
<body>

<h2>List of Indian Cricket Players</h2>

<?php
// Store Indian cricket players' names in an array
$players = array(
    "Rohit Sharma",
    "Virat Kohli",
    "Shubman Gill",
    "KL Rahul",
    "Hardik Pandya",
    "Ravindra Jadeja",
    "Jasprit Bumrah",
    "Rishabh Pant",
    "Suryakumar Yadav",
    "Mohammed Siraj"
);
?>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>Sl. No.</th>
        <th>Player Name</th>
    </tr>

    <?php
    // Display array elements in HTML table
    $i = 1;

    foreach ($players as $player) {
        echo "<tr>";
        echo "<td>" . $i . "</td>";
        echo "<td>" . $player . "</td>";
        echo "</tr>";

        $i++;
    }
    ?>

</table>

</body>
</html>

