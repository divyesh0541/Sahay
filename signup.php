<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('links.php'); ?>
    <?php
        session_start();
    
    ?>
    <title>- Registration</title>
</head>
<body>
    <div class="signup">
        <div class="right">
            <span class="close_btn" onclick="pop_close()"><i class="fa fa-thin fa-xmark"></i></span>
            <h2>Register Into सAHAY</h2>
            <h2>Welcome Back :)</h2>
            <h3>To keep connected with us please login with your personal information by email address and password.</h3>
            <div  style="background-color: #4c7031; width:320px; display: none;" id="error_div" >
                <h4 id="error_block" style="color: white;padding:10px;margin-left: 5px;">
                <i  style="margin-left: 80px;border-style: solid;border-width: 2px;padding:3px;border-color: white;" class="fa fa-thin fa-xmark"></i></h4>
                                        
            </div>
                            <?php
                                if(isset($_SESSION['detail'])){
                                    if(strcmp($_SESSION['detail'],'signup_account_exists')==0){
                            ?>
                                        <script type="text/javascript">

                                            document.getElementById('error_div').style.display="block";
                                            document.getElementById('error_block').innerHTML="Account already exists";
                                            
                                        </script>
                            <?php
                                    
                                    }elseif (strcmp($_SESSION['detail'],'signup_password_error')==0) {
                            ?>
                                        <script type="text/javascript">
                                            document.getElementById('error_div').style.display="block";
                                            document.getElementById('error_block').innerHTML="Password != Confirm Password";
                                            
                                        </script>
                            <?php
                                    }else{
                            ?>
                                        <script type="text/javascript">
                                            document.getElementById('error_div').style.display="block";
                                            document.getElementById('error_block').innerHTML="Password >= 8";
                                            
                                        </script>
                            <?php
                                    }
                                unset($_SESSION['detail']);
                                }

            ?>
            <form method="POST" action="Database/signup.php">
                <div class="d_input">
                    <div class="left_input">
                        <i class="fa fa-thin fa-user"></i>
                    </div>
                    <div class="right_input">
                        <span>Name</span><br>
                        <input type="text" name="name" required>
                    </div>
                </div>
                <div class="d_input">
                    <div class="left_input">
                        <i class="fa fa-thin fa-envelope"></i>
                    </div>
                    <div class="right_input">
                        <span>Email Address</span><br>
                        <input type="email" name="email" required>
                        
                    </div>
                </div>
                <div class="d_input">
                    <div class="left_input">
                        <i class="fa fa-thin fa-lock"></i>
                    </div>
                    <div class="right_input">
                        <span>Password</span><br>
                        <input type="password" name="password" required>
                    </div>
                </div>
                <div class="d_input">
                    <div class="left_input">
                        <i class="fa fa-thin fa-lock"></i>
                    </div>
                    <div class="right_input">
                        <span>Confirm Password</span><br>
                        <input type="password" name="c_password" required>
                    </div>
                </div>
                <!-- <a href="#">Forgot Password ?</a> -->
                <input type="submit" value="Create Account" class="btn1" name="submit">
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
