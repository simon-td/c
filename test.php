<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection test
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT model, color, max_speed FROM car_t";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
?>


        <table>
            <tr>
                <td>
                    model: <?php echo $row["model"]; ?>
                </td>
            </tr>
            <tr>
                <td>
                    colors: <?php echo $row["color"]; ?>
                </td>

            </tr>
            <tr>
                <td>
                    max_speed: <?php echo $row["max_speed"]; ?>
                </td>
            </tr>
        </table>
<?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>

</body>
</html>