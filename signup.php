<?php include 'db.php'; ?>
<style><?php include 'css/style.css' ?></style>

<?php 

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
        $checkUser = "SELECT * FROM users WHERE username = '{$username}'";
        $result = mysqli_query($conn, $checkUser);
    
        if ($result->num_rows == 0) {
            mysqli_free_result($result);
            $createUser = "INSERT INTO users (username, pass) VALUES ('{$username}','{$password}')";
            mysqli_query($conn, $createUser);
            header('Location: login.php');
        } else {
            mysqli_free_result($result);
            echo 'Error, user already exists!';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <link rel="stylesheet" href="assets/signup.css">
</head>
<body>
    
    <div id="login-container">
    <h1 class = "heading">Sign Up</h1>
        <form class = "login" action="" method="post">
            <input class = "loginput" type="text" placeholder="Username" maxlength="16" id="username" name="username" required class="form-input">
            <input class = "loginput" type="password" placeholder="Password" maxlength="32" id="password" name="password" required class="form-input">
            <div id="button-container">
                <button class = "logbuttonoutside" style = "font-size: 1.25vw"type="submit">Create Account</button>
            </div>
        </form>
    </div>

</body>
</html>