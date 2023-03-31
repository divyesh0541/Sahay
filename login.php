<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('links.php'); ?>

    <?php
        if (isset($_POST['submit']))
        {
            header('location:choice.php');
        }
    ?>
    <title>- Login</title>
</head>
<body>
    <div class="login">
        <div class="left">
            <div class="logo">
                <span><img src="IMG/logo.png" alt="" class="l_img"></span>
            </div>
            <div class="img">
                <img src="img/login.png" alt="Login" class="c_img">
            </div>
        </div>
        <div class="right">
            <span onclick="pop_close()" class="close_btn"><i class="fa fa-thin fa-xmark"></i></span>
            <h2>Login Into सAHAY</h2>
            <h2>Welcome Back :)</h2>
            <h3>To keep connected with us please login with your personal information by email address and password.</h3>
            <form method="POST">
                <div class="d_input">
                    <div class="left_input">
                        <i class="fa fa-thin fa-envelope"></i>
                    </div>
                    <div class="right_input">
                        <span>Email Address</span><br>
                        <input type="email">
                    </div>
                </div>
                <div class="d_input">
                    <div class="left_input">
                        <i class="fa fa-thin fa-lock"></i>
                    </div>
                    <div class="right_input">
                        <span>Password</span><br>
                        <input type="password">
                    </div>
                </div>
                <!-- <a href="#" class="fg">Forgot Password ?</a> -->
                <input type="submit" value="Login Now" class="btn1" name="submit">
                <a href="signup.php" class="btn2">Create Account</a>
            </form>
        </div>
    </div>
    <script src="GSAP/gsap_login.js"></script>
</body>
</html>