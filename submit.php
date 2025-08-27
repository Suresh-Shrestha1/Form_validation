<?php
// Database connection
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'user_db';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form values
$fullname = trim($_POST['fullname']);
$email = trim($_POST['email']);
$username = trim($_POST['username']);
$password = trim($_POST['password']);

// Validation
$errors = [];

if (strlen($fullname) > 40) {
    $errors[] = "Full name must be 40 characters or less.";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email address.";
}

if (!preg_match('/^[A-Za-z]+[0-9]+$/', $username)) {
    $errors[] = "Username must start with letters and end with numbers.";
}

if (strlen($password) < 8) {
    $errors[] = "Password must be at least 8 characters.";
}

if (!empty($errors)) {
    foreach ($errors as $e) {
        echo "<p style='color:red;'>$e</p>";
    }
    echo "<p><a href='index.php'>Go Back</a></p>";
    exit;
}

// Insert into database
$stmt = $conn->prepare("INSERT INTO users (fullname, email, username, password) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $fullname, $email, $username, $password);

if ($stmt->execute()) {
    echo "<p style='color:green; text-align:center; font-size:40px;'>User registered successfully!</p>";
} else {
    echo "<p style='color:red;'>Error: " . $stmt->error . "</p>";
}

$stmt->close();
$conn->close();
?>