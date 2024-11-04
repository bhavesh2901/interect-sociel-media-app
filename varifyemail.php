<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            
            body
            {
                background:linear-gradient(rgba(21, 5, 82, 0.4),rgba(131, 13, 111, 0.4)), url("nature_landscape_winter_sky_snow_full_moon_trees_birds_evening_10733_1920x1200.jpg");
                background-size: 100%;
                font-family:sans-serif; 
                color: white;
                
            }
            p{
                padding:2;
                text-align: left;
                margin-left:19px;
                color:yellow;
                
            }
            .div1{
                color:rgb(242, 242, 247);
                background:linear-gradient(rgba(121, 22, 146, 0.4),rgba(197, 55, 50, 0.4));    
                border-radius: 40px;
            }
            .box
            {
                background:linear-gradient(rgba(199, 48, 28, 0.4),rgba(47, 35, 160, 0.4));
                border-radius:50px;
                display: block;
                max-width: 400;
                width:380px;
                justify-content: center;
                text-align: center;
                padding:10;
                box-shadow: 3px 3px 3px 3px black;
            }
            .f-logo
            {
                background:linear-gradient(rgba(163, 23, 121, 0.4),rgba(123, 106, 218, 0.4));    
                border-radius: 50px;
                box-shadow: 4px 4px 4px 4px black;
            }
            
            input
            {
                margin-top:5;
                border-radius: 30px;
                box-shadow: 3px 3px 3px 3px black;
                padding:9px;
                border-bottom: 2 solid white;
                background-color:#dadbe5;
            }
            .f-mobail
            {
                display: block;
                width:100;
            }
            .submit:hover
            {
                color: white;
                background:linear-gradient(rgba(107, 12, 110, 0.4),rgba(25, 167, 37, 0.4));
            }
            .cencel:hover
            {
                color: white;
                background:linear-gradient(rgba(107, 12, 110, 0.4),rgba(25, 167, 37, 0.4));
            }
            
            .facebook:hover
            {
                color: white;
                background:linear-gradient(rgba(206, 13, 6, 0.4),rgba(171, 6, 221, 0.4));
            }
            .twitter:hover
            {
                color: white;
                background:linear-gradient(rgba(206, 13, 6, 0.4),rgba(171, 6, 221, 0.4)); 
            }
            .instagram:hover
            {
                color: white;
                background:linear-gradient(rgba(206, 13, 6, 0.4),rgba(171, 6, 221, 0.4));
            }
            a{
                text-decoration: none;
                color:white;
            }
            </style>
</head>
<body>
  
<div  class="div1"><center><h1>interect</center></h1></div>
        <center>
        <div class="box">
            <center><div class="div1"><h2>Varify Your Email id</h2></div>
                <div class="m-img">
                <center><img class="f-logo" src="ios7-contact-outline_icon-icons.com_50287.png" ></img></center>
                </div></center><br>
<form method="POST" >
             
            please verify you email id<br><br> 
             <input type="text" placeholder="email" name="username_email"  id="f-name" size="30" class="name"><br/>
         
             
            <br>
             
             
             
             <br>
   
             <input type="submit" name="varify" value="verify email" id="f-cencel" class="cencel">
             <br>

<br><br></form>
             <?php session_start(); $usern=$_SESSION['bhavesh']['user']['id'];
              if(isset($_POST['varify']))
              {
                $con=mysqli_connect("localhost","root","","interect");
                $email=$_POST['username_email'];
                $str="SELECT email from user where id=$usern";
                $r=mysqli_query($con,$str);
                if($r)
                {
                    $con1=mysqli_connect("localhost","root","","interect"); 
                    $rr=1;
                    $usern1=$_SESSION['bhavesh']['user']['id'];
                    $str2="INSERT into user(ac_status) values($rr) where id=$usern1";
                    $r2=mysqli_query($con1,$str2);
                    if($r2)
                    {
                        echo "sucessfully";
                    }
                    else
                    {
                        echo "not sucess";
                    }
                    
                }
                else{
                    echo "somthing wrong";
                }
              }
            
             ?>
             <div>
                 </div></center>
                
                
                 </script>
                 </body>
</html>