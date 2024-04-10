<?php
$servername = "localhost";
$username = "u530806242_EMobile"; 
$password = "Emob1319@";
$dbname = "u530806242_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$mob_no = $_POST['mob_no'];
$email = $_POST['email'];
$subject = $_POST['subject'];

// Insert data into the database
$sql = "INSERT INTO form_data (mob_no, email, subject) VALUES ('$mob_no', '$email', '$subject')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Data stored successfully')</script>";
    //header("Location: index.html"); // Redirect to index.html
    //exit();
    echo "<script>window.open('index.html','_self')</script>";
    //echo "Data stored successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
