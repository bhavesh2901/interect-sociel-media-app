<html>
    <head>
        <title>using java script form</title>
       <style>
.mobail
{
    width:250px;
}       
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
.div12{
    color:black;
  
  
    border-radius: 40px;
 
    
}
.div12 h2
{
    display:block;
    margin-bottom:4px;
  

}
.box1
{
  
    border-radius:50px;
    display: block;
    width: 570px;
    display:block;
   
   
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
  
    padding:9px;
    border-bottom: 2 solid white;
}
.f-mobail
{
    display: block;
    width:100;
}
.submit1
{
    color:white;
    background-color: #1877f2;
}
.submit1:hover
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
.gender1
{
    margin-bottom:30px
}
        </style>
    </head>
    <body>

       
    <center>
        <div class="box1">
            <div  class="div12"><h2>Signup</h2></div><br>
                <div class="m-img">
                <img class="f-logo" src="ios7-contact-outline_icon-icons.com_50287.png" ></img>
                </div><br>
                <?php    
              
                 $conn=mysqli_connect("localhost","root","","interect");
              if(isset($_POST["signup"]))
              {
               
                $response=validateSignupform($_POST);
                if($response['status'])
                {
             
                    $conn=mysqli_connect("localhost","root","","interect");
                    if(isset($_POST["signup"]))
                    {
                       
                    $id=$_POST["id"];
                    $fname=$_POST["name"];
                    $password=$_POST["password"];
                    $mobail=$_POST["mobail"];
                    $email=$_POST["email"];
                    $gender=$_POST["gender"];
                    $user_id=$_POST['user_id'];
                    $str="insert into user(name,password,mobail,email,gender,user_profile,ac_status)values('$fname','$password','$mobail','$email','$gender','$user_id','1')";
                    $result=mysqli_query($conn,$str);
                    echo $result;
                    if($result)
                    {
                        header("location:index.php");
                    
                    }
                    else
                    {
                        echo "something wrong";
                        
                    }
                    
                    }
              
              }
            else {
              
                $_SESSION['error']=$response;
                $_SESSION['formdata']=$_POST;
               
            }
           
           }      //for valid sign up form
           function validateSignupform($form_data)
           {
               $response= array();
               $response['status'] = true;
               if(isemailresgist($form_data['email']))
             {
                 $response['msg']="*email id is already register";
                 $response['status']=false;
                 $response['field']='email';
             }
             if(isusernameregist($form_data['user_id']))
             {
                 $response['msg']="*username is already register";
                 $response['status']=false;
                 $response['field']='user_id';
             }      
             if(!$form_data['user_id'])
             {
                 $response['msg']="*username is not given";
                 $response['status']=false;
                 $response['field']='user_id';
             }        
               if(!$form_data['email'])
               {
                   $response['msg']="*email is not given";
                   $response['status']=false;
                   $response['field']='email';
               }
               if(strlen($form_data['mobail'])<10)
               {
                $response['msg']="*mobail no must 10 digit";
                $response['status']=false;
                $response['field']='mobail';
               }

               if(!$form_data['mobail'])
               {
                   $response['msg']="*mobail no is not given";
                   $response['status']=false;
                   $response['field']='mobail';
                   
               }
               if(!$form_data['password'])
                {
                   $response['msg']="*password is not given";
                   $response['status']=false;
                   $response['field']='password';
               }
             if(!$form_data['name'])
             {
                 $response['msg']="*name is not given";
                 $response['status']=false;
                 $response['field']='name';
             }
            
          
           
             return $response;
           }
           // function for show error
           function showerror1($field)
           {
               if(isset($_SESSION['error']))
               {
                   $error=$_SESSION['error'];
                   if( $field==$error['field']){

                       echo $error['msg'];
                   }
               }
           }
           //for checking duplicate email
           function isemailresgist($email)
           {
            $conn=mysqli_connect("localhost","root","","interect");
               $query = "SELECT count(*) as row FROM user WHERE email ='$email'";
               $run = mysqli_query($conn, $query);
               $return_data = mysqli_fetch_assoc($run);
               return $return_data['row'];
           }
              //for checking duplicate name
              function isusernameregist($username)
              {
                $conn=mysqli_connect("localhost","root","","interect");
                  $query = "SELECT count(*) as row FROM user WHERE  user_profile = '$username'";
                  $run = mysqli_query($conn, $query);
                  $return_data = mysqli_fetch_assoc($run);
                  return $return_data['row'];
              }
        
               //function for show prevform data
               function showFormData($field){
                if(isset($_SESSION['formdata']))
                {
                    
                    $formdata=$_SESSION['formdata'];
                   return $formdata[$field];
                } }
                
             
            
?>
                <form method="POST" action="javascript-form.php" onsubmit="return validatefrom()">


<table cellpadding="0" cellspacing="10" >
    <tr><td>
<input maxlength=10 type="text" name="name"    placeholder="name" id="f-name" size="30" required><br/>
<p  class="error"><?php showerror1('name') ?></p><br>
        </td><td><input  type="text" maxlength=10 value="<?php showFormData('mobail') ?>" name="mobail"  placeholder="mobail" id="f-mobail"  class="mobail" required><br/>
<p  class="error"><?php showerror1('mobail') ?></p><br></td>
        </tr><tr><td>
<input maxlength=6 type="password" name="password" value="<?php showFormData('password') ?>"  placeholder="password"  id="f-password" size="30" class="password" required><br/>
<p  class="error"><?php showerror1('password') ?></p><br></td><td><input type="email"  name="email" placeholder="e-mail" id="f-email" size="30" class="e-mail" required><br/>
<p  class="error"><?php showerror1('email') ?></p><br></td></tr><tr><td><input type="radio"  name="gender" value="1" style=" border:2px solid black; box-shadow:none;" class="gender1" ><font color="black">male</font>
<input style="border:2px solid black; box-shadow:none;" type="radio"  name="gender" value="2" class="gender1" ><font color="black">female</font>
<input style=" box-shadow:none; border:2px solid black;" type="radio"  name="gender" value="0" class="gender1" ><font color="black">other</font></td><td><input type="text" name="user_id" placeholder="user name"  size="30" required><p  class="error"><?php showerror1('user_id') ?></p></td></tr><br>
<tr><td>
<input type="submit" name="signup" value="sign up" id="f-submit" class="submit1">

        </td><td><input style="background-color:red; color:white;" type="reset" value="cencel"></td>    </tr>
       </table></td></tr>
</form>

<div>
    </div>
            </center>
            <script src="javascripform.js"></script>
    </body>
  
    
</html>
<?php unset(  $_SESSION['error']);
      unset($_SESSION['formdata']); ?>