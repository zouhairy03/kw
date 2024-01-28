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

if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"])) {{
    $id = sanitizeData($_GET["id"]);

    // Delete the user with the specified ID
    $sql = "DELETE FROM users WHERE id = $id";

    if ($conn->query($sql) === TRUE) {{
        echo "Record deleted successfully";

        // Redirect back to process_form.php after delete
        header("Location: process_form.php");
        exit();
    }} else {{
        echo "Error deleting record: " . $conn->error;
    }}
}} else {{
    echo "Invalid request.";
}}

$conn->close();
?>