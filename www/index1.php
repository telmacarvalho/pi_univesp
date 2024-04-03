<?php
$servername = "mysql";
$username = "myuser";
$password = "mypassword";
$dbname = "projeto_integrador_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully</br>";

// SQL query to retrieve table names
$sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$dbname'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "Table Name: " . $row["TABLE_NAME"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

phpinfo();
?>
