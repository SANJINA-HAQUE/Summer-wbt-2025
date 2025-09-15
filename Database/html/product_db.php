<?php
$host = 'localhost';
$db = 'product_db';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  echo "Connection failed: " . $conn->connect_error;
  exit;
}

$name = $_POST['name'];
$buying = $_POST['buying_price'];
$selling = $_POST['selling_price'];
$display = isset($_POST['display']) ? 1 : 0;

// Calculate profit
$profit = $selling - $buying;

$sql = "INSERT INTO products (name, buying_price, selling_price, profit, display) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sdddi", $name, $buying, $selling, $profit, $display);

if ($stmt->execute()) {
  echo "Product saved successfully!";
} else {
  echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>