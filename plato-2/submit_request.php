<?php
header("Content-Type: application/json");

// Database connection
$conn = new mysqli('localhost', 'root', '', 'db_plato');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from POST request
$input = json_decode(file_get_contents('php://input'), true);
$name = $conn->real_escape_string($input['name']);
$requestDetails = $conn->real_escape_string($input['request_details']);
$status = 'pending'; // Default status
$createdAt = date('Y-m-d H:i:s'); // Current date and time

// Insert data into the database
$sql = "INSERT INTO requests (name, request_details, status, created_at) VALUES ('$name', '$requestDetails', '$status', '$createdAt')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["status" => "success", "message" => "Request submitted"]);
} else {
    echo json_encode(["status" => "error", "message" => "Failed to submit request"]);
}

$conn->close();
?>