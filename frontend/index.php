<?php
$servername = "backend";
$username = "user";
$password = "password";
$dbname = "mydatabase";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, data FROM mytable";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HIRE ME</title>
</head>
<body>
    <h1  text-align: center; >HIRE ME</h1>
    <ul>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<li>" . $row["data"] . "</li>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </ul>
</body>
</html>
