<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "ex";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {{
    die("Connection failed: " . $conn->connect_error);
}}

function sanitizeData($data)
{{
    return htmlspecialchars(trim($data));
}}

if ($_SERVER["REQUEST_METHOD"] === "POST") {{
    $id = sanitizeData($_POST["id"]);
    $username = sanitizeData($_POST["username"]);
    $role = sanitizeData($_POST["role"]);
    $newPassword = sanitizeData($_POST["new_password"]); // The new password entered by the user

    $sql = "UPDATE users SET username='$username', password='$newPassword', role='$role' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {{
        echo "Record updated successfully";

        // Redirect back to process_form.php after update
        header("Location: process_form.php");
        exit();
    }} else {{
        echo "Error updating record: " . $conn->error;
    }}
}} else {{
    echo "Invalid request.";
}}

$conn->close();
?>