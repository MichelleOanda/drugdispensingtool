<?php
// update_user.php

require_once("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user data from the POST request
    $username = $_POST["username"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    // Add more user data fields as needed

    // Perform the update operation in the database
    // Modify the SQL query based on your database schema
    $sql = "UPDATE patients SET firstname = '$firstName', last_name = '$lastName', email = '$email' WHERE username = $username";

    if ($conn->query($sql) === TRUE) {
        // If the update was successful, send a success response
        $response = array("status" => "success", "message" => "User data updated successfully.");
    } else {
        // If there was an error in the database operation, send an error response
        $response = array("status" => "error", "message" => "Error updating user data: " . $conn->error);
    }

    // Close the database connection
    $conn->close();

    // Send the response back to the client
    header("Content-Type: application/json");
    echo json_encode($response);
}
?>
