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
        <form action="sign_in_php.php" method="post">
            <h3>Student</h3>
            <?php
            if (isset($_GET['error']) && $_GET['error'] == 1) {
            echo "<p style='color: red;'>Incorrect email or password</p>";
            }
            ?>
            <label for="email">Email</label>
            <input type="text" placeholder="Email" name="email" id="email" required>
            <?php
if (isset($_GET['error']) && $_GET['error'] == 1) {
    echo "<p style='color: red;'>Incorrect email or password</p>";
}
?>

            <label for="password">Password</label>
            <input type="password" placeholder="Password" name="password" id="password" required>

            <button type="submit" value="Submit">Sign In</button>
        </form>
    </div>
</body>

</html>
