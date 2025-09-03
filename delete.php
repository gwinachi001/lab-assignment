<?php
include "db.php";

if (isset($_GET["id"])) {
    $id = intval($_GET["id"]);

    $sql = "DELETE FROM student_records WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        header("Location: view.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>
