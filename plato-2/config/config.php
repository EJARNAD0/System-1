<?php
// Set the timezone to Manila
date_default_timezone_set("Asia/Manila");

// Start a session if needed (optional)
session_start();

// Database credentials
define('DB_SERVER', 'localhost');  // or use '127.0.0.1' for local server
define('DB_USERNAME', 'root');     // default MySQL username for XAMPP is 'root'
define('DB_PASSWORD', '');         // default MySQL password is empty
define('DB_DATABASE', 'db_plato'); // replace with your actual database name

// Alternatively, you can establish the connection directly in this file as well
?>
