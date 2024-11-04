<?php session_start();?>
<html>
    <head>
        <title>using java script form</title>
        <link href="stylejava.css" rel="stylesheet">
        <style>
            
body
{ 
    background:linear-gradient(rgba(21, 5, 82, 0.4),rgba(131, 13, 111, 0.4)), url("images/wall.gif");
   
    background-size: 100%;
    font-family:sans-serif; 
    color: white;
    
}
.form-text{
    margin-top: 25px;
    margin-bottom:20px;
    font-size: 14px;
    text-align: center;
    padding:6px;
    display:block;
    border-radius:8px;
    width:350px;
    background-color: #03ad06;
   
}
.form-text a{
    color: rgb(40, 40, 40);
    font-weight: 700;
    text-decoration: none;
    color:white;
}
.form-text1
{
    margin-top: 25px;
    margin-bottom:20px;
    font-size: 14px;
    text-align: center;
    padding:6px;
    border-radius:8px;
     background-color: rgb(152, 51, 165);
}
.form-text1 a
{
    color: rgb(40, 40, 40);
    font-weight: 700;
    text-decoration: none;
    color:white;
}
#signup
{
    background: rgba(51, 50, 50, 0.5);
    width: 100%;
    height: 100%;
    position: fixed;
    top:0;
    left:0;
    z-index: 100;
    text-align: center;
    display:none;
    place-content: center;
   
}
#signup2
{
 
    width: 590px; 
    height: 560px;
    border-radius:3%;
    background:white;
   
    box-shadow: 3px 3px 3px 3px black;
   
}
#changepass1
{
    background: rgba(51, 50, 50, 0.5);
    width: 100%;
    height: 100%;
    position: fixed;
    top:0;
    left:0;
    z-index: 100;
    text-align: center;
    display:none;
    place-content: center;
      
}
#changepass2
{
    width: 420px; 
    height: 510px;
    border-radius:3%;
    background:white;
    box-shadow: 3px 3px 3px 3px black;
   
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
    width: 359px;
    margin-top:80px;
    margin-left:190px;
    justify-content: center;
    text-align: center;
    padding:10;
    box-shadow: 3px 3px 3px 3px black;
    border:2px solid black;
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
select{
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
.submit 
{
    padding-left:60px;
    padding-right:60px;
    padding-top:3px;
    padding-bottom:3px;
    border-radius:10px;
   color:white;
    text-align:center;
    background-color: #1877f2;

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
.facebook{
    display: flex;
    width: 1000px;
    margin: 0 auto;
    align-items: center;
    height: 100vh;
}
.facebook-content{
    width: 60%;
    margin-left:170px;
}
.logo{
    font-size: 50px;
    color: aqua;
}
a{
    text-decoration: none;
    color:white;
}

            </style>
    </head>
    <body style="background-image:url('images/i10.gif');background-size: cover; background-position:center;">
        <table><tr><td class="infor123">
        <div class="facebook-content">
            <h1 class="logo">interact</h1>
            <h3 >interact helps you connect and share with the people in your life.</h3>
        </div>
        <div>
        </td><td>
        
       
        <div class="box">
          <br><br>
                <div class="m-img"><h2>Admin</h2><br>
                <img class="f-logo" src="ios7-contact-outline_icon-icons.com_50287.png" ></img>
                </div><br>
                
                

                <form method="POST" >
             <?php 
        
                 
                 function getadmin1($user_id)
                 {
                     $conn=mysql_connect("localhost","root","");
                     $db= mysql_select_db("interect",$conn);
                   
                     $str ="SELECT * from admin WHERE name=$user_id or email=$user_id or monumber=$user_id";
                     $result=mysql_query($str);
                     return mysql_fetch_all($result,true);
                    
                     
                 }
 

             if(isset($_POST["login"]))
             {
              
            
             
            
               
                   if(isset($_POST["login"]))
                   {
                      
                    $conn=mysql_connect("localhost","root","") or die ("database is not connect");
                            $db= mysql_select_db("interect",$conn);
                            $uname=$_POST["username_email"];
                            $pwd=$_POST["password"];
                            $str ="SELECT *from admin where  email='$uname'  and password='$pwd'";
                            $result=mysql_query($str);
                            $run=mysql_fetch_assoc($result);
                           
                           
                            if($run){
                                header("location:mo.php");
                       
                                $_SESSION['admin']=$run;
                              
                   
                   }
                   else
                   {
                       
                    echo "something wrong"; 
                       
                   }
           
             
             }
        
          
          } 
             ?>

<input type="text" name="username_email" placeholder="email " id="f-name" size="30" class="name"><br/>
<p  class="error"></p><br>
<input type="password" name="password"  placeholder="password"  id="f-password" size="30" class="password"><br/>
<p id="passworderror" class="error"></p><br>


<input type="submit" name="login" value="login" id="f-submit" class="submit"><br><br>

</form>

<div class="form-text"><a id="sigbtn" href="#">Create an account</a></div>
                        </div>
    </div>
    
                        </td>
                        </tr></table>
                        
                        <div id="signup">
                            <div id="signup2"> <center>
                               <?php               
                 $conn=mysqli_connect("localhost","root","","interect");
              if(isset($_POST["signup"]))
              {
               
             
              
             
                    $conn=mysqli_connect("localhost","root","","interect");
                    if(isset($_POST["signup"]))
                    {
                       
                   
                    $fname=$_POST["name"];
                    $password=$_POST["password"];
                    $mobail=$_POST["mobail"];
                    $email=$_POST["email"];
                    $gender=$_POST["gender"];
                    $city=$_POST['city'];
                    $str="insert into admin(name,password,monumber,email,gender,city)values('$fname','$password','$mobail','$email','$gender','$city')";
                    $result=mysqli_query($conn,$str);
                    echo $result;
                    if($result)
                    {
                        header("location:adminlogin.php");
                    
                    }
                    else
                    {
                        echo "something wrong";
                        
                    }
            
              
              }
         
           
           } 
                                ?>
                                <table ><tr><td><button id="cencelsig" style="margin-left:4px;background-color:red;color:white;border-radius:30px;">X</button></td></tr><tr><td>
                                <form method="POST" >


<table  cellpadding="0" cellspacing="10" >
    <tr><td>
<input type="text" name="name"    placeholder="name" id="f-name" size="30" ><br/>
<p  class="error"></p><br>
        </td><td><input type="number" name="mobail"  placeholder="mobail" id="f-mobail"  class="mobail"><br/>
<p  class="error"></p><br></td>
        </tr><tr><td>
<input type="password" name="password"   placeholder="password"  id="f-password" size="30" class="password"><br/>
<p  class="error"></p><br></td><td><input type="email"  name="email" placeholder="e-mail" id="f-email" size="30" class="e-mail"><br/>
<p  class="error"></p><br></td></tr><tr><td><select name="gender"><option>male</option><option>female</option></select>
</td><td><input type="text" name="city" placeholder="city"  size="30"><p  class="error"></p></td></tr><br>
<tr><td>
<input type="submit" name="signup" value="sign up" id="f-submit" class="submit1">

        </td>    </tr>
       </table></td></tr>
</form>
                        </tr></table></center>
                        </div>
                        </div>
                        <script>
                              
    // theam java script
const btn = document.querySelector('#sigbtn');
const signup =document.querySelector('#signup');
const cencelsig =document.querySelector('#cencelsig');
// start modal
const openpost = () => {
    signup.style.display = 'grid';
   
}

const cencel = (f) =>
{
    f.target.classList.contains('#signup')
        signup.style.display = 'none';
    
}

// close modal

btn.addEventListener('click', openpost);
cencelsig.addEventListener('click', cencel );
                        </script>          


    </body>
   
   
</html>