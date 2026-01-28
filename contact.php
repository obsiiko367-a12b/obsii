<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "personal_website";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO contacts (name, email, message)
        VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Message sent successfully!'); window.location='index.html';</script>";
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>
