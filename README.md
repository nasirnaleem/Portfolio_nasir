# Portfolio_nasir
This is my portfolio web page
https://github.com/nasirnaleem/Portfolio_nasir.git
Connecting to the MySQL Database (Using XAMPP)
To save the details submitted through the "Send Message" option, you can use XAMPP to set up a MySQL database. Follow these steps:

Install and Start XAMPP: Download and install XAMPP from https://www.apachefriends.org. Start the Apache and MySQL modules.

Create Database: Open phpMyAdmin (usually accessed at [http://localhost/phpmyadmin](https://github.com/nasirnaleem/Portfolio_nasir.git)) and create a new database named portfolio_data.

Import SQL File: Import the portfolio_data.sql file provided in the repository. This file contains the necessary table structure for storing contact details.

PHP Code for Database Connection: Create a PHP file (e.g., db_connect.php) to establish a connection to the MySQL server. Here's an example of what the file may look like:

<?php
// Database configuration
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'webtechproject';

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
Replace your_username and your_password with your MySQL username and password.
