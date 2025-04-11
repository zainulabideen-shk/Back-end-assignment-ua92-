<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'students';

// Create connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Predefined email and password for teachers
$teacher_email = 'teacher@gmail.com';
$teacher_password = '12345';

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Check if email and password match predefined credentials
  if ($email == $teacher_email && $password == $teacher_password) {
    // Set session variables
    $_SESSION['email'] = $email;
    $_SESSION['role'] = 'teacher';

    // Redirect to dashboard
    echo "<script>window.location.href='admin.php';</script>";
    exit;
  } else {
    echo '<script>alert("Invalid email or password");</script>';
  }
}
?>
