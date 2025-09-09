<?php
include 'db.php';  // connect.php should create $conn

$name = $_POST['name'];
$marks = $_POST['marks'];
$id=$_POST['id'];

// Prepare the insert statement
$stat = $conn->prepare("INSERT INTO student (name, marks,id) VALUES (?, ?, ?)");
$stat->bind_param("sii", $name, $marks,$id); // s=string, i=integer

// Execute the statement
if ($stat->execute()) {
    echo "Data added successfully";
} else {
    echo "Error: " . $stat->error;
}

// Close statement and connection
$stat->close();
$conn->close();
?>
