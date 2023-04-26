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
$user = $_POST['username'];
$password = $_POST['password'];
$password = password_hash($password, PASSWORD_DEFAULT);

$sql = "SELECT password FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $user);
$stmt->execute();
$stmt->store_result();  
  
if($stmt->num_rows > 0) {
	// success redirect to logged-in page
        $stmt->close();
        $conn->close();
        header("Location: index.html");
    }
	
	else{
		$stmt->close();
        $conn->close();
		echo "login failed";
        header("Location: login.html");
	}
?>