<?php
// Get the form data
$firstname = $_POST['patientname'];
$lastname = $_POST['patientname'];
$patient_address = $_POST['patient_address'];
$patientSSN = $_POST['patientSSN'];
$patient_age = $_POST['patient_age'];
$patientPhone_number = $_POST['patientPhone_number'];
$prescription = $_POST['prescription'];
$patient_email = $_POST['patient_email'];

// Validate email address
if (!filter_var($patient_email, FILTER_VALIDATE_EMAIL)) {
    echo "Please enter a valid email address.";
    exit;
}


$servername = "localhost";
$username = "root";
$password = "nyatero1234";
$dbname = "DrugDispenser";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO Patient(firstname, lastname, address, ssn, age, phone, prescription) 
        VALUES ('$patientname', '$patientname', '$patient_address', '$patientSSN', '$patient_age', '$patientPhone_number', '$prescription')";

if ($conn->query($sql) === TRUE) {
    echo "Form submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
