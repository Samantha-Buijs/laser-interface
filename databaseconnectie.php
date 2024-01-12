<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laser interface</title>
</head>
<body>

<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=laser-interface", "root", "");
    $query = $db->prepare("SELECT * FROM machines");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    for ($tableNumber = 1; $tableNumber <= 5; $tableNumber++) {
        echo '<div id="date-time-container">';
            echo '<span>Date:</span> ' . date("j/m/Y") . ' | ';
            echo '<span>Time:</span> ' . date("H:i:s");
        echo '</div>';

    echo "<table>";
        echo "<th>Standard Value</th>";
        echo "<th>Capacity Per Hour</th>";
        echo "<th>Capacity Per Day</th>";
            foreach ($result as $data) {
                echo "<tr>";
                    echo "<td>" . $data["standard value"] . "</td>";
                    echo '<td><input type="text" name="capacity_per_hour[]" value="' . $data["capacity per hour"] . '"></td>';
                    echo '<td><input type="text" name="capacity_per_day[]" value="' . $data["capacity per day"] . '"></td>';
                echo "</tr>";
            }
    echo "</table>";
    echo '<button type="submit" name="submit_button">Submit</button>';
    echo "<br>";
        }
    } catch (PDOException $e) {
        die("Error!: " . $e->getMessage());
}
?>
<a href="homepage.php"><-Vorige week</a>
<a href="homepage.php">Volgende week-></a>
</body>
</html>
