 <!DOCTYPE html>
<html>
<head>
    <title>PATIENTS TABLE</title>
</head>
<body>
    

    <table id="patientsTable" border="1">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Username</th>
            <th>Password</th>
            <th>IDN</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Phone Number</th>
        </tr>
        <tr>
          <td>Cree</td>
          <td>Norman</td>
          <td>creenorman@gmail.com</td>
          <td>4125-636</td>
          <td>cree_norman</td>
          <td>cree123</td>
          <td>4563876</td>
          <td>26</td>
          <td>Female</td>
          <td>0118955589</td>
</tr>
          </table>

    <script>
        function storedata()
            var firstName = document.getElementById("fname").value;
            var lastName = document.getElementById("lname").value;
            var email = document.getElementById("email").value;
            var address = document.getElementById("address").value;
            var username = document.getElementById("username").value;
            var password = document.getElementById("pass").value;
            var idn = document.getElementById("idn").value;
            var age = document.getElementById("age").value;
            var gender = document.querySelector('input[name="gender"]:checked').value;
            var phoneNumber = document.getElementById("phone").value;
          
            var table = document.getElementById("patientsTable");
            var newRow = table.insertRow(table.rows.length);
            var cell1 = newRow.insertCell(0);
            var cell2 = newRow.insertCell(1);
            var cell3 = newRow.insertCell(2);
            var cell4 = newRow.insertCell(3);
            var cell5 = newRow.insertCell(4);
            var cell6 = newRow.insertCell(5);
            var cell7 = newRow.insertCell(6);
            var cell8 = newRow.insertCell(7);
            var cell9 = newRow.insertCell(8);
            var cell10 = newRow.insertCell(9);

            cell1.innerHTML = firstName;
            cell2.innerHTML = lastName;
            cell3.innerHTML = email;
            cell4.innerHTML = address;
            cell5.innerHTML = username;
            cell6.innerHTML = password;
            cell7.innerHTML = idn;
            cell8.innerHTML = age;
            cell9.innerHTML = gender;
            cell10.innerHTML = phoneNumber;
 
            document.getElementById("myForm").reset(); // Reset form after storing data
        }
    </script>
</body>
</html>

      


    <!--
<style>
  .green-column {
    background-color: purple;
  }
</style>

<table>
  <tr>
    <th>Header 1</th>
    <th>Header 2</th>
    <th class="purple-column">Header 3</th>
    <th>Header 4</th>
  </tr>
  <tr>
    <td>Data 1</td>
    <td>Data 2</td>
    <td class="green-column">Data 3</td>
    <td>Data 4</td>
  </tr>
  More table rows... 
</table>
-->
