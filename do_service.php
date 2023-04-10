<!DOCTYPE html>
<html>
<head>
    <?php include('links.php') ?>
	<title>Text Field</title>
    <style>
        #newElementId{
            padding:2%;
        }
        #newInputBox{
            padding:2%;
        }
        input[type="button"]{
            padding: 0.3% 1%;
    border: 0;
    background: black;
    color: white;
    font-size: 35px;
    border-radius: 100%;
    width:16%;
        }
        #newInputBox {
            padding: 1% 1%;
    margin-bottom: 5%;
    width: 100%;
    border: 0;
    background: black;
    color: white;
    outline: 0;
    border-radius: 5px;
    height: 35px;
    font-size: 13px;
    padding-left: 2%;
    transition: width 3s;
}
.img_choice{
    text-align: right;
    margin-top: 0%;
}
.img_choice img{
    width: 12%;
    margin-right: 5%;
}
*{
    margin:0;
}
.skill{
    display: flex;
    width: 65%;
    margin: auto;
    margin-top: 1%;
    padding-bottom: 1%;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    padding-top: 3%;
    margin-top: 2.5%;
    padding-right: 5%;
    opacity: 0;
    transform: translateY(800px);
    padding-left: 5%;
    background-color: white;
    border-radius: 10px;
}
#dynamicCheck{
    margin-top:2%;
}
.rt .logo
{
    text-align: right;
}
.rt .logo span
{
    font-size: 15px;
    text-transform: uppercase;
}
.rt .img
{
    margin-top: 10%;
    text-align: right;
}
.rt .img img
{
    width: 60%;
}
.submit input{
    padding: 3% 8%;
    background: black;
    color: white;
    border: 0px;
    font-size: 14px;
    margin-top: 10%;
    border-radius: 3px;
    cursor:pointer;
}
    </style>
</head>
<script>
var count=1;
function createNewElement() {
    // First create a DIV element.
	var txtNewInputBox = document.createElement("INPUT");
    console.log("Hello");
    // Then add the content (a new input box) of the element.
	txtNewInputBox.setAttribute('type','text');
    txtNewInputBox.setAttribute('name','in'+count+'p');
    txtNewInputBox.setAttribute('required',''); 
    
    var countEle=document.getElementById('count');
    countEle.setAttribute('value',''+count);
    count+=1;
    // Finally put it where it is supposed to appear.
	document.getElementById("newElementId").appendChild(txtNewInputBox);
}
</script>
<body>
<div class="skill">
    <div class="lt" style="margin-top:5%;">
    <h1 style="margin-bottom:9%;">Add Your Skills Here</h1>
<div id="dynamicCheck">
   <input type="button" value="+" onclick="createNewElement();"/>
</div>
<div class="submit">
    <form method="POST" action='Database/set_service.php' >

        <div id="newElementId"></div>
        <input type="hidden" name="count" id="count">
        <input type="submit">    
    </form>
    
</div>
<div id="newElementId">

</div>
    </div>
    <div class="rt">
            <div class="logo">
                <span><img src="IMG/logo2.png" alt="" style="width: 30%;"></span>
            </div>
            <div class="img">
                <img src="img/login.png" alt="Login">
            </div>
        </div>
    
</div>
    <script src="GSAP/gsap_do_service.js"></script>
</body>
</html>