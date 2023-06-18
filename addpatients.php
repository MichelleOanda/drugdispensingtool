<?php
require_once("connect.php");

$patientname = "Mary Maina";
$patientPhone_number = "0721565890";
$patientSSN = "12345";
$patient_age = "35";
$patient_address = "1432 OakwoodLN";
$primaryDoctor = "Dr. Malindi";
$doctorSSN = '54321'
$prescription = "Augmentin 1*3";

$sql = "INSERT INTO DrugDispenser (patientname, patientPhone_number, patientSSN, patient_age, patient_address, primaryDoctor,doctorSSN, prescription)
        VALUES ('$patientname', '$phone_number', '$SSN', '$age', '$address', '$primaryDoctor','$doctorSSN', '$prescription')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>