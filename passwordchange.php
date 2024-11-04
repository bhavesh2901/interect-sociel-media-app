<html>
    <head>
        <title>using java script form</title>
        <link href="stylejava.css" rel="stylesheet">
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
.div29{
    color:black;
      
    border-radius: 40px;
}
.box29
{
    
    border-radius:50px;
    display: block;
    width: 400px;
  
    justify-content: center;
    text-align: center;
    padding:10;
    
   
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
    border-radius: 10px;
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
    background:darkblue;
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
        
        
        <center>
        <div class="box29">
            <center><div class="div29"><h2>Change Password</h2></div>
                <div class="m-img">
                
     

                <form method="POST" >
             
                <input type="text" name="mobail" placeholder="mobail or email" id="f-name" size="30" class="name"><br/>
<p  class="error"></p><br>
<input type="password" name="username_email" placeholder="old-password" id="f-name" size="30" class="name"><br/>
<p  class="error"></p><br>
<input type="password" name="password"  placeholder="new-password"  id="f-password" size="30" class="password"><br/>
<p id="passworderror" class="error"><p>

<center>
<input type="submit" name="change" value="Change" id="f-submit" class="submit"><br><br><input style="padding-top:2px; padding-bottom:2px; padding-left:13px;padding-right:13px; background-color:red;" class="submit" type="reset" value="cencel"></td> 

                        </center>
</form>

 
<div>
    </div></center>
    

  
    </body>
   
   
</html>
