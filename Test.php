<?php

// Database connection variables
$servername = "Local instance MySQL80";
$username = "root";
$password = "@2002";
$dbname = "yourdatabase";

// Connect to database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the user has submitted the form
if (isset($_POST['submit'])) {

    // Get the input values
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert the user into the database
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";
    if (mysqli_query($conn, $sql)) {
        echo "User created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

if (isset($_POST['submit'])) {

    // Get the input values
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username exists in the database
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // The username exists, check the password
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['password'];
        if (password_verify($password, $hashed_password)) {
            // Password is correct, log the user in
            session_start();
            $_SESSION['username'] = $username;
            header("Location: welcome.php");
            exit();
        } else {
            // Password is incorrect
            echo "Invalid username or password";
        }
    } else {
        // Username doesn't exist
        echo "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
</head>
<body>

    <h1>User Login</h1>

    <form method="post">
        <label>Student/Faculty name:</label>
        <input type="text" name="username" required><br>

        <label>Password:      </label>
        <input type="password" name="password" required><br>

        <input type="submit" name="submit" value="Create User">
        <input type="submit" name="submit" value="Login">
    </form>

</body>
</html>
