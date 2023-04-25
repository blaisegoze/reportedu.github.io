<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/sign_in.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" href="/icon/hard_work_u.svg">
    <title>Report.edu | Sign In</title>
</head>

<body>
    <div class="background">
<<<<<<< Updated upstream:sign_in/sign_in_student.php
        <form action="sign_in_php_student.php" method="post">
            <h3>Student</h3>
=======
        <form action="sign_in_php.php" method="post">
            <h3>Sign In</h3>
>>>>>>> Stashed changes:sign_in.php
            <?php if(isset($_GET['error'])) { ?>
            <p class="error"> <?php echo $_GET["error"]; ?></p>
            <?php } ?>
            <label for="email">Email</label>
            <input type="text" placeholder="Email" name="email" id="email" required>

            <label for="password">Password</label>
            <input type="password" placeholder="Password" name="password" id="password" required>

            <button type="submit" value="Submit">Sign In</button>
        </form>
    </div>
</body>

</html>
