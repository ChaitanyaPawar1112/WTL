<?php
include "db.php";

$id = $_POST['id'];   // match with JS key "id" from form

if ($conn) {
    $stat = $conn->prepare("DELETE FROM student WHERE id = ?");
    $stat->bind_param("i", $id);
    
    $b = $stat->execute();
    
    if ($b && $stat->affected_rows > 0) {
        echo "Deleted successfully";
    } else {
        echo "Id not found";
    }

    $stat->close();
    $conn->close();
} else {
    echo "Error in connecting with database";
}
?>
