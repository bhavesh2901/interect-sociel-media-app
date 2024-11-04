<?php session_start(); ?>
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
     function getuser($user_id)
     {
         $conn=mysql_connect("localhost","root","");
         $db= mysql_select_db("interect",$conn);
       
         $str ="SELECT * from user WHERE id=$user_id";
         $result=mysql_query($str);
         return mysql_fetch_assoc($result);
        
         
     }
    if(isset($_SESSION['bhavesh']['user']))
    {
        $user=getuser($_SESSION['userdata']['user']['id']);
        header('location:startpage.php');
    }
    elseif(empty($_SESSION['bhavesh']['user']))
    {
         header('location:login.php');
    }
    ?>
    
</body>
</html>