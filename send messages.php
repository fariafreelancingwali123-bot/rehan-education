<?php
$conn = new mysqli('localhost', 'u1fkgwiwpmjub', 'mp8cjl5322br', 'db1gdbbv7ias6m');
if ($conn->connect_error) {
  die('Connection Failed: ' . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$stmt = $conn->prepare("INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $message);
$stmt->execute();

echo "Message sent successfully!";
$stmt->close();
$conn->close();
?>
