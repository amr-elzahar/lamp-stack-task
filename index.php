<?php
require_once realpath(__DIR__ . '/vendor/autoload.php');

// Looing for .env at the root directory
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$servername = getenv("DB_HOST");
$username = getenv("DB_USER");
$password = getenv("DB_PASS");
$dbname = getenv("DB_NAME");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get visitor IP address
$ip_address = $_SERVER['REMOTE_ADDR'];

// Get current time
$current_time = date("Y-m-d H:i:s");

// Check if IP address already exists in database
$sql = "SELECT * FROM visitors WHERE ip_address = '$ip_address'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // IP address already exists in database, fetch it and echo it
  $row = $result->fetch_assoc();
  echo "Hello again! Your IP address is " . $row["ip_address"] . " and the current time is " . $current_time;
} else {
  // IP address does not exist in database, store it and echo it
  $sql = "INSERT INTO visitors (ip_address, visit_time) VALUES ('$ip_address', '$current_time')";
  $conn->query($sql);
  echo "Hello! Your IP address is " . $ip_address . " and the current time is " . $current_time;
}

// Close connection
$conn->close();
?>