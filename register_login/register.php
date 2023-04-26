<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Validate the data, sanitize and hash the password
// TODO: Add more validation and sanitization as needed
$password = password_hash($password, PASSWORD_DEFAULT);

// Prepare the SQL statement to insert the user
$sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt) {
    // Bind the parameters and execute the statement
    $stmt->bind_param("sss", $username, $email, $password);
    $result = $stmt->execute();

    if ($result) {
        // User registered successfully, redirect to a success page
        $stmt->close();
        $conn->close();
        header("Location: success.html");
        exit;
    } else {
        // Error while inserting, display an error message
        echo "Error: " . $stmt->error;
    }
} else {
    // Error while preparing the statement, display an error message
    echo "Error: " . $conn->error;
}

// Close the statement and connection
if ($stmt) {
    $stmt->close();
}
$conn->close();
?>