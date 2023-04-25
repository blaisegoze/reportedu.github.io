<?php
 include "connection.php";

if (isset($_POST['email']) && isset($_POST['password'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    if (empty($email)) {
        header("Location: sign_in.php?error=User Name is required");
        exit();
    }
    else if(empty($password)){
        header("Location: sign_in.php?error=Password is required");
        exit();
    }
    else{
        $sql = "SELECT * FROM sign_in WHERE email ='$email' AND password ='$password'";
        $result = mysqli_query($mysqli, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if ($row['email'] === $email && $row['password'] === $password) {
                echo "<h2>Logged in!</h2>";
                $_SESSION['email'] = $row['email'];
                header("Location: index.php");
                exit();
            }
            else{
                header("Location: sign_in.php?error=Incorect User name or password");
                exit();
            }
        }
        
    }
}
else{
    header("Location: sign_in.php");
    exit();
}
?>