<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report.edu | Sign In</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/sign_in.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div class="background">
        <form>
            <h3>Student</h3>

            <label for="email">Email</label>
            <input type="text" placeholder="Email" name="email" id="email" required>

            <label for="password">Password</label>
            <input type="password" placeholder="Password" name="password" id="password" required>

            <button type="submit" value="Submit">Sign In</button>
        </form>
    </div>
</body>

</html>
<?php
require 'connection.php';


if(isset($_POST["submit"])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $temp = $mysqli->prepare("select * from sign_in where email = ?");
    $temp->bind_param("s", $email);
    $temp->execute();
    $temp_result = $temp->get_result();
    if($temp_result->num_rows > 0){
        $data = $temp_result->fetch_assoc();
        if($data['password'] === $password) {
            header("Location: index.php");
            echo "<h2>Access Granted</h2>";
        } else {
            echo "<h2>Invalid Email or Password</h2>";
         }
         } else {
            echo "<h2>Invalid Email or Password</h2>";
         }
} else {
    echo "<h2>Nope</h2>";
}
exit();
?>