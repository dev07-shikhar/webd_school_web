<?php
// Connect to the database
include "db.php";

// Get values submitted through the admission form
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$gender = $_POST["gender"];
$dob = $_POST["dob"];
$class = $_POST["class"];
$address = $_POST["address"];

// SQL query with placeholders
$sql = "INSERT INTO admissions
        (name, email, phone, gender, dob, class, address)
        VALUES (?, ?, ?, ?, ?, ?, ?)";

// Prepare and execute the query
$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
    die("Query preparation failed: " . mysqli_error($conn));
}

mysqli_stmt_bind_param(
    $stmt,
    "sssssss",
    $name,
    $email,
    $phone,
    $gender,
    $dob,
    $class,
    $address
);

if (mysqli_stmt_execute($stmt)) {
    echo "<!DOCTYPE html><html><head><title>Admission Status</title>";
    echo "<link rel='stylesheet' href='style.css'></head><body>";
    echo "<div class='status-box'>";
    echo "<h2>Admission Form Submitted Successfully!</h2>";
    echo "<p>Thank you, " . htmlspecialchars($name) . ". Your details have been saved.</p>";
    echo "<a class='button' href='index.php'>Back to Home</a> ";
    echo "<a class='button' href='admission.php'>Submit Another Form</a>";
    echo "</div></body></html>";
} else {
    echo "Error while saving data: " . htmlspecialchars(mysqli_stmt_error($stmt));
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>