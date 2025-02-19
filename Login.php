<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title>Login</title>
</head>

<body>

<!-- PHP LOGIN LOGIC -->
<?php
session_start();
include('database/connect.php');





if(isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM admins WHERE Email = '$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($result);

    if($row > 0) {
        $user = mysqli_fetch_assoc($result);
        $stored_password = $user['Pass']; 
        $user_id = $user['SN'];

        if ($pass != $stored_password) {
            $error_message = "<div class='alert alert-danger text-center'>Incorrect Password! Please try again.</div>";
        } else {
            $_SESSION['user'] = $email;
            $_SESSION['user_id'] = $user_id;
            header("Location: dashboard.php");
            exit();
        }
    } else {
        $error_message = "<div class='alert alert-danger text-center'>Incorrect Email Address! Try again.</div>";
    }
}
?>

<!-- Login Form -->
<div class="login-wrapper d-flex justify-content-center align-items-center vh-100">
    <div class="container login-container d-flex justify-content-center align-items-center">
        <div class="col-md-6">
            <h1 class="text-center mb-4">Login</h1>

            <?php if(isset($error_message)) echo $error_message; ?>

            <form action="" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
                </div>
                <div class="signup-link mt-3 text-center">
                    <a href="#">Forgot Password?</a>
                </div>
                <!-- Login Button -->
                <button type="submit" name="submit" class="btn login-btn mt-3 w-100">Login</button>
                <!-- Signup Link -->
                <div class="signup-link mt-3 text-center">
                    Don't have an Account? <a href="Signup.html">Signup</a>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
