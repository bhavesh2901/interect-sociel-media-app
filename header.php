<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="intaract.css" rel="stylesheet">
</head>
<body style="background-color:<?php print_r($_SESSION['bhavesh']['user']['mscolor']); ?>">

<nav style="background-color:rgb(48, 47, 47); border-radius:0px;" id="nav1">
    <div class="container">
        <h2 style="padding:16px; margin-left:7px; background-color:red; color:white; border-radius:20px;font-family: sans-serif;  border:1px solid red; font-size:25px;" class="log">
             <div ><font color="blue" size="5">interact</font> messenger</div>
            
        </h2> 
        
       
      
        
        <div class="create" style="padding-top:5px; margin-right:10px; color:white; border-radius:30px; padding-left:10px;">
       
        <center style=" border-radius:20px; border-bottom:1px solid black; ">
<table  celpading='0' celspacing='0'>
      <tr><td ><img style="margin-right:15px;" id="probtn" src="images/<?php  print_r($_SESSION['bhavesh']['user']['pro_pic']);?>"  height="50" width="50"></img></td><td width="50px" > <h3 style="  height:10px;  margin:6px;"><?php print_r($_SESSION['bhavesh']['user']['name']); ?></h3></td></tr>
        </table></center>
        <img id="theambtn" style="" src="images/icon/emui-themes-fav.png" height="50" width="50"></img> 
        <div style="margin-right:30px;" class="search-bar">
       
            <a href="sarktank.php"><img src="images/icon/home.png" width="30" height="30"></img></a>
            
        </div>

            </div>
 
       
        </div>
    </div>
</nav>

</body>
</html>    
