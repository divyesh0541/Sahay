<!DOCTYPE html>
<html>
<head>
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
        }
        #newInputBox {
            padding: 1% 1%;
    margin-bottom: 2%;
    width: 40%;
    border: 0;
    background: black;
    color: white;
    outline: 0;
    border-radius: 5px;
    height: 35px;
    font-size: 13px;
    padding-left: 2%;
}
.img_choice{
    text-align: right;
    margin-top: 2%;
}
.img_choice img{
    width: 12%;
    margin-right: 5%;
}
*{
    margin:0;
}
.skill{
    width: 65%;
    margin: auto;
    margin-top: 1%;
    padding-bottom: 3%;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    padding-top: 3%;
    margin-bottom: 10%;
    margin-top: 2.5%;
    padding-right: 5%;
    padding-left: 5%;
    /* opacity: 0;
    transform: translateY(500px); */
    background-color: white;border-radius: 10px;
}
#dynamicCheck{
    margin-top:2%;
}
    </style>
</head>
<script>

function createNewElement() {
    // First create a DIV element.
	var txtNewInputBox = document.createElement('div');

    // Then add the content (a new input box) of the element.
	txtNewInputBox.innerHTML = "<input type='text' id='newInputBox'>";
    
    // Finally put it where it is supposed to appear.
	document.getElementById("newElementId").appendChild(txtNewInputBox);
}
</script>
<body>
<div class="skill">
    <h1>Add Your Skills Here</h1>
<div id="dynamicCheck">
   <input type="button" value="+" onclick="createNewElement();"/>
</div>

<div id="newElementId"></div>
</div>
<div class="img_choice">
        <img src="img/logo.png" alt="">
    </div>
</body>
</html>