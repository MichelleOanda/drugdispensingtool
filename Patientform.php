<!DOCTYPE html>
<html>
    <head>
        <title>PATIENTS FORM</title>
</head>
<body>
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
    <label for="address">Address:</label>
        <textarea id="address" name="address" rows="2" cols="50" required></textarea>
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
    <input type="Submit">
</div>

<br>

<div>
    <input type="Reset">
</div>



    
