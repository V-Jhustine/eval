<?php
// Start a session
session_start();

// Connect to the database
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "evaluation_db";
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

// Check for form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
  $lname = mysqli_real_escape_string($conn, $_POST["lname"]);
  $course = mysqli_real_escape_string($conn, $_POST["course"]);
  $section = mysqli_real_escape_string($conn, $_POST["section"]);
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $password = mysqli_real_escape_string($conn, $_POST["password"]);

  // Validate form data
  if (empty($fname) || empty($lname) || empty($email) || empty($password)) {
    $_SESSION["error"] = "Please fill in all fields.";
    header("Location: signup.php");
    exit;
  }
  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION["error"] = "Please enter a valid email address.";
    header("Location: signup.php");
    exit;
  }

  // Insert user data into database
  $sql = "INSERT INTO users (firstname, lastname, course, section, email, password) VALUES ('$fname', '$lname', '$course', '$section', '$email', '$password')";
  if (mysqli_query($conn, $sql)) {
    $_SESSION["success"] = "Thank you for signing up!";
    header("Location: login.php");
    exit;
  } else {
    $_SESSION["error"] = "Error: " . mysqli_error($conn);
    header("Location: signup.php");
    exit;
  }
}

// Close database connection
mysqli_close($conn);
?>
