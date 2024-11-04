<!DOCTYPE html><html lang="en"><head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"><title>Untitled</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="/assets/css/styles.min.css?h=1642bfa9a084bf0763198a01fba07b42">
<style>
body
{
    background-color:# 303134;
}
.login-card{max-width:350px;padding:40px;background-color:#f7f7f7;margin:50px auto 25px;border-radius:2px;box-shadow:0 2px 2px rgba(0,0,0,.3)}.login-card .profile-img-card{width:96px;height:96px;margin:0 auto 10px;display:block;border-radius:50%}.login-card .profile-name-card{font-size:16px;font-weight:700;text-align:center;margin:10px 0 0;min-height:1em}.login-card .reauth-email{display:block;color:#404040;line-height:2;margin-bottom:10px;font-size:14px;text-align:center;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;box-sizing:border-box}.login-card .form-signin button,.login-card .form-signin input[type=email],.login-card .form-signin input[type=password],.login-card .form-signin input[type=text]{height:44px;font-size:16px;width:100%;display:block;margin-bottom:10px;z-index:1;position:relative;box-sizing:border-box}.login-card label{color:#000}.login-card .form-signin .form-control:focus{border-color:#6891a2;outline:0;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px #6891a2;box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px #6891a2}.login-card .btn.btn-signin{font-weight:700;height:36px;line-height:36px;font-size:14px;background:#6891a2;border-radius:3px;border:none;transition:218ms;padding:0}.login-card .btn.btn-signin:active,.login-card .btn.btn-signin:focus,.login-card .btn.btn-signin:hover{background:#0c6121}.login-card .forgot-password{color:#6891a2}.login-card .forgot-password:active,.login-card .forgot-password:focus,.login-card .forgot-password:hover{color:#0c6121}
</style></head>
<body><!-- Start: Google Style Login -->
              


<div class="login-card">

<img class="profile-img-card" src="avatar_2x.png">
<p class="profile-name-card"> </p><form method="post" class="form-signin">

<span class="reauth-email"> 
</span>
<?php session_start();
    if(isset($_POST["login"]))
    {
       
        
    
                     
                     $response=validateloginform($_POST);
                     if($response['status'])
                     {
                           
                        $_SESSION['autho']=true;
                        $_SESSION['bhavesh'] = $response['user']; 
                        
                            $conn=mysql_connect("localhost","root","") or die ("database is not connect");
                            $db= mysql_select_db("interect",$conn);
                            $uname=$_POST["username_email"];
                            $pwd=$_POST["password"];
                            $str ="SELECT *from user where (user_profile='$uname' or email='$uname') and password='$pwd'";
                            $result=mysql_query($str);
                            $ans=mysql_num_rows($result);
                            if($ans==0)
                                {
                                echo"<p>either username and password is wrong</p>";
                                }
                            else
                                { 
                                   if(isset($_SESSION['autho']))
                                   {
                                   $user=getuser($_SESSION['userdata']['user']['id']);
                                   }
                                    if($_SESSION['autho'] && $_SESSION['bhavesh']['user']['ac_status']==1)
                                    {
                                        $user=getuser($_SESSION['userdata']['user']['id']);
                                        $_SESSION['bhavesh'] = $response['user']; 
                                       header('location:sarktank.php');
                                        
                                    }
                                    elseif($_SESSION['autho'] && $_SESSION['bhavesh']['user']['ac_status']==0) {
                                        $user=getuser($_SESSION['userdata']['user']['id']);
                                        $_SESSION['bhavesh'] = $response['user']; 
                                        header('location:varifyemail.php');
                                       

                                    }
                                    elseif($_SESSION['autho'] && $_SESSION['bhavesh']['user']['ac_status']==2) {
                                        header('location:blocked.php');
                                    }
                           
                                 
                                echo "<script>alert('password is  correct')<script>";
                               
                                }
                           

                        }

                        else {
                        
                            $_SESSION['error']=$response;
                            $_SESSION['formdata']=$_POST;
                        
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
     $str ="SELECT * from user WHERE (user_profile='$uname' or email='$uname') and password='$pwd'";
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
<input class="form-control" type="text" id="inputEmail" required="" placeholder="Email address" name="username_email" autofocus="">
<br/>
<p  class="error"><?php showerror('username_email') ?></p><br>
<input class="form-control" type="password" name="password" id="inputPassword" required="" placeholder="Password">
<br/>
<p id="passworderror" class="error"><?php showerror('password') ?></p><br>
<div class="checkbox">
<div class="form-check">
<input class="form-check-input" type="checkbox" id="formCheck-2">
<label class="form-check-label" for="formCheck-2">
Remember me</label></div></div>
<input class="btn btn-primary btn-lg d-block btn-signin w-100" name="login" type="submit" value="sign in">
</form><a class="forgot-password" href="#">Forgot your password?</a>
</div><!-- End: Google Style Login -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>