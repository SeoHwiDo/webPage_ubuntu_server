<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    require 'login.php';
    if(mysqli_num_rows($result)==1) {  
?>
<script type="text/javascript"> 
    function infoPrint(){ 
        document.getElementById("userID").innerHTML="<?=$row['userID']?>"; 
        document.getElementById("age").innerHTML="<?=$row['age']?>"; 
        document.getElementById("phone").innerHTML="<?=$row['phone']?>"; 
        document.getElementById("permit").innerHTML="<?=$row['permit']?>"; 
    } 
</script> 
<div id='info'>
    <div id='userID'></div>
    <div id='age'></div>
    <div id='phone'></div>
    <div id='permit'></div>
</div>
<?php 
    }
?>
</body>
</html>