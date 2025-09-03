<?php
include "db.php";

$result = mysqli_query($conn, "SELECT * FROM student_records");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registered Students</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <h2>Registered Students</h2>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Department</th>
            <th>Matric Number</th>
            <th>Action</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["full_name"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["department"]; ?></td>
            <td><?php echo $row["matric_number"]; ?></td>
            <td>
                <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <br>
    <a href="index.php">Back to Registration</a>
</body>
</html>
