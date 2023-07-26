<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movie_ticket_booking";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$booking_date = $_POST['booking_date'];
$booking_id = $_POST['booking_id'];

$sql = "INSERT INTO customers (name,address, phone, booking_date, booking_id) VALUES ('$name', '$address', '$phone', '$booking_date', '$booking_id')";

if ($conn->query($sql) === TRUE) {
  echo "Booking successful!";
  header("Location: http://localhost:8080/Movies_Ticket/vc.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
