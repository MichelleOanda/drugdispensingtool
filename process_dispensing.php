<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data

    $firstname = $_POST['firstname'];
    $prescription = $_POST['prescription'];
    $dosage = $_POST['dosage'];
    $instructions = $_POST['instructions'];

    // Connect to the database
    require_once("connect.php");

    // Prepare and execute the database query (replace with your table name and column names)
    $sql = "UPDATE patients SET prescription = 'Asprin', dosage = '300ml', instructions = '5ml twice daily' WHERE firstname = 'Cree'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Medication dispensed successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
