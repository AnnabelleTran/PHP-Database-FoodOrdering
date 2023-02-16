<?php include 'db.php' ?>
<style><?php include 'css/style.css' ?></style>

<?php 
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];

        $userAuth = "SELECT * FROM users WHERE username = '{$username}'";
    
        $result = mysqli_query($conn, $userAuth);
        $user = $result -> fetch_assoc();
    
        if (password_verify($_POST['password'], $user['pass'])) {
            header('Location: home.php');
        } else {
            echo 'Error, username or password does not match system records!';
        }
    
        mysqli_free_result($result);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Login</title>

    <link rel="stylesheet" href="assets/login.css">
</head>
<body>
    
    <div id="login-container">
    <h1 class = "heading">Log In</h1>
        <form class = "login" action="" method="post">
            <input class = "loginput" type="text" placeholder="Username" maxlength="16" name="username" required class="form-input">
            <input class = "loginput" type="password" placeholder="Password" maxlength="32" name="password" required class="form-input">

            <div id="button-container">
                <button class = "logbuttonoutside" type="submit">Log In</button>
                <button class = "logbuttonoutside"><a class = "logbutton"  href="signup.php">Sign Up</a></button>
            </div>
        </form>
    </div>

</body>
</html>