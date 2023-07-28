<?php 

@include 'submit.php';

if(isset($_POST['submit'])){
$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = $_POST['lastname'];
    $emailaddress = $_POST['emailaddress'];
    $address = $_POST['address'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $SSN_IDN = $_POST['SSN_IDN'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $phonenumber = $_POST['phonenumber'];
    $maritalstatus = $_POST['maritalstatus'];
    $prescription = $_POST['prescription'];

    $select ="SELECT * FROM drugdispenser.patients WHERE username = '$username' && password = '$password'";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

        $error[] = 'user already exist!';
    }
   
};


?>


<!DOCTYPE html>
<html>
    <head>
        <title>REGISTRATION FORM</title>
</head>
<body>
    <h2>REGISTRATION</h2>
    <form action="" method="post">

<?php
if(isset($error)){
    foreach($error as $error){
        echo '<span class="error-msg">'.$error.'</span>';
    }
}
?>

    <div>
        <label for="fname">First Name: </label>
        <input type="text" id="fname" name="fname" required>
</div>

<br>

<div>
    <label for="lname">Last Name: </label>
        <input type="text" id="lname" name="lname" required>
</div>

<br>

<div>
    <label for="email">Email Address:</label>
        <input type="text" id="email" name="email" placeholder="creenorman@gmail.com" required>
</div>

<br>

<div>
    <label for="idn">ID Number:</label>
        <input type="text" id="idn" name="idn" placeholder="Enter a 8-digit number" maxlength="8" required>
</div>

<br>

<div>
    <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
</div>

<br>

<div>
    <label for="pass">Password:</label>
        <input type="password" id="pass" name="pass" maxlength="12" required>
</div>

<br>

<div>
    <label for="role">Role:</label>
    <select name="role" id="role" required>
      <option value="admin">Admin</option>
      <option value="patient">Patient</option>
      <option value="pharmacist">Pharmacist</option>
      <option value="doctor">Doctor</option>
    </select>
</div>

<br>

<div> 
    <label for="age">Age:</label>
        <input type="number" id="age" name="age" min="1" max="120" required>
</div>

<br>

<div>
    <label>Female </label>
        <input type="radio" name="gender">

    <label>Male </label>
        <input type="radio" name="gender">
</div>

<br>

<div>
    <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" placeholder="Enter a 10-digit number" maxlength="10" required>
</div>

<br>

<div>
    <label>Single</label>
        <input type="radio" name="status">

    <label>Married</label>
        <input type="radio" name="status">

    <label>Divorced</label>
        <input type="radio" name="status">
</div>

<br>

<div>
    <input type="Submit" class="btn btn-primary w-100" value="Register Now">
</div>


</form>
</body>
</html>

    
