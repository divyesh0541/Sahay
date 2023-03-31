<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="CSS/ui.css">
    <?php include('links.php'); ?>

    <?php
        if (isset($_POST['submit']))
        {
            header('location:user/template/pages/tables/basic-table.php');
        }
    ?>
    <title>- Ask Service</title>
</head>
<body>
    <div class="ask">
        <form method="POST" class="form_sides">
            <div class="form_lt">
                <div class="d_input">
                    <div class="right_input">
                        <span>Work for ?</span><br>
                        <input type="text">
                    </div>
                </div>
                <div class="d_input">
                    <div class="right_input">
                        <span>What Charges you descided for this work</span><br>
                        <input type="number">
                    </div>
                </div>
                
            </div>
            <div class="form_rt">
                <div class="d_input">
                    <div class="right_input">
                        <span>Briefly explain your work</span><br>
                        <textarea name="" id="" cols="50" rows="10"></textarea>
                    </div>
                </div>
            </div>
        </form>
        <form method="POST">
        <input type="submit" class="btn1_ask" name="submit">
        </form>
        
    </div>
    <div class="img_choice">
        <img src="img/logo.png" alt="">
    </div>
</body>
</html>
<script src="gsap/gsap_ask.js"></script>