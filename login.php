<!--
NAME OF PROJECT: INTERACT SOSCIL MIDEA SITE
DVELOPER NAME  : CHAVDA BHAVESH
YEAR           : 2023
COLLAGE        : S C GANDHI BCA COLLAGE
PAGE           : LOGIN PAGE 
-->
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
@media screen and (max-width:1200px) {
.infor123
{
    display:none;
    
}
.box{
margin-top:50%;
margin-bottom:50%;
margin-left:66%;
margin-right:50%;

}
}

@media screen and(max-width:992px){
    .infor123
{
    display:none;
    
}

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
                <div class="m-img">
                <img class="f-logo" src="ios7-contact-outline_icon-icons.com_50287.png" ></img>
                </div><br>
                
                <?php session_start();
    if(isset($_POST["login"]))
    {
       
        
    
                     
                     $response=validateloginform($_POST);
                     if($response['status'])
                     {
                           
                        $_SESSION['autho']=true;
                        $_SESSION['bhavesh'] = $response['user']; 
                        
                        $con=mysqli_connect("localhost","root","","interect") or die ("database is not connect");
                            $uname=$_POST["username_email"];
                            $pwd=$_POST["password"];
                            $str ="SELECT *from user where (user_profile='$uname' or email='$uname' or mobail='$uname') and password='$pwd'";
                            $run= mysqli_query($con,$str);
                            $fatch_run=mysqli_fetch_assoc($run);
                            print_r($fatch_run['email']);
                         
                            if(!$fatch_run)
                                {
                                echo "<br>either username or password wrong ! <br>";
                                }
                            else
                                { 
                                    $str3="update user set ac_status='1' where (user_profile='$uname' or email='$uname' or mobail='$uname') and password='$pwd' ";
                                    mysql_query($str3);
                                   if(isset($_SESSION['autho']))
                                   {
                                   $user=getuser($_SESSION['userdata']['user']['id']);
                                   header('location:startpage.php');
                                   }
                              
                                 
                                echo "<script>alert('password is  correct')<script>";
                               
                                }
                           

                        }

                        else {
                        
                            $_SESSION['error']=$response;
                            $_SESSION['formdata']=$_POST;
                        
                        }

}   


if(isset($_POST["change"]))
{
 $conn=mysql_connect("localhost","root","") or die ("database is not connect");
                  $db= mysql_select_db("interect",$conn);
             $uname=$_POST["username_email"];
             $mobail=$_POST["mobail"];
                   $str ="SELECT *from user where  password='$uname' and mobail='$mobail' or email='$mobail'";
                   $result=mysql_query($str);
                   $ans=mysql_num_rows($result);
                    if($ans==0)
                        {
                        echo"either username and password is wrong";
                        }
                    else
                        { 
                                            $conn=mysql_connect("localhost","root","") or die ("database is not connect");
                                $db= mysql_select_db("interect",$conn);
                                $uname=$_POST["username_email"];
                                $pwd=$_POST["password"];
                                $mobail=$_POST["mobail"];
                                $str1 ="UPDATE user SET password='$pwd' WHERE password='$uname' and mobail='$mobail' or email='$mobail' ";
                                $result=mysql_query($str1);
                               
                                if($result)
                                {
                                    echo "passwoed is changed success";
                                    
                              
                                }
                                else
                                {
                                    echo"some thing wrong"; 
                                }
                        }
                    }


                        // for validate login form
                            function validateloginform($form_data)
                            {
                                $response= array();
                                $response['status'] = true;
                                $blank=false;
                             
                                if(!$form_data['password'])
                                {
                                    $response['msg']="*password is not given";
                                    $response['status']=false;
                                    $response['field']='password';
                                    $blank=true;
                                }
                                if(!$form_data['username_email'])
                                {
                                    $response['msg']="*username/email is not given";
                                    $response['status']=false;
                                    $response['field']='username_email';
                                    $blank=true;
                                }
                                if(checkuser($form_data))
                                {
                                    $response['user']=checkuser($form_data);
                                }
                                
                            

                             return $response;
                            }
                             //for chaking the user
 function checkuser($login_data)
 {
     $conn=mysql_connect("localhost","root","");
     $db= mysql_select_db("interect",$conn);
     $uname= $login_data['username_email'];
     $pwd= $login_data['password'];
     $str ="SELECT * from user WHERE (user_profile='$uname' or email='$uname' or mobail='$uname') and password='$pwd'";
     $result=mysql_query($str);
     $data['user'] = mysql_fetch_assoc($result);
     if(count($data['user'])>0)
     {
         $data['status']= true;
     }else {
         $data['status']= false;

     }
     return $data;
 }
 //for getting userdata by id
 function getuser($user_id)
 {
     $conn=mysql_connect("localhost","root","");
     $db= mysql_select_db("interect",$conn);
   
     $str ="SELECT * from user WHERE id=$user_id";
     $result=mysql_query($str);
     return mysql_fetch_assoc($result);
    
     
 }

                           
                            // for showerror
                            function showerror($field)
                            {
                                if(isset($_SESSION['error']))
                                {
                                    $error=$_SESSION['error'];
                                    if( $field==$error['field']){
                 
                                        echo $error['msg'];
                                    }
                                }
                            }
?>

                <form method="POST" >
             

<input type="text" name="username_email" placeholder="userame or email or mobail" id="f-name" size="30" class="name" required><br/>
<p  class="error"><?php showerror('username_email') ?></p><br>
<input type="password" name="password"  placeholder="password"  id="f-password" size="30" class="password" required><br/>
<p id="passworderror" class="error"><?php showerror('password') ?></p><br>


<input type="submit" name="login" value="login" id="f-submit" class="submit"><br><br>

</form>


<div class="form-text1"><a id="passbtn" href="#">change password?</a></div>
<div class="form-text"><a id="sigbtn" href="#">Create an account</a></div>
                        </div>
    </div>
    
                        </td>
                        </tr></table>
                        
                        <div id="signup">
                            <div id="signup2"> 
                                <table ><tr><td><button id="cencelsig" style="margin-left:4px;background-color:red;color:white;border-radius:30px;">X</button></td></tr><tr><td>
                                <?php require('javascript-form.php'); ?></td>
                        </tr></table>
                        </div>
                        </div>
                        <div id="changepass1">
                            <div id="changepass2"> 
                                <table ><tr><td><button id="cencelpass" style="margin-left:4px;background-color:red;color:white;border-radius:30px;">X</button></td></tr><tr><td>
                                <?php require('passwordchange.php'); ?></td>
                        </tr></table>
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
//************************************************* */
const btnpass = document.querySelector('#passbtn');
const passch =document.querySelector('#changepass1');
const cencelpass =document.querySelector('#cencelpass');
// start modal
const openpass = () => {
    passch.style.display = 'grid';
   
}

const cencelpass1 = (f) =>
{
    f.target.classList.contains('#changepass1')
        passch.style.display = 'none';
    
}

// close modal

btnpass.addEventListener('click', openpass);
cencelpass.addEventListener('click', cencelpass1 );
    </script>
    </body>
   
   
</html>
<?php unset(  $_SESSION['error']); ?>