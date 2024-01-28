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

    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {{
        $user = $result->fetch_assoc();
    }} else {{
        echo "User not found.";
        exit;
    }}
}} else {{
    echo "Invalid request.";
    exit;
}}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2 class="mt-5">Edit User</h2>

    <form action="update.php" method="post" class="mt-3">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">

        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" value="<?php echo $user['username']; ?>" class="form-control" required>
        </div>

        <div class="form-group">
            <!-- Input field for the new password -->
            <label for="new_password">New Password:</label>
            <input type="password" name="new_password" class="form-control">
        </div>

        <div class="form-group">
            <!-- Display the current password as plain text -->
            <label for="current_password">Current Password:</label>
            <span class="form-control"><?php echo $user['password']; ?></span>
        </div>

        <div class="form-group">
            <label for="role">Role:</label>
            <select name="role" class="form-control" required>
                <option value="admin" <?php echo ($user['role'] == 'admin') ? 'selected' : ''; ?>>Administrator</option>
                <option value="user" <?php echo ($user['role'] == 'user') ? 'selected' : ''; ?>>User</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<!-- Add Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>

<?php
$conn->close();
?>