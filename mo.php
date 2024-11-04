<!--
NAME OF PROJECT: INTERACT SOSCIL MIDEA SITE
DVELOPER NAME  : CHAVDA BHAVESH
YEAR           : 2023
COLLAGE        : S C GANDHI BCA COLLAGE
PAGE           : ADMIN PANEL PAGE 
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <style>
        body {
  font-family: 'Open Sans', sans-serif;
  minwidth: 100%;
  height: 100%;
  margin: 0 auto;
  background: white;
}

.admin-sidebar {
  background: #101010;
  width: 260px;
  height: 100%;
  position: fixed;
  z-index: -1;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
  z-index: 1000;
}

.admin-header {
  background: #101010;
  padding: 15px 16px;
}

.header-greet {
  display: inline-block;
  float: right;
}

h3 {
  margin: 0;
  display: inline-block;
  color: ;
}

.header-text {
  color: #999;
}

.logout-btn {
  padding: 18px 16px;
  color: #999;
  background: #4444;
  box-shadow: 0px 0px 4px rgba(0,0,0) inset;
}

li {
  list-style-type: none;
  padding: 15px;
  border-bottom: 0.5px solid black;
}

li:hover {
  list-style-type: none;
  padding: 15px;
  background: #151515;
  border-bottom: 0.5px solid black;
  box-shadow: 0px 0px 4px rgba(0,0,0) inset;
}

a {
  text-decoration: none;
  color: #999;
}

.search-input {
  padding: 8px;
  border: 1px solid black;
  border-radius: 4px 0px 0px 4px;
  background: #222;
  color: #999;
  outline: none;
  box-shadow: 0px 0px 3px rgba(0,0,0) inset;
}

#search-btn-1 {
  position: absolute;
  padding: 7.5px;
  border: 1px solid black;
  border-radius: 0px 4px 4px 0px;
  background: #222;
  color: #999;
  outline: none;
  box-shadow: 0px 0px 3px rgba(0,0,0) inset;
}

.fa-angle-down {
  color: #999;
  float: right;
}

.second-nav-ul {
 display: none;
}

.nav-items {
  padding: 0;
  margin: 0;
  float: left;
}

.nav-items:hover {
  padding: 0;
  margin: 0;
  width: auto;
}

.all-nav {
  height: 100px;
}

.center-content {
  width: auto;
  padding-left: 260px;
  z-index: -1000;
}














/*DASH BOARD CONTENT*/



body {
  minwidth: 100%;
  height: 100%;
  background: ;
}

.all-border {
  border: 1px solid transparent;
  width: auto;
  height: 800px;
}

.shows-location {
  border: 1px solid transparent;
  width: auto;
  height: 50px;
  margin: 1em;
  border-radius: 8px;
  background: rgba(0,0,0,0.9);
  color: white;
}
select{
  margin-top:5;
    border-radius: 30px;
    box-shadow: 0px 1px 1px 1px gray;
    padding:9px;
    border-bottom: 2 solid white;
    background-color:#dadbe5;
}
input
{
    margin-top:5;
    border-radius: 30px;
    box-shadow: 0px 1px 1px 1px gray;
    padding:9px;
    border-bottom: 2 solid white;
    background-color:#dadbe5;
}
.signup2
{
 
 width: 590px; 
 height: 560px;
 border-radius:3%;
 background:white;

 box-shadow: 3px 3px 3px 3px black;

}

.location {
  font-size: 12px;
  display: inline-block;
  margin: 0;
  vertical-align: middle;
  padding: 20px 30px;
}

.location-text {
    display: inline-block;
  margin: 0;
}


.site-info {
  border: 1px solid trans;
  margin: 1em;
  height: auto;
  display: flex;
}

body {
  font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
 
}

.all-quick-info {
  border: 1px solid transparent;
  width: 23%;
  height: auto;
  border-radius: 4px;
  color: #fff;
  background-color: #337ab7;
  border-color: #337ab7;
  margin: 0.5em;
}

.info-icon {
  font-size: 70px;
  padding: 10px 20px;
}

.info-numbers {
  font-size: 40px;
}

.text-right {
  text-align: right;
  margin-top: -90px;
  padding: 10px;
}

.info-box-footer {
 padding: 10px 15px;
    background-color: #f5f5f5;
    border-top: 1px solid #ddd;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
}

.user-href {
  color: #337ab7;
  display: inline-block;
}

.pull-right {
  display: none;
}

.flex-container {
  border: 1px solid trans;
  padding: 10px;
  display: flex;
}


h1{
  font-size: 30px;
  color: #999;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(0,0,0);
  border-radius: 8px 8px 0px 0px;
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(0,0,0,.1);
  border-radius: 0px 0px 8px 8px;
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #777;
  text-transform: uppercase;
  border-bottom: 0.5px solid rgba(0,0,0,0.4);
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #222;
  border-bottom: solid 1px rgba(0,0,0,0.1);
}


section{
  margin: 50px;
}


::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}

.user-info {
  border: 1px solid trans;
  margin: 1em;
  display: flex;
  margin-top: -80px;
}

.post-updates {
  border: 1px solid trans;
  margin-top: ;
  width: 100000%;
  display: flex;
}


.update-box {
  border: 1px solid #ddd;
  height: auto;
  width: 50%;
  margin: 3em ;
  box-shadow: 0px 1px 1px rgba(0,0,0,.05);
  border-radius: 4px;
  float: ;
}

.update-box-2 {
  border: 1px solid #ddd;
  height: auto;
  width: 50%;
  margin: 3em ;
  box-shadow: 0px 1px 1px rgba(0,0,0,.05);
  border-radius: 4px;
  overflow: scroll;
  overflow-x: hidden;
  margin-left: 10px;
}

.update-header {
  padding: 10px 16px;
  font-size: 12px;
  background: #f2f2f2;
  height: 15px;
  border-bottom: 1px solid #ddd;
}

.update-text {
  margin: 0;
}

.input-values {
  margin: 1em;
}

.inputs {
  margin: 1em;
  display: block;
  width: 90%;
  padding: 5px;
  border-radius: 4px;
  border: none;
  outline: none;
  background: #ddd;
}

textarea {
  display: block;
  min-width: 90%;
  max-width: 90%;
}


/*DASHBOARD CONTENT ENDING*/

body {
  minwidth: 100%;
  height: 100%;
  background: #f2f2f2;
}

.all-border {
  border: 1px solid trans;
  width: auto;
  height: 800px;
}

.shows-location {
  border: 1px solid transparent;
  width: auto;
  height: 50px;
  margin: 1em;
  border-radius: 8px;
  background: rgba(0, 0, 0, 0.9);
  color: white;
}

.location {
  font-size: 12px;
  display: inline-block;
  margin: 0;
  vertical-align: middle;
  padding: 20px 30px;
}

.location-text {
  display: inline-block;
  margin: 0;
}

.site-info {
  margin: 1em;
  height: AUTO;
  display: flex;
}

body {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}

.all-quick-info {
  border: 1px solid;
  width: 50%;
  height: auto;
  border-radius: 2px;
  color: #fff;
  background-color: #337ab7;
  border-color: #337ab7;
  margin: 0.5em;
}

.info-icon {
  font-size: 70px;
  padding: 10px 20px;
}

.info-numbers {
  font-size: 40px;
}

.text-right {
  text-align: right;
  margin-top: -90px;
  padding: 10px;
}

.info-box-footer {
  padding: 10px 15px;
  background-color: #f5f5f5;
  border-top: 1px solid #ddd;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}

.user-href {
  color: #337ab7;
  display: inline-block;
}

.pull-right {
  display: none;
}

.flex-container {
  display: flex;
}

h1 {
  font-size: 30px;
  color: #999;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}

/*NEW CONTENT HOLDER*/
.new-content-holder {
  margin: 1em;
  height: min-content;
  display: flex;
}

.notifications {
  border: 1px solid #e0e0e0;
  width: max-content;
  width: 35%;
  background: #ddd;
  height: min-content;
  border-radius: 2px;
  box-shadow: 0px 1px 5px #d9d9d9;
  margin-left: 1em;
}

h2,
.action-holder {
  display: inline-block;
  font-size: 15px;
  background: #ddd;
  margin: 0;
  padding: 5px;
  color: #767676;
}

.action-holder {
  color: ;
  font-size: 15px;
  float: right;
}

.notify-box {
  background: #fff;
  height: ;
  padding: 5px;
  border-radius: 2px;
  overflow: scroll;
  overflow-x: hidden;
}

.sender {
  margin: 1em;
  padding: 2px;
  transition: 0.1s;
}

.sender:hover {
  margin: 1em;
  padding: 2px;
  background: #f3f3f3;
  border-radius: 3px;
  box-shadow: 0px 1px 2px grey;
}

a {
  color: grey;
  text-decoration: none;
  font-size: 12px;
}

img {
  border: 2px solid grey;
  border-radius: 8pc;
}

.mail-icon {
  float: right;
  color: grey;
  font-size: 30px;
}

.fluff-grey {
  background: #f1f1f1;
}

.fluff-blue {
  background: #2f61d3;
}

.notify-box > span {
  color: grey;
  font-size: 12px;
}

@media only screen and (max-width: 900px) {
  .new-content-holder {
    display: flex;
    flex-wrap: wrap;
  }
  .notifications {
    width: 100%;
  }

  .all-quick-info {
    width: 100%;
  }
  .site-info {
    flex-wrap: wrap;
  }
}

/*SCROLLBAR CSS*/
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: trans;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #888;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555;
}

/*NEWEST MEMBERS*/

.newest-members {
  margin: 1em;
}

#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td,
#customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even) {
  background-color: #f2f2f2;
}

#customers tr:hover {
  background-color: #ddd;
}

#customers th {
  padding-top: 5px;
  padding-bottom: 5px;
  text-align: left;
  background-color: #e0e0e0;
  color: grey;
  font-size: 13px;
}

td {
  font-size: 12px;
  color: grey;
}

.actions-btns {
  padding: 5px;
  background: #5cb85c;
  color: white;
  border-radius: 2px;
}

.actions-btns2 {
  background: #ff5256;
  padding: 5px;
  color: white;
  border-radius: 2px;
}

.view-all-members {
  padding: 5px;
  border: 1px solid #f2f2f2;
  margin: 0.5em;
  border-radius: 2px;
  text-align: center;
  background: #f1f1f1;
}

.view-all-members:hover {
  padding: 5px;
  border: 1px solid #f2f2f2;
  margin: 0.5em;
  border-radius: 2px;
  text-align: center;
  background: #f1f1f1;
  box-shadow: 0px 1px 5px #d7d7d7;
}

.view-all-btn1 {
  background: #f2f2f2;
  padding: 5px;
}

.message-server {
  margin: 1em;
  border: 1px solid #dfdf62;
  padding: 8px;
  border-radius: 2px;
  background: #e7d64a;
  box-shadow: 0px 1px 2px grey inset;
  transition: 0.1s;
}

.warn-message {
  color: white;
  font-size: 18px;
}

.right {
  float: right;
}

        </style>
</head>
<body>
  <?php   
               session_start(); $admin2=$_SESSION['admin'];    
               function getpostmsg2021($my)
               {
                  $con=mysqli_connect("localhost","root","","interect");
               
                  $query="SELECT *from postmsg where post_id=$my";
                  $r=mysqli_query($con,$query);
                  return mysqli_fetch_all($r,true);
               }
               if(isset($_POST['messanger'])){       $_SESSION['commentuser']=$_POST['comment'];
                                          
                $_SESSION['bhavesh']['user'];
                       header('location:messanger.php');}
               function getfollowing($user_id)
               {
                  $con=mysqli_connect("localhost","root","","interect");
                 
                  $query= "SELECT * FROM  follow_list WHERE follower_id=$user_id";
                  $run=mysqli_query($con,$query);
                  return mysqli_fetch_all($run,true);
               }
             function getfollower($user_id)
               {
                   
                  $con=mysqli_connect("localhost","root","","interect");
                 
                  $query= "SELECT * FROM  follow_list WHERE userid=$user_id";
                  $run=mysqli_query($con,$query);
                  return mysqli_fetch_all($run,true);
               }   
               $conn=mysqli_connect("localhost","root","","interect");
            if(isset($_POST["signup"]))
            {
             
           
            
           
                  $conn=mysqli_connect("localhost","root","","interect");
                  if(isset($_POST["signup1"]))
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
                              
    
    if(isset($_POST['editpro1']))
    {
      $con=mysqli_connect("localhost","root","","interect");
    $file_name=$_FILES['pro-pic']['name'];
    $folder="images/".$file_name;
    move_uploaded_file($_FILES['pro-pic']['tmp_name'],$folder);
    $profile_pic="pro_pic='$file_name'";
    $str="UPDATE admin SET  $profile_pic  where id=".$admin2['id'];
    $re=mysqli_query($con,$str);
    $_SESSION['admin']['pro_pic']=$file_name;
    if($re)
    {
     header('location:mo.php');
        echo "<script>alert('update pic sucessfully')<script>";

    }
    else {
    echo "<script>alert('profile pic is update')<script>";
    }
    }
    if(isset($_POST['edit']))
    {
     
     $con=mysqli_connect("localhost","root","","interect");
     $currentuser=$_SESSION['admin']['id'];
     $name=$_POST['name'];
     $city=$_POST['city'];
     $mobail=$_POST['mobail'];
     $password=$_POST['password'];
     $gender=$_POST{'gender'};
     $email=$_POST['email'];
     $str="update admin set name='$name',password='$password',city='$city',monumber='$mobail',gender='$gender',email='$email' where id=$currentuser";
       $result=mysqli_query($con,$str);
       $_SESSION['admin']['name']=$name;$_SESSION['admin']['monumber']=$mobail; $_SESSION['admin']['gender']=$gender;
       $_SESSION['admin']['city']=$city;$_SESSION['admin']['password']=$password;$_SESSION['admin']['email']=$email;
       if($result)
       {
         header('location:mo.php');
       }
       else
       {
         echo "some thing wrong";
       }
    
    }

   function getuser2($id)
    {
      
        $con=mysqli_connect("localhost","root","","interect");
       
        $query= "SELECT  *FROM  user where id=$id ";
        $run=mysqli_query($con,$query);
        return mysqli_fetch_assoc($run);
    }
    function getdinaid($id)
    {
      $con=mysqli_connect("localhost","root","","interect");
       
      $query= "SELECT  *FROM  userdenaid where id=$id  ";
      $run=mysqli_query($con,$query);
      return mysqli_fetch_assoc($run);

    }
    function deluser()
    {
      
        $con=mysqli_connect("localhost","root","","interect");
       
        $query= "SELECT  *FROM  userdenaid  ";
        $run=mysqli_query($con,$query);
        return mysqli_fetch_all($run,true);
    }
    $duser=deluser();
    function getuser1()
    {
        $con=mysqli_connect("localhost","root","","interect");
       
        $query= "SELECT * FROM  user ";
        $run=mysqli_query($con,$query);
        return mysqli_fetch_all($run,true);
    }
   $user=getuser1();
   function getadmin()
   {
    
          $con=mysqli_connect("localhost","root","","interect");
         
          $query= "SELECT * FROM  admin ";
          $run=mysqli_query($con,$query);
          return mysqli_fetch_all($run,true);
    
   }
   $admin=getadmin();
   function getmessages()
   {
       $con=mysqli_connect("localhost","root","","interect");
      
       $query= "SELECT * FROM   messages ";
       $run=mysqli_query($con,$query);
       return mysqli_fetch_all($run,true);
   }
  $msg=getmessages();  
    ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class='all'>

  <div class='admin-header'>

    <div class='header-text'>
      <h3>interect </h3>

      <div class='header-greet'>
        <span><i class="fa">&#xf007;</i> Hello <?php  print_r($admin2['name']); ?></span>

        <a href='adminlogin.php' class='logout-btn'><i class="fa">&#xf011;</i></a>
      </div>

    </div>
  </div>

  <div class='admin-sidebar'>
<form method="POST">
    <!-- <li>

      <input placeholder='Search...' class='search-input' type='search' /><input type='submit' id='search-btn-1' class='fa' value='&#xf002;' />

    </li> -->
     
    <li>

     <a href='#'><i class="fa">&#xf0e4;</i><button style="border:none; background-color:#101010;color:gray;"  name="dashboard"> Dashboard</button></a>

    </li>

    <li>

      <a href='#'><i class="fa">&#xf0c0;</i><button  style="border:none; background-color:#101010;color:gray;" name="alluser">All Users</button></a>

    </li>

    <li>

      <a href='#'><i class="fa">&#xf05e;</i><button style="border:none; background-color:#101010;color:gray;" name="banned"> Banned Users</button></a>

    </li>

    <li>

     <a href='#'><i class="fa">&#xf132;</i><button style="border:none; background-color:#101010;color:gray;" name="Signup"> Create Admin</button></a>
  

    </li>

   
      <li id='all-nav' onclick="myFunction()">

        <a href='#' class='dropdown-btn'><i class="fa">&#xf055;</i> <button style="border:none; background-color:#101010;color:gray;" name="searchData">Search Data</button> </a> <i class="fa fa-angle-down" aria-hidden="true"></i>

       

      </li>
      <li id='all-nav' >

<a href='#' class='dropdown-btn'><i class="fa">&#xf055;</i> <button style="border:none; background-color:#101010;color:gray;" name="searchDete">Search By date</button> </a> <i class="fa fa-angle-down" aria-hidden="true"></i>


</li>

   

    <li>

      <a href='#'><i class="fa fa-profile">&#xf233;</i><button style="border:none; background-color:#101010;color:gray;" name="editpro">Profile</button></a>

    </li>
  </form>
  </div>
 
  <?php if(isset($_POST['dashboard'])){?>
  <div class='center-content'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class='all-border'>

      <div class='shows-location'>

        <div class='location-text'>

          <span class='location'>Admin <i class="fa">&#xf101; </i> Dashboard</span>

        </div>

      </div>

      <section>
       
      <div class='site-info'>

          <div class='all-quick-info'>

            <div class='info-icon'><i class="fa">&#xf0c0;</i></div>
              <form method="POST">
            <div class='text-right'>
              <div class='info-numbers'><span><?php print_r(count($user)); ?></span></div>
              <div>Users</div>
            </div>

            <div class='info-box-footer'>

              <a href='#' class='user-href'><span class="pull-left"></span>

                <span class='pull-right'><i class="fa fa-arrow-circle-right"></i></span></a>

            </div>

          </div>
          <div style='background: #f0ad4e; border-color: #f0ad4e;' class='all-quick-info'>

            <div class='info-icon'> <i class="fa">&#xf132;</i></div>
 
            <div class='text-right'>
              <div class='info-numbers'><span><?php print_r(count($admin)); ?></span></div>
              <div>Total Admins!</div>
            </div>
   
            
            

            <div class='info-box-footer'>

              <a href='#' class='user-href' style='color: #f0ad4e;'><span class="pull-left"><button style="border:none; background-color:white;color:orange;" name="admins">View Details</button></span>

                <span class='pull-right'><i class="fa fa-arrow-circle-right"></i></span></a>

            </div>

          </div>

          <div style='background: #5cb85c; border-color: #5cb85c;' class='all-quick-info'>

            <div class='info-icon'> <i class="fa fa-envelope"></i></div>

            <div class='text-right'>
              <div class='info-numbers'><span><?php print_r(count($msg));  ?></span></div>
              <div>Total Messages!</div>
            </div>

            <div class='info-box-footer'>

              <a href='#' class='user-href' style='color: #5cb85c;'><span class="pull-left"><button style="border:none;background-color:white;color:green;" name="allmsg">View Details</button></span>

                <span class='pull-right'><i class="fa fa-arrow-circle-right"></i></span></a>

            </div>

          </div>

          <div style='background: #ff5256; border-color: #ff5256;' class='all-quick-info'>

            <div class='info-icon'><i class="fa">&#xf05e;</i></div>

            <div class='text-right'>
              <div class='info-numbers'><span><?php print_r(count(deluser())); ?></span></div>
              <div>Banned Users!</div>
            </div>

            <div class='info-box-footer'>

              <a href='#' class='user-href' style='color: #ff5256;'><span class="pull-left"></span>

                <span class='pull-right'><i class="fa fa-arrow-circle-right"></i></span></a>

            </div>

          </div>
          </form>
        </div>
       
    
        

         

           
          </div>

        </div>

        

        <div class=''>

        </div>

      </section>

    </div>

  </div>
  <?php } elseif(isset($_POST['searchData'])){?>
  <div class='center-content'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class='all-border'>

      <div class='shows-location'>

        <div class='location-text'>

          <span class='location'>Admin <i class="fa">&#xf101; </i> search data</span>

        </div>

      </div>
      <section>
    
    
 
  <div class='newest-members' >

<div style='width: -webkit-fill-available;' class='notifications'>
  <div class='notify-header' style="padding:10px;">
    <h2 ><i class="fa">&#xf0c0;</i> All Members <font style="margin-left:650px;" color="blue">note: male: 1 | female: 2 | other: 0</font></h2>
    <div class='action-holder'>
      <i class="fa">&#xf106;</i> <i class="fa">&#xf013;</i>
    </div>
  </div>
      <table id="customers" >
      <tr>
        <th>Joined date</th>
        <th>name</th>
        <th>profie name</th>
        <th>gender</th>
        <th>merital</th>
        <th>mobail</th>
        <th>school</th>
        <th>live</th>
       
      </tr>
     
      <tr>
        <td><input id="date" name="date1" style="padding:3px;border-radius:0px;" size="9" type="date"></td>
        <td><input id="sname2901" name="sname1" style="padding:3px;border-radius:0px;" size="9" type="text"></td>
        <td><input id="profilename" name="proname" style="padding:3px;border-radius:0px;" size="9" type="text"></td>
        <td><input id="gend1" name="gender1" style="padding:3px;border-radius:0px;" size="9" type="text"></td>
        <td><input id="meri1" name="m1" style="padding:3px;border-radius:0px;" size="9" type="text"></td>
        <td><input id="moba" name="moba1" style="padding:3px;border-radius:0px;" size="9" type="text"></td>
        <td><input id="school" name="school1"style="padding:3px;border-radius:0px;" size="9" type="text"></td>
        <td><input id="live" name="live1" style="padding:3px;border-radius:0px;" size="9" type="text"></td>
 
      </tr>
      </table></div>
<br>
<div id="kkk">
  
  </div>
  <script>
     $(document).ready(function(){
                $("#date").keyup(function(){
                    var input =$(this).val();
                    if(input != '' )
                    {
                        $.ajax({
                            url:"date.php",
                            method:"POST",
                            data:{date1:input},
                            success: function(data)
                            {
                                $("#kkk").css("border","1px solid black");
                                $("#kkk").css("background-color","white");
                                $("#kkk").html(data);
                                $("#kkk").css("display","grid");
                            }
                        });
                    }
                    else
                    {
                        $("#kkk").css("display","none");
                        
                    }

                });
                
            });
     $(document).ready(function(){
                $("#gend1").keyup(function(){
                    var input =$(this).val();
                    if(input != '' )
                    {
                        $.ajax({
                            url:"gender.php",
                            method:"POST",
                            data:{gender1:input},
                            success: function(data)
                            {
                                $("#kkk").css("border","1px solid black");
                                $("#kkk").css("background-color","white");
                                $("#kkk").html(data);
                                $("#kkk").css("display","grid");
                            }
                        });
                    }
                    else
                    {
                        $("#kkk").css("display","none");
                        
                    }

                });
            });
    $(document).ready(function(){
                $("#sname2901").keyup(function(){
                    var input =$(this).val();
                    if(input != '' )
                    {
                        $.ajax({
                            url:"adminse.php",
                            method:"POST",
                            data:{sname1:input},
                            success: function(data)
                            {
                                $("#kkk").css("border","1px solid black");
                                $("#kkk").css("background-color","white");
                                $("#kkk").html(data);
                                $("#kkk").css("display","grid");
                            }
                        });
                    }
                    else
                    {
                        $("#kkk").css("display","none");
                        
                    }

                });
            });
            $(document).ready(function(){
                $("#profilename").keyup(function(){
                    var input =$(this).val();
                    if(input != '' )
                    {
                        $.ajax({
                            url:"proname.php",
                            method:"POST",
                            data:{proname:input},
                            success: function(data)
                            {
                                $("#kkk").css("border","1px solid black");
                                $("#kkk").css("background-color","white");
                                $("#kkk").html(data);
                                $("#kkk").css("display","grid");
                            }
                        });
                    }
                    else
                    {
                        $("#kkk").css("display","none");
                        
                    }

                });
            });
            $(document).ready(function(){
                $("#school").keyup(function(){
                    var input =$(this).val();
                    if(input != '' )
                    {
                        $.ajax({
                            url:"school.php",
                            method:"POST",
                            data:{school1:input},
                            success: function(data)
                            {
                                $("#kkk").css("border","1px solid black");
                                $("#kkk").css("background-color","white");
                                $("#kkk").html(data);
                                $("#kkk").css("display","grid");
                            }
                        });
                    }
                    else
                    {
                        $("#kkk").css("display","none");
                        
                    }

                });
            });
            $(document).ready(function(){
                $("#live").keyup(function(){
                    var input =$(this).val();
                    if(input != '' )
                    {
                        $.ajax({
                            url:"live.php",
                            method:"POST",
                            data:{live1:input},
                            success: function(data)
                            {
                                $("#kkk").css("border","1px solid black");
                                $("#kkk").css("background-color","white");
                                $("#kkk").html(data);
                                $("#kkk").css("display","grid");
                            }
                        });
                    }
                    else
                    {
                        $("#kkk").css("display","none");
                        
                    }

                });
            });
            $(document).ready(function(){
                $("#moba").keyup(function(){
                    var input =$(this).val();
                    if(input != '' )
                    {
                        $.ajax({
                            url:"moba.php",
                            method:"POST",
                            data:{moba1:input},
                            success: function(data)
                            {
                                $("#kkk").css("border","1px solid black");
                                $("#kkk").css("background-color","white");
                                $("#kkk").html(data);
                                $("#kkk").css("display","grid");
                            }
                        });
                    }
                    else
                    {
                        $("#kkk").css("display","none");
                        
                    }

                });
            });
            $(document).ready(function(){
                $("#meri1").keyup(function(){
                    var input =$(this).val();
                    if(input != '' )
                    {
                        $.ajax({
                            url:"meri1.php",
                            method:"POST",
                            data:{m1:input},
                            success: function(data)
                            {
                                $("#kkk").css("border","1px solid black");
                                $("#kkk").css("background-color","white");
                                $("#kkk").html(data);
                                $("#kkk").css("display","grid");
                            }
                        });
                    }
                    else
                    {
                        $("#kkk").css("display","none");
                        
                    }

                });
            });
    </script>
  </div>
  <?php }  elseif(isset($_POST['alluser'])){ ?>
       
<div class='center-content'>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class='all-border'>

  <div class='shows-location'>

    <div class='location-text'>

      <span class='location'>Admin <i class="fa">&#xf101; </i> All User</span>

    </div>

  </div>

  <section>
  
 
  <div class='newest-members' >

<div style='width: -webkit-fill-available;' class='notifications'>
  <div class='notify-header' style="padding:10px;">
    <h2 ><i class="fa">&#xf0c0;</i> All Members</h2>
    <div class='action-holder'>
      <i class="fa">&#xf106;</i> <i class="fa">&#xf013;</i>
    </div>
  </div>

  <div class='notify-box' style="height:400px;">
                           <?php  function gettime2($date)
                              {
                                 return date('(F jS, Y)',strtotime($date));
                              } 
                     
         
                                if(isset($_POST['deluser'])){
                                         
                                $con=mysqli_connect("localhost","root","","interect");
                                $id1=$_POST['deluser'];$a='color';$g=getuser2($id1);
                                $color=$g['color'];$msthem=$g['msthem'];$mscolor=$g['mscolor'];$userpro=$g['user_profile'];
                                $name=$g['name'];$password=$g['password'];$mobail=$g['mobail'];$email=$g['email'];$gender=$g['gender'];
                                $school=$g['school'];$collage=$g['collage'];$work=$g['work'];$from_city=$g['from_city'];$live=$g['live'];
                                $martal=$g['marital_status'];$pro_pic=$g['pro_pic'];$bio_pic=$g['bio_pic'];$ac_status=$g['ac_status'];
                                $query="INSERT INTO userdenaid(color,msthem,mscolor,user_profile,name,password,mobail,email,gender,school,collage,work,from_city,live,marital_status,pro_pic,bio_pic,ac_status)
                                values('$color','$msthem','$mscolor','$userpro','$name','$password','$mobail','$email','$gender','$school','$collage','$work','$from_city'
                                ,'$live','$martal','$pro_pic','$bio_pic','$ac_status')";
                                  
                                  
                                 $ans =mysqli_query($con,$query);
                                 $str2="delete from user where id=$id1";
                                 $ans2=mysqli_query($con,$str2);
                                 if($ans && $ans2)
                                 {
                                  header('location:mo.php');
                                 }
                                 else{
                                  echo "something wrong";
                                 }
                                


  }
                                ?>
    <table id="customers" >
      <tr>
        <th>Joined date</th>
        <th>name</th>
        <th>profie name</th>
        <th>profile</th>
        <th>bio_pic</th>
        <th>gender</th>
        <th>merital</th>
        <th>mobail</th>
        <th>school</th>
        <th>collage</th>
        <th>live</th>
        <th>action</th>
      </tr>
      <?php foreach($user as $u){ ?>
      <tr>
        <td><?php print_r(gettime2($u['createat'])); ?></td>
        <td><?php print_r($u['name']); ?></td>
        <td><?php print_r($u['user_profile']);?></td>
        <td><img src='images/<?php print_r($u['pro_pic']); ?>' width='40'height='40'></img></td>
        <td><img src='images/<?php print_r($u['bio_pic']); ?>' width='40'height='40'></img></td>
        <td><?php if($u['gender']==1){echo "male";}else{echo "female"; } ?></td>
        <td><?php print_r($u['marital_status']);?></td>
        <td><?php print_r($u['mobail']); ?></td>
        <td><?php print_r($u['school']); ?></td>
        <td><?php print_r($u['collage']); ?></td>
        <td><?php print_r($u['live']); ?></td>
        <td>
          <form method="POST">
         <button name="deluser" style="border:none;" value="<?php print_r($u['id']); ?>"> <a class='actions-btns2' href='#'><i class="fa fa-times"></i></a></button>
          <br><br> <button style="border:none;"name="view" value="<?php print_r($u['id']); ?>">view</button>
      </form>
        </td>
       
      </tr>
      <?php }?>
    </table>
    <div class='view-all-members'>
      <span class='view-all-btn1'><a href='#'>View All Members</a></span>
    </div>
  </div>
</div>

</div>  
 
    
      </div>

    </div>

    

    <div class=''>

    </div>

  </section>

</div>

</div>
 <?php }  elseif(isset($_POST['view'])){ ?>
      
<div class='center-content'>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class='all-border'>

  <div class='shows-location'>
<?php   
 $myuser= getuser2($_POST['view']);
 ?>
    <?php     function checkfollowstatus($user_id)
                                             {     $con=mysqli_connect("localhost","root","","interect");
                                                global $profile;
                                                 $currentuser = $_POST['view'];
                                                 $query="SELECT * FROM follow_list   WHERE follower_id=$currentuser  && userid=$user_id";  
                                                 $run=mysqli_query($con,$query);
                                                 return mysqli_fetch_assoc($run);
                                                
                                             }
                                             function getfollowsuggestion()
                                             {
                                                
                                                 $con=mysqli_connect("localhost","root","","interect");
                                                 $currentuser = $_POST['view'];
                                                 $query= "SELECT * FROM  user WHERE id!=$currentuser";
                                                 $run=mysqli_query($con,$query);
                                                 return mysqli_fetch_all($run,true);
                                             }
     function notfollow()
     {
     $list=getfollowsuggestion();
     $filter_list = array();
     foreach ($list as $user) {
        if(checkfollowstatus($user['id']))
        {
         $filter_list[]=$user;
        } 
     }
     return $filter_list;
   
     }$notfollow=notfollow(); 
     function currentpost()
     {
         global $profile;
         $con=mysqli_connect("localhost","root","","interect");
         $currentuser = $_POST['view'];
         $query="SELECT posts.video,posts.doc, posts.id,posts.created_at,posts.userid,posts.post_img,posts.post_text,posts.created_at,user.name,user.user_profile,user.pro_pic FROM posts JOIN user  ON user.id=posts.userid where user.id=  $currentuser ORDER BY id DESC";
         $r=mysqli_query($con,$query);
         return mysqli_fetch_all($r,true);
     }
 function kkk()
 {
    
     $con=mysqli_connect("localhost","root","","interect");
     $currentuser =$_POST['view'];
     $query="SELECT user.name,user.user_profile,user.pro_pic,follow_list.follower_id,follow_list.id FROM follow_list JOIN user  ON user.id=follow_list.follower_id where follow_list.userid=  $currentuser";
     $r=mysqli_query($con,$query);
     return mysqli_fetch_all($r,true);
 } ?>
    <div class='location-text'>

      <span class='location'>Admin <i class="fa">&#xf101; </i> All User <i class="fa">&#xf101; </i> <?php print_r($myuser['name']); ?> </span>

    </div>

  </div>

  <section>
  
   <table>
    <tr>
      <td colspan='3' rowspan='6' style="background-image:url('images/<?php print_r($myuser['bio_pic']) ?>'); ">
        <img style="margin-top:10px;margin-bottom:0px; float:left;" src='images/<?php print_r($myuser['pro_pic']) ?>' height='100' widht='100'></img>
        <table rowspan='6' style="display:block;" ><tr>
          <td>
                <h3  style="margin-top:8px;color:black;background-color:white; padding:5px;border-radius:10px;">
                      <?php print_r($myuser['name']); ?><br>@<?php print_r($myuser['user_profile']); ?>
                </h3>
        </td>
        <td><h3 style="margin-top:8px;color:white;background-color:crimson; padding:9px;border-radius:20px;">following <?php print_r(count(notfollow())); ?></h3></td>
        <td><h3 style="margin-top:8px;color:white;background-color:crimson; padding:9px;border-radius:20px;">follower <?php print_r(count(kkk()));   ?></h3></td>
        <td><h3 style="margin-top:8px;color:white;background-color:crimson; padding:9px;border-radius:20px;">posts <?php print_r(count(currentpost())); ?></h3></td>
        </table>
      </td>
    </tr>
  </table>
  <table>
  <tr>
      <!-----------follwing--------->
    
    <td style="width:200px; "><h3 style="margin-top:8px;color:black;background-color:white; padding:5px;border-radius:10px;">bio:
    <!----------- this table bio data----->
    <table style="table-layout: auto; height:50px;"  celspacing='0' celpadding='0' >
    <tr><td style="padding:0px;margin:0px; text-align:center;">school-:</td><td><?php echo $myuser['school'] ?></td></tr>
    <tr><td style="padding:0px;margin:0px;text-align:center;">live-:</td><td><?php echo $myuser['live'] ?></td></tr>
    <tr><td style="padding:0px;margin:0px;text-align:center;">work-:</td><td><?php echo $myuser['work'] ?></td></tr>
    <tr><td style="padding:0px;margin:0px;text-align:center;">collage-:</td><td><?php echo $myuser['collage'] ?></td></tr>
    <tr><td style="padding:0px;margin:0px;text-align:center;">merrital-:</td><td><?php echo $myuser['marital_status'] ?></td></tr>
    <tr><td style="padding:0px;margin:0px;text-align:center;">from-:</td><td><?php echo $myuser['from_city'] ?></td></tr>
 
  
    </table></h3>
    </div>
                                         <div style="height:200px; width:250px; overflow-x: hidden;"><br><center><h3>following</h3><center>  
    <?php $following22=notfollow();   foreach ($following22 as $tuser1) {
                                              
                                              ?>
                                          
                                        <table><tr>
                                          <td><img style="border-radius:20px;" src="images/<?php echo $tuser1['pro_pic']; ?>" height="40" width="40"></img></td><td><div class="message-body">
                                                         <h5><?php echo $tuser1['name']; ?><br>@<?php echo $tuser1['user_profile']; ?></h5><td></tr></table>
                                          
                                              
                                         
                                                     
                                         
                                         <?php }?>
                                         </div>
    </td>
    <!------------- post ----------->
    <td style="width:400px;"> <div style="height:400px; overflow-x:hidden;">
      <?php $posts=currentpost();if (count($posts)<1) {
                                        echo "<br><br>
                                        <center><img style='border-radius:0px;' src='images/6ad1d1eba400880e3c3de062fcb13576(1).png' width=200 height=200></img></center>";
                                    }else{
                                    foreach ($posts as $post) {
                                        
                                    
                                    ?>
      <table width='700' style="border:1px solid gray;margin-right:2px;margin-bottom:4px;">
        <tr><td><img src='images/<?php print_r($post['pro_pic']); ?>' height='30' width='30'></img></td><td><?php echo $post['name']; ?></td></tr>
        <tr><td>caption:</td><td><?php echo $post['post_text']; ?></td></tr>
        <tr><td><?php  if($post['video']) {?><center><video height="300" width="400"   controls ><source src='video/<?php echo $post['video']?>' type='video/mp4'></video></center><?php }else if($post['doc']){?><center><embed type="application/pdf" src="pdf/<?php echo $post['doc'] ?>" height="300" width="400x" ></center><?php }else{?><center><img style="border-radius:0px;" src='posts/<?php echo $post['post_img']; ?>' height='300' width="300"></img></center><?php } ?></td></tr>
        <tr><td><?php      ?><div style="margin-left:30px; " >
                                                comments * <?php  $getpostmsg=getpostmsg2021($post['id']);  print_r(count($getpostmsg)); ?></div>
                                                <div style="height:100px; overflow-x:hidden; width:450px;" >
                                                 <?php
                                                               
                                                              
                                                               if(empty($getpostmsg))
                                                               {
                                                                echo "";
                                                               }else{
                                                               foreach($getpostmsg as $getpost29=>$n)
                                                              {
                                                                
                                                               ?>
                                                                 
                                                               <div style="margin-top:9px; border-radius:30px;  "><table><tr><td style="border-radius:30px; width:40px;"><img style="margin-left:7px; border-radius:59px; height:40px; width:40px;" src="images/<?php echo $n['pro_img'] ?>" ></img></td><td ><?php print_r($n['uname']); ?> : </td><td>
                                                               <p style="margin-left:14px;"> <?php print_r($n['msg']); ?></p>
                                                                <td></tr></table>
                                                              </div>
                                                               <?php } }?>
                                                           </div>
                                                </div></td></tr>
      </table>
<?php }} ?></div>
   </td>
   <!-------------- follower -------><td style="width:200px;">

    <div style="height:300px;  margin-left:15px; overflow-x: hidden;"><center><h3>follower</h3><center>  
    <?php $following2=kkk();   foreach ($following2 as $tuser) {
                                              
                                              ?>
                                          
                                        <table><tr>
                                          <td><img style="border-radius:20px;" src="images/<?php echo $tuser['pro_pic']; ?>" height="40" width="40"></img></td><td><div class="message-body">
                                                         <h5><?php echo $tuser['name']; ?><br>@<?php echo $tuser['user_profile']; ?></h5><td></tr></table>
                                          
                                              
                                         
                                                     
                                         
                                         <?php }?>
                                  
 </td>
  </tr>
 </table>
   

    

    <div class=''>

    </div>

  </section>

</div>

</div>
<?php } elseif(isset($_POST['searchDete'])){?>
  <?php header('location:demo56.php'); ?>
<?php } elseif(isset($_POST['banned'])){ ?>
<div class='center-content'>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class='all-border'>

  <div class='shows-location'>

    <div class='location-text'>

      <span class='location'>Admin <i class="fa">&#xf101; </i>  Banned User</span>

    </div>

  </div>

  <section>
   
   
  <div class='newest-members' >

<div style='width: -webkit-fill-available;' class='notifications'>
  <div class='notify-header' style="padding:10px;">
    <h2><i class="fa">&#xf0c0;</i> Refuse Members</h2>
    <div class='action-holder'>
      <i class="fa">&#xf106;</i> <i class="fa">&#xf013;</i>
    </div>
  </div>

  <div class='notify-box' style="height:400px;">
                           <?php  function gettime2($date)
                              {
                                 return date('(F jS, Y)',strtotime($date));
                              } 
                                if(isset($_POST['activeuser'])){
                                         
                                $con=mysqli_connect("localhost","root","","interect");
                                $id1=$_POST['activeuser'];$a='color';$g=getdinaid($id1);
                                $color=$g['color'];$msthem=$g['msthem'];$mscolor=$g['mscolor'];$userpro=$g['user_profile'];
                                $name=$g['name'];$password=$g['password'];$mobail=$g['mobail'];$email=$g['email'];$gender=$g['gender'];
                                $school=$g['school'];$collage=$g['collage'];$work=$g['work'];$from_city=$g['from_city'];$live=$g['live'];
                                $martal=$g['marital_status'];$pro_pic=$g['pro_pic'];$bio_pic=$g['bio_pic'];$ac_status=$g['ac_status'];
                                $query="INSERT INTO user(color,msthem,mscolor,user_profile,name,password,mobail,email,gender,school,collage,work,from_city,live,marital_status,pro_pic,bio_pic,ac_status)
                                values('$color','$msthem','$mscolor','$userpro','$name','$password','$mobail','$email','$gender','$school','$collage','$work','$from_city'
                                ,'$live','$martal','$pro_pic','$bio_pic','$ac_status')";
                                  
                                  
                                 $ans =mysqli_query($con,$query);
                                 $str2="delete from userdenaid where id=$id1";
                                 $ans2=mysqli_query($con,$str2);
                                 if($ans && $ans2)
                                 {
                                  header('location:mo.php');
                                 }
                                 else{
                                  echo "something wrong";
                                 }
                                


  }
                                ?>
    <table id="customers" >
      <tr>
        <th>Joined date</th>
        <th>name</th>
        <th>profile</th>
        <th>bio_pic</th>
        <th>gender</th>
        <th>mobail</th>
        <th>live</th>
        <th>action</th>
      </tr>
      <?php if($duser==""){echo "";}else{ ?>
      <?php foreach($duser as $p){ ?>
      <tr>
        <td><?php print_r(gettime2($p['create at'])); ?></td>
        <td><?php print_r($p['name']); ?></td>
        <td><img src='images/<?php print_r($p['pro_pic']); ?>' width='40'height='40'></img></td>
        <td><img src='images/<?php print_r($p['bio_pic']); ?>' width='40'height='40'></img></td>
        <td><?php if($p['gender']==1){echo "male";}else{echo "female"; } ?></td>
        <td><?php print_r($p['mobail']); ?></td>
        <td><?php print_r($p['live']); ?></td>
        <td>
          <form method="POST">
         
         <button name="activeuser" style="background-color:green;color:white;padding:9px;box-shadow:0px 2px 2px 2px gray;border:none;" value="<?php print_r($u['id']); ?>">Allow</button>
         
      </form>
        </td>
       
      </tr>
      <?php }}?>
    </table>
    <div class='view-all-members'>
      <span class='view-all-btn1'><a href='#'></a></span>
    </div>
  </div>
</div>

</div>
    
 
      </div>

    </div>

    

    <div class=''>

    </div>

  </section>

</div>

</div>
<?php } elseif(isset($_POST['Signup'])){?>

<div class='center-content'>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class='all-border'>

  <div class='shows-location'>

    <div class='location-text'>

      <span class='location'>Admin <i class="fa">&#xf101; </i>  Sign-In</span>

    </div>

  </div>

  <section><center>
<div class="signup2">   
  <center><br><h3>Sign in</h3>
                  
                                <table ><tr><td>
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
<input type="submit" name="signup1" value="sign up" id="f-submit" class="submit1">

        </td>    </tr>
       </table></td></tr>
</form>
                        </tr></table></center>
                        </div>
                        </div>
 
          </div></center>
</div>
    
 
      </div>

    </div>

    

    <div class=''>

    </div>

  </section>

</div>

</div>
<?php } elseif(isset($_POST['admins'])){ ?>
<div class='center-content'>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class='all-border'>

  <div class='shows-location'>

    <div class='location-text'>

      <span class='location'>Admin <i class="fa">&#xf101; </i>  Dashboard  <i class="fa">&#xf101; </i>  Admins  <i class="fa">&#xf101; </i>  view all detail</span>

    </div>

  </div>

  <section>
   
   
  <div class='newest-members' >

<div style='width: -webkit-fill-available;' class='notifications'>
  <div class='notify-header' style="padding:10px;">
    <h2><i class="fa">&#xf0c0;</i> All admins</h2>
    <div class='action-holder'>
      <i class="fa">&#xf106;</i> <i class="fa">&#xf013;</i>
    </div>
  </div>

  <div class='notify-box' style="height:400px;">
                           
    <table id="customers" >
      <tr>
        <th>profile</th>
        <th>name</th>
        <th>gender</th>
        <th>mobail</th>
        
      </tr>
      <?php $duser=getadmin(); if($duser==""){echo "";}else{ ?>
      <?php foreach($duser as $p){ ?>
      <tr>
         <td><img src='images/<?php print_r($p['pro_pic']); ?>' width='40'height='40'></img></td>
        <td><?php print_r($p['name']); ?></td>
        <td><?php if($p['gender']==1){echo "male";}else{echo "female"; } ?></td>
        <td><?php print_r($p['monumber']); ?></td>
        
       
      </tr>
      <?php }}?>
    </table>
    <div class='view-all-members'>
      <span class='view-all-btn1'><a href='#'></a></span>
    </div>
  </div>
</div>

</div>
    
 
      </div>

    </div>

    

    <div class=''>

    </div>

  </section>

</div>

</div>
<?php } elseif(isset($_POST['allmsg'])){ ?>
<div class='center-content'>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class='all-border'>

  <div class='shows-location'>

    <div class='location-text'>

      <span class='location'>Admin <i class="fa">&#xf101; </i> Dashboard <i class="fa">&#xf101; </i> All message <i class="fa">&#xf101; </i> View all</span>

    </div>

  </div>

  <section>
  <div class='newest-members' >

<div style='width: -webkit-fill-available;' class='notifications'>
  <div class='notify-header' style="padding:10px;">
    <h2><i class="fa">&#xf0c0;</i>All Messages</h2>
    <div class='action-holder'>
      <i class="fa">&#xf106;</i> <i class="fa">&#xf013;</i>
    </div>
  </div>
<?php 
         if(isset($_POST['delmsg20'])){
                                         
          $con=mysqli_connect("localhost","root","","interect");
          $id1=$_POST['delmsg20'];
         
           $str2="delete  from  messages where id=$id1";
           $ans2=mysqli_query($con,$str2);
           if( $ans2)
           {
            header('location:mo.php');
           }
           else{
            echo "something wrong";
           }
          


}
?>
  <div class='notify-box' style="height:400px;">
                      
    <table id="customers" >
      <tr>
        <th>date/time</th>
        <th>sender</th>
        <th>sender name</th>
        <th>receiver</th>
        <th>receiver name</th>
        <th>messages</th>
        <th>action</th>
      </tr>
      <?php if($duser==""){echo "";}else{ ?>
      <?php $duser=getmessages(); foreach($duser as $p){ ?>
      <tr>  <?php $s=getuser2($p['from_user_id']); $r=getuser2($p['to_user_id']); ?>
        <td><?php print_r($p['create_at']); ?></td>
        <td><img src="images/<?php print_r($s['pro_pic']) ?>" height="50" width="50"></img></td>
        <td><?php print_r($s['name']); ?></td>
        <td><img src="images/<?php print_r($r['pro_pic']) ?>" height="50" width="50"></img></td>
        <td><?php print_r($r['name']); ?></td>
        <td><?php if($p['video']){?> <video   height="50" width="50"   controls ><source src='video/<?php echo $p['video']?>' type='video/mp4'></video><?php }?><?php  if($p['doc']){?><a href="msgphoto/<?php echo $p['doc'] ?>"><h2 style='border:1px solid red;'>pdf</h2></a><?php } if($p['photo']){?><img style="border-radius:0px;" src="msgphoto/<?php print_r($p['photo']); ?>" height="50" width="50"></img> <?php } if($p['msg']){ print_r($p['msg']); }?></td>
        <td>
          <form method="POST">
           
         <button type="submit" name="delmsg20" style="background-color:green;color:white;padding:9px;box-shadow:0px 2px 2px 2px gray;border:none;" value="<?php print_r($p['id']); ?>">delete</button>
      </form>
        </td>
       
      </tr>
      <?php }}?>
    </table>
    <div class='view-all-members'>
      <span class='view-all-btn1'><a href='#'></a></span>
    </div>
  </div>
</div>



  </section>

</div>

</div>
<?php } elseif(isset($_POST['editpro'])){ ?>
<div class='center-content'>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class='all-border'>

  <div class='shows-location'>

    <div class='location-text'>

      <span class='location'>Admin <i class="fa">&#xf101; </i>  Edit Profile</span>

    </div>

  </div>

  <section>
 <form method="POST" enctype="multipart/form-data">
   <table style="border:1px solid #d0d0d3;"><tr><td colspan=2><h1 style="font-size:17px; ">edit profile</h1></td></tr>
   <tr><td colspan="0">
    <img id="img2901" style="border-radius:0px;border:1px solid gray;margin-left:16px;" src="images/<?php print_r($admin2['pro_pic']); ?>" height="200" width="250"></img>
    <table ><tr><td><input id="editfile" type="file" name="pro-pic"></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td><input type="submit" value="update-profile" name="editpro1"></td></tr></table>
   </td>
   <td  style="margin:0px; padding:0px;">
    <table sytle="margin:0px;">
      <tr><td>name</td><td><input name="name" type="text" value="<?php print_r($admin2['name']); ?>"></td></tr>
      <tr><td>password</td><td><input name="password" type="text" value="<?php print_r($admin2['password']); ?>"></td></tr>
      <tr><td>city</td><td><input type="text" name="city" value="<?php print_r($admin2['city']); ?>"></td></tr>
      <tr><td>mobail</td><td><input type="text" name="mobail" value="<?php print_r($admin2['monumber']); ?>"></td></tr>
      <tr><td>gender</td><td><input name="gender" value="<?php print_r($admin2['gender']); ?>" ></td></tr>
      <tr><td>email</td><td><input name="email" type="text" value="<?php print_r($admin2['email']); ?>"></td></tr>
      <tr><td><input name="edit" type="submit" value="update"></td></tr>
    </table>
   </td>
  </tr>
  </table>
      </form>



  </section>

</div>

</div>
<?php }else{  require('dashbord.php'); } ?>
  <script>
    //video load on post
var input2 = document.querySelector("#editfile");
input2.addEventListener("change", preview2);

function preview2()
{
    var fileobject2 = this.files[0];
    var filereder2 = new FileReader();
    filereder2.readAsDataURL(fileobject2);
    filereder2.onload = function()
    {
        var image_src1 = filereder2.result;
        var image1 = document.querySelector('#img2901');
        image1.setAttribute('src', image_src1);
        image1.setAttribute('style','display:');
    }
}
    function myFunction() {
  var element = document.getElementById("nav");
  element.classList.toggle("second-nav-ul");
}

function size() {
  var element = document.getElementById("all-nav");
  element.classList.toggle("all-nav");
}

var close = document.getElementsByClassName("right");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
  </script>
</body>
</html>