<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "r_health_care"; // Replace with your database name

// Create connection (MySQLi)
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data safely
    $Full_Name = $_POST['Full_Name'];
    $Email = $_POST['Email'];
    $Appointment_date = $_POST['Appointment_date'];
    $Address = $_POST['Address'];
    $Phone = $_POST['Phone'];

        // Correct SQL syntax
    $insert = "INSERT INTO appointments (Full_Name, Email,Appointment_Date,Address, Phone,) 
               VALUES ('$FullName','$EmaiL','$Appointment_date','$Addres','$Phone',)";

    // Remove semicolon from the if statement
if (mysqli_query($connection, $insert)) {
        echo "Appointment booked successfully!";
    } else {
        echo "No entry made: " . mysqli_error($connection);
    }
}

mysqli_close($connection);
?>

