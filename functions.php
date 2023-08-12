<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message= $_POST['message'];

// Database credentials
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'webtechproject';
// Create a connection to the database
$conn = new mysqli($host, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// Insert form data into the database
$sql = "INSERT INTO cform (NAME,EMAIL, PHONE, MESSAGE) VALUES ('$name', '$email', $phone, '$message')";
if ($conn->query($sql) === TRUE) {
echo "Form submitted successfully!";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}


// Insert form data into the database using prepared statement
$stmt = $conn->prepare("INSERT INTO cform (NAME, EMAIL, PHONE, MESSAGE) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssis", $name, $email, $phone, $message);
if ($stmt->execute()) {
    echo "Form submitted successfully!";
} else {
    echo "Error: " . $stmt->error;
}

// Close the prepared statement
$stmt->close();
// Close the database connection
$conn->close();
?>