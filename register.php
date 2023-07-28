<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  require_once("connect.php");
  // Insert user information into the "patients" table
  $sql = "INSERT INTO patients (username, password) VALUES ('$username', '$password')";

  if ($conn->query($sql) === TRUE) {
    echo "Account created successfully!";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
</head>
<body>
  <h2>Registration</h2>
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div>
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required>
</div>
    <br>
<div>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>
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

    <input type="submit" value="Create Account">
  </form>
</body>
</html>
