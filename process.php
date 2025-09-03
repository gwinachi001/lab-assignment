<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = trim($_POST["full_name"]);
    $email = trim($_POST["email"]);
    $department = trim($_POST["department"]);
    $matric_number = trim($_POST["matric_number"]);

   
    if (empty($full_name) || empty($email) || empty($department) || empty($matric_number)) {
        die("All fields are required!");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format!");
    }


    $sql = "INSERT INTO student_records (full_name, email, department, matric_number) 
            VALUES ('$full_name', '$email', '$department', '$matric_number')";

    if (mysqli_query($conn, $sql)) {
        echo "Student registered successfully! <a href='view.php'>View Students</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
