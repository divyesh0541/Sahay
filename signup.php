<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('links.php'); ?>
    <title>- Registration</title>
</head>
<body>
    <div class="signup">
        <div class="right">
            <span class="close_btn" onclick="pop_close()"><i class="fa fa-thin fa-xmark"></i></span>
            <h2>Register Into सAHAY</h2>
            <h2>Welcome Back :)</h2>
            <h3>To keep connected with us please login with your personal information by email address and password.</h3>
            <form>
                <div class="d_input">
                    <div class="left_input">
                        <i class="fa fa-thin fa-user"></i>
                    </div>
                    <div class="right_input">
                        <span>Name</span><br>
                        <input type="name">
                    </div>
                </div>
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
                <div class="d_input">
                    <div class="left_input">
                        <i class="fa fa-thin fa-lock"></i>
                    </div>
                    <div class="right_input">
                        <span>Confirm Password</span><br>
                        <input type="password">
                    </div>
                </div>
                <!-- <a href="#">Forgot Password ?</a> -->
                <input type="button" value="Create Account" class="btn1">
                <a href="login.php" class="btn2">Login Now</a>
            </form>
        </div>
        <div class="left">
            <div class="logo">
                <span><img src="IMG/logo.png" alt=""></span>
            </div>
            <div class="img">
                <img src="img/logo2.png" alt="Login">
            </div>
        </div>
    </div>
    <script src="GSAP/gsap_signup.js"></script>
</body>
</html>