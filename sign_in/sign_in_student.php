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
    <title>Report.edu | Student Sign In</title>
</head>

<body>
    <div class="background">
        <form action="sign_in_php_student.php" method="post">
            <h3 class="sign_in_header">Student</h3>
            <p class="sign_in_sub_header">or <a class="login_switch" href="/sign_in/sign_in_teacher.php">Teacher</a></p>
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
