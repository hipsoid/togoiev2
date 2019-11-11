<?php 

$servername = "localhost";
$username = "user1";
$password = "user1strongP@ssword";
$dbname = "ttt";

$login=$_POST["login"];
$sha256 = hash('sha256', $login);
echo $sha256;

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO HashCode (Hash)
VALUES ('$sha256')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
 ?>
