<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="CSS/ui.css">
    <?php include('links.php');

     ?>

    <?php
        if (isset($_POST['submit']))
        {
            header('location:user/template/pages/tables/all_work.php');
        }
    ?>
    <title>- Ask Service</title>
</head>
<body>
    <div class="ask">
        <form method="POST" class="form_sides" action="Database/add_work.php">
            <div class="form_lt">
                <div class="d_input">
                    <div class="right_input">
                        <span>Work for ?</span><br>
                        <input type="text" name="for">
                    </div>
                </div>
                <div class="d_input">
                    <div class="right_input">
                        <span>What Charges you descided for this work</span><br>
                        <input type="number" name="charge">
                    </div>
                </div>
                
            </div>      
            <div class="form_rt">
                <div class="d_input">
                    <div class="right_input">
                        <span>Briefly explain your work</span><br>
                        <textarea name="brief" id="" cols="50" rows="10"></textarea>
                    </div>
                </div>
            </div>

        <input type="submit" class="btn1_ask"style="width:100px;height:40px;padding: 10px;" name="submit">
        </form>
        
    </div>
    <div class="img_choice">
        <img src="img/logo.png" alt="">
    </div>
</body>
</html>
<script src="gsap/gsap_ask.js"></script>