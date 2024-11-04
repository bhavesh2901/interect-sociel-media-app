<!--
NAME OF PROJECT: INTERACT SOSCIL MIDEA SITE
DVELOPER NAME  : CHAVDA BHAVESH
YEAR           : 2023
COLLAGE        : S C GANDHI BCA COLLAGE
PAGE           : HOME PAGE 
-->
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
     <link href="intaract.css" rel="stylesheet">
    
    
     <style>body{
         background-color:<?php   print_r($_SESSION['bhavesh']['user']['color']); ?>
     }
         </style>
     
    <title>Home</title>
 
</head>

<body  id="change_m" style="background-color:<?php session_start();  print_r($_SESSION['bhavesh']['user']['color']); ?>"  class="body1">
    <?php if(!empty($_SESSION['bhavesh']['user'])){  ?> 
<?php                                   
                                              function  getactivechatuserid()
                                              {
                                                  $con=mysqli_connect("localhost","root","","interect");
                                                  $currentuser_user_id=$_SESSION['bhavesh']['user']['id'];
                                                  $query= "SELECT from_user_id,to_user_id from messages where to_user_id=$currentuser_user_id || from_user_id=$currentuser_user_id ORDER BY id DESC";
                                                  $run= mysqli_query($con,$query);
                                                  $data= mysqli_fetch_all($run,true);
                                                  $ids=array();
                                                  if($data==""){
                                                      echo "";
                                                  }else{
                                                  foreach($data as $ch){
                                                  if($ch['from_user_id']!=$currentuser_user_id && !in_array($ch['from_user_id'],$ids)){
                                              $ids[]=$ch['from_user_id'];
                                                  }
                                                  if($ch['to_user_id']!=$currentuser_user_id && !in_array($ch['to_user_id'],$ids)){
                                                      $ids[]=$ch['to_user_id'];
                                                          }
                                                  }
                                              }
                                                  return $ids;
                                              }
                                              // function get messages
                                              
                                              function getmessages($user_id)
                                              {
                                                  $con=mysqli_connect("localhost","root","","interect");
                                                  $currentuser_user_id=$_SESSION['bhavesh']['user']['id'];
                                                  $query= "SELECT *from messages where (to_user_id=$currentuser_user_id && from_user_id=$user_id) || (from_user_id=$currentuser_user_id && to_user_id=$user_id) ORDER BY id DESC";
                                                  $run= mysqli_query($con,$query);
                                                  return mysqli_fetch_all($run,true);
                                              }
                                              // all messages get
                                              function getallmessages()
                                              {
                                              $active_chat_id= getactivechatuserid();
                                              $conversation=array();
                                              foreach($active_chat_id as $index=>$id)
                                              {
                                                  $conversation[$index]['user_id']=$id;
                                                  $conversation[$index]['messages']=getmessages($id);
                                              
                                              }
                                              return $conversation;
                                              }
                                                  if(isset($_POST["addvideo"]))
                                                  {
                                                      
                                                    $name=$_FILES['video'];
                                                      print_r($name);
                                                      $file_name=$_FILES['video']['name'];
                                                      $file_type=$_FILES['video']['type'] ;
                                                      
                                                    
                                                      if($file_name=='')
                                                      {
                                                          echo "<img class='nofile' src='images/nofile.png' height=70 ></img>";
                                                      }
                                                    
                                                      else{
                                                       
                                                          $folder="video/".$file_name;
                                                          $video_text=$_POST['video_text'];
                                                          $con29=mysqli_connect("localhost","root","","interect");
                                                          move_uploaded_file($_FILES['video']['tmp_name'],$folder);
                                                          $user_id=$_SESSION['bhavesh']['user']['id'];
                                                             $name22=$_SESSION['bhavesh']['user']['name'];
                                                          $str="INSERT into posts(userid,video,post_text,name) values('$user_id','$file_name','$video_text','$name22')";
                                                          $re=mysqli_query($con29,$str);
                                                         
                                                          if($re)
                                                          {
                                                              header('location:sarktank.php');
                                                              echo "added sucessfully";
                                                          }
                                                          else {
                                                              echo "somting roung";
                                                          }
                                                       }
                                                  }
                                                  if(isset($_POST['color1']))
                                                   {
                                                    $con=mysqli_connect("localhost","root","","interect");
                                                    $currentuser=$_SESSION['bhavesh']['user']['id'];
                                                    $color1=$_POST['color1'];
                                                    $str="UPDATE user SET color='$color1' where id=$currentuser";
                                                    $r=mysqli_query($con,$str);if($r){header('location:sarktank.php');header('location:sarktank.php');
                                                   $_SESSION['bhavesh']['user']['color']=$color1;}
                                                   }
                                                   if(isset($_POST['color2']))
                                                   {
                                                    $con=mysqli_connect("localhost","root","","interect");
                                                    $currentuser=$_SESSION['bhavesh']['user']['id'];
                                                    $color2=$_POST['color2'];
                                                    $str="UPDATE user SET color='$color2' where id=$currentuser";
                                                   $r= mysqli_query($con,$str);if($r){header('location:sarktank.php');header('location:sarktank.php');    $_SESSION['bhavesh']['user']['color']=$color2;}
                                                   }
                                                   if(isset($_POST['color3']))
                                                   {
                                                    $con=mysqli_connect("localhost","root","","interect");
                                                    $currentuser=$_SESSION['bhavesh']['user']['id'];
                                                    $color3=$_POST['color3'];
                                                    $str="UPDATE user SET color='$color3' where id=$currentuser";
                                                   $r= mysqli_query($con,$str);if($r){header('location:sarktank.php');header('location:sarktank.php');    $_SESSION['bhavesh']['user']['color']=$color3;}
                                                   }
                                                   if(isset($_POST['color4']))
                                                   {
                                                    $con=mysqli_connect("localhost","root","","interect");
                                                    $currentuser=$_SESSION['bhavesh']['user']['id'];
                                                    $color4=$_POST['color4'];
                                                    $str="UPDATE user SET color='$color4' where id=$currentuser";
                                                    $r=mysqli_query($con,$str);if($r){header('location:sarktank.php');header('location:sarktank.php');    $_SESSION['bhavesh']['user']['color']=$color4;}
                                                   }
                                                   if(isset($_POST['color5']))
                                                   {
                                                    $con=mysqli_connect("localhost","root","","interect");
                                                    $currentuser=$_SESSION['bhavesh']['user']['id'];
                                                    $color5=$_POST['color5'];
                                                    $str="UPDATE user SET color='$color5' where id=$currentuser";
                                                   $r= mysqli_query($con,$str);if($r){header('location:sarktank.php');header('location:sarktank.php');    $_SESSION['bhavesh']['user']['color']=$color5;}
                                                   }
                                                   
                                                   /********************************************************* */
                                                   if(isset($_POST['bg1']))
                                                   {
                                                    $con=mysqli_connect("localhost","root","","interect");
                                                    $currentuser=$_SESSION['bhavesh']['user']['id'];
                                                    $bg1=$_POST['bg1'];
                                                    $str="UPDATE user SET color='$bg1' where id=$currentuser";
                                                   $r= mysqli_query($con,$str);if($r){header('location:sarktank.php');header('location:sarktank.php');    $_SESSION['bhavesh']['user']['color']=$bg1;}
                                                   }
                                                   if(isset($_POST['bg2']))
                                                   {
                                                    $con=mysqli_connect("localhost","root","","interect");
                                                    $currentuser=$_SESSION['bhavesh']['user']['id'];
                                                    $bg2=$_POST['bg2'];
                                                    $str="UPDATE user SET color='$bg2' where id=$currentuser";
                                                    $r=mysqli_query($con,$str);if($r){header('location:sarktank.php');header('location:sarktank.php');    $_SESSION['bhavesh']['user']['color']=$bg2;}
                                                   }
                                                   if(isset($_POST['bg3']))
                                                   {
                                                    $con=mysqli_connect("localhost","root","","interect");
                                                    $currentuser=$_SESSION['bhavesh']['user']['id'];
                                                    $bg3=$_POST['bg3'];
                                                    $str="UPDATE user SET color='$bg3' where id=$currentuser";
                                                   $r= mysqli_query($con,$str);if($r){header('location:sarktank.php');header('location:sarktank.php');    $_SESSION['bhavesh']['user']['color']=$bg3;}
                                                   } 
                                           
                                                  function insert_noti($id)
                                                  {
                                                   
                                                  }
                                        
                                                  // FOLLOUSER 
                                             function follouser($user_id)
                                             {
                                                 $con=mysqli_connect("localhost","root","","interect");
                                                 $currentuser = $_SESSION['bhavesh']['user']['id'];
                                              
                                                 $query="INSERT INTO follow_list(follower_id,userid)values($currentuser ,$user_id)";
                                                    $con=mysqli_connect("localhost","root","","interect");
                                                        $currentmname=$_SESSION['bhavesh']['user']['name'];
                                                       $getuser=getpro_pic($user_id);
                                                 $getuserpic=$_SESSION['bhavesh']['user']['pro_pic'];
                                                 $getusername=$getuser[0]['name'];
                                                   $query2="insert into notification(whofollow,whom,propic,kind)values('$currentmname' ,'$getusername','$getuserpic','follower')";
                                                   mysqli_query($con,$query2);
                                                 return mysqli_query($con,$query);
                                             }
                                             // UNFOLLOW USER
                                             function unfollouser($user_id)
                                             {
                                                 $con=mysqli_connect("localhost","root","","interect");
                                                 $currentuser = $_SESSION['bhavesh']['user']['id'];
                                                 $query="DELETE FROM follow_list WHERE follower_id=$currentuser && userid=$userid";
                                                 return mysqli_query($con,$query);
                                             }
                                                       if(isset($_POST['follow']))
                                                       {
                                                           $user_id=$_POST['follow'];
                                                           if(follouser($user_id)){
                                                               $response['status']=true;
                                                               header('location:sarktank.php');
                                                            
                                                           }
                                                           else {
                                                               $response['status']=false;
                                                           }
                                                           echo json_encode($response);
                                                       }
                                               if(isset($_POST['delpost']))
                                                 {
                                                    $con=mysqli_connect("localhost","root","","interect");
                                                     $delpost=$_POST['delpost'];
                                                     $str="delete from posts where id=$delpost";
                                                     $r=mysqli_query($con,$str);
                                                     if($r){header('location:sarktank.php');}
                                        
                                                 } 
                                       function filterfollowsuggestion()
                                       {
                                       $list=getfollowsuggestion();
                                       $filter_list = array();
                                       foreach ($list as $user) {
                                          if(!checkfollowstatus($user['id']))
                                          {
                                           $filter_list[]=$user;
                                          } 
                                       }
                                       return $filter_list;
                                       }
                                       // CHECK FOLLOW OR NOT 
                                       function checkfollowstatus($user_id)
                                       {     $con=mysqli_connect("localhost","root","","interect");
                                           $currentuser = $_SESSION['bhavesh']['user']['id'];
                                           $query="SELECT * FROM follow_list   WHERE follower_id=$currentuser  && userid=$user_id";  
                                           $run=mysqli_query($con,$query);
                                           return mysqli_fetch_assoc($run);
                                          
                                       }
                                       // FOLLOW SUGGESTION
                                       function getfollowsuggestion()
                                       {
                                           $con=mysqli_connect("localhost","root","","interect");
                                           $currentuser = $_SESSION['bhavesh']['user']['id'];
                                           $query= "SELECT * FROM  user WHERE id!=$currentuser";
                                           $run=mysqli_query($con,$query);
                                           return mysqli_fetch_all($run,true);
                                       }
                                         
                                       $follow_seggestion= filterfollowsuggestion();
                                    
                                     
                                     ?>   <?php
                                     //for managing add post
                                     $con=mysqli_connect("localhost","root","","interect");
                                     if(isset($_POST['adddoc']))
                                     {
                                         
                                         $post_text=$_POST['post_text'];
                                         
                                         $file_name=$_FILES['post_doc']['name'];
                                         if($file_name=='')
                                         {
                                             echo "<img class='nofile' src='images/nofile.png' height=70 ></img>";
                                         }else{
                                             $folder="pdf/".$file_name;
                                             
                                             move_uploaded_file($_FILES['post_doc']['tmp_name'],$folder);
                                             $user_id=$_SESSION['bhavesh']['user']['id'];
                                             $name22=$_SESSION['bhavesh']['user']['name'];
                                             $str="INSERT into posts(userid,post_text,doc,name) values($user_id,'$post_text','$file_name','$name22')";
                                             $re=mysqli_query($con,$str);
                                            
                                             if($re)
                                             {
                                                 header('location:sarktank.php');
                                                 echo "added sucessfully";
                                             }
                                             else {
                                                 echo "somting roung";
                                             }
                                          }
                                     }
                                     if(isset($_POST['addpost']))
                                     {
                                         
                                         $post_text=$_POST['post_text'];
                                         
                                         $file_name=$_FILES['post_img']['name'];
                                         if($file_name=='')
                                         {
                                             echo "<img class='nofile' src='images/nofile.png' height=70 ></img>";
                                         }else{
                                             $folder="posts/".$file_name;
                                             
                                             move_uploaded_file($_FILES['post_img']['tmp_name'],$folder);
                                             $user_id=$_SESSION['bhavesh']['user']['id'];
                                             $name22=$_SESSION['bhavesh']['user']['name'];
                                             $str="INSERT into posts(userid,post_text,post_img,name) values($user_id,'$post_text','$file_name','$name22')";
                                             $re=mysqli_query($con,$str);
                                            
                                             if($re)
                                             {
                                                 header('location:sarktank.php');
                                                 echo "added sucessfully";
                                             }
                                             else {
                                                 echo "somting roung";
                                             }
                                          }
                                     }
                                     // GET POST ALL
                                     function getpost()
                                     {
                                         $con=mysqli_connect("localhost","root","","interect");
                                       
                                         $query="SELECT posts.video,posts.doc, posts.id,posts.created_at,posts.userid,posts.post_img,posts.post_text,posts.created_at,user.name,user.user_profile,user.pro_pic FROM posts JOIN user ON user.id=posts.userid ORDER BY id DESC";
                                         $r=mysqli_query($con,$query);
                                         return mysqli_fetch_all($r,true);
                                     }
                                 
                                     // ONLY FOLLOW USER SEEN POST
                                     function filterposts()
                                     {
                                 
                                     $list= getpost();
                                     $filter_list = array();
                                     foreach ($list as $post1) {
                                        if(checkfollowstatus($post1['userid'])||$post1['userid']==$_SESSION['bhavesh']['user']['id'])
                                        {
                                         $filter_list[]=$post1;  
                                           
                                        
                                        } 
                                        
                                     }
                                     return $filter_list; 
                                     }
                                    
                                    
                                     ?> <?php
                                      //for getting userdata by id
                      function getuser($user_id)
                      {
                          $conn=mysql_connect("localhost","root","");
                          $db= mysql_select_db("interect",$conn);
                      
                          $str ="SELECT * from user WHERE id=$user_id";
                          $result=mysql_query($str);
                          return mysql_fetch_assoc($result);
                          
                          
                      } 
            
                      if(isset($_POST['mymsg1'])){
                          $con=mysqli_connect("localhost","root","","interect");
                          $currentuser = $_SESSION['bhavesh']['user']['id'];
                          $currentpropic= $_SESSION['bhavesh']['user']['pro_pic'];
                          $currentuname= $_SESSION['bhavesh']['user']['name'];
                          $postmsg=$_POST['mymsg1'];
                          $commenttext=$_POST['commenttext'];
                          $msgpost22=msgpost22($postmsg); 
                         $userid= $msgpost22[0]['userid'];
                          
                          $str="INSERT into postmsg(pro_img,uname,post_id,sender,reciver,msg) values('$currentpropic','$currentuname','$postmsg','$currentuser','$userid','$commenttext')";

                           $result=mysqli_query($con,$str);
                           if($result)
                           {
                              header('location:sarktank.php');
                           }
                           else
                           {
                              echo "some thing wrong";
                           }
                      }
                    
                  
                       // GET ALL POST
                      function msgpost22($my)
               {
                   $con=mysqli_connect("localhost","root","","interect");
                   $currentuser=$_SESSION['bhavesh']['user']['id'];
                   $query="SELECT *from posts where id=$my";
                   $r=mysqli_query($con,$query);
                   return mysqli_fetch_all($r,true);
               }
               // GET PERTICULE POST COMMENT BY POST_ID 
               function getpostmsg($my)
               {
                  $con=mysqli_connect("localhost","root","","interect");
                  $currentuser=$_SESSION['bhavesh']['user']['id'];
                  $query="SELECT *from postmsg where post_id=$my";
                  $r=mysqli_query($con,$query);
                  return mysqli_fetch_all($r,true);
               }
               // GET LIKE PERTICULER 
               function checklikestatus($user_id)
               {     $con=mysqli_connect("localhost","root","","interect");
                   $currentuser = $_SESSION['bhavesh']['user']['id'];
                   $query="SELECT * FROM likes   WHERE user_id=$currentuser  && post_id=$user_id";  
                   $run=mysqli_query($con,$query);
                   return mysqli_fetch_assoc($run);
                  
               }
               function likeorunlike($user_id)
               {     $con=mysqli_connect("localhost","root","","interect");
                   $currentuser = $_SESSION['bhavesh']['user']['id'];
                   $query="SELECT post_id   FROM likes where post_id=$user_id && user_id=$currentuser ";  
                   $run=mysqli_query($con,$query);
                   return mysqli_fetch_assoc($run);
                  
               }
               // COUNT LIKE
                   function likecount($user_id)
               {     $con=mysqli_connect("localhost","root","","interect");
                   $currentuser = $_SESSION['bhavesh']['user']['id'];
                   $query="SELECT   * FROM likes where   post_id=$user_id   ";  
                   $run=mysqli_query($con,$query);
                   return mysqli_fetch_all($run);
                  
               }
               // UNLIKE USER POST
              if(isset($_POST['unlike']))
               {
                   $con=mysqli_connect("localhost","root","","interect");
                   $currentuser = $_SESSION['bhavesh']['user']['id'];
                
                   $delpostid=$_POST['unlike'];
                
                   $str="delete from likes where user_id=$currentuser && post_id=$delpostid";
                   $r=mysqli_query($con,$str);

                   
                   if($r)
                   {
                      
                       header('location:sarktank.php');
                       
                   }
                   else
                   {
                    
                       echo "sorry somthing wrong";
                   }
                
                  } 
                         
                  // notifie like
                  function notilike($id)
                  {
                     
                  }
                  // LIKE POST
               if(isset($_POST['like']))
               {
                   $con=mysqli_connect("localhost","root","","interect");
                   $currentuser = $_SESSION['bhavesh']['user']['id'];
                   $postimg=$_SESSION['bhavesh']['user']['pro_pic'];
                   $postname=$_SESSION['bhavesh']['user']['name'];
                   $postid=$_POST['like'];
                   if(checklikestatus($postid))
                   {
                      echo "";

                   }else{
                   $str="insert into likes(post_id,likeimg,likename,user_id,status) values('$postid','$postimg','$postname','$currentuser','1')";
                   
                   $r=mysqli_query($con,$str); 


                          $conn=mysql_connect("localhost","root","");
                          $db= mysql_select_db("interect",$conn);
                      
                          $str2 ="SELECT * from posts WHERE id=$postid";
                          $result2=mysql_query($str2);
                          $r2= mysql_fetch_assoc($result2);
                          
                                           
                                          $getuser=$r2['name'];
                                          $getpostimg2=$r2['post_img'];
                   $getusername=$getuser;
                   $getuserpic=$_SESSION['bhavesh']['user']['pro_pic'];
                   $currentmname=$_SESSION['bhavesh']['user']['name'];
                   
                   $query2="insert into notification(whofollow,whom,propic,kind,post_img)values('$currentmname' ,'$getusername','$getuserpic','like','$getpostimg2')";
                   $yyy=mysqli_query($con,$query2);
                
                   if($r && $yyy)
                   {
                      
                      header('location:sarktank.php');
                       
                   }
                   else
                   {
                    
                       echo "sorry somthing wrong";
                   }
                  }
                  }
              
                  function getpost2029($id)
                  {
                      $con=mysqli_connect("localhost","root","","interect");
                  $currentuser=$_SESSION['bhavesh']['user']['id'];
                  $query="SELECT *from posts where id=$id";
                  $r=mysqli_query($con,$query);
          
                  return mysqli_fetch_assoc($r,true);
                  }
                                      if(isset($_POST['comment']))
                                        {

                                          $_SESSION['commentuser']=$_POST['comment'];
                                          
                                         $_SESSION['bhavesh']['user'];
                                                header('location:messanger.php');
                                             
                                                 
                                      
                                        }
                                        function newmsgcount()
                                        {
                                            $con=mysqli_connect("localhost","root","","interect");
                                            $currentuser_user_id=$_SESSION['bhavesh']['user']['id'];
                                            $query="SELECT * from messages where  to_user_id=$currentuser_user_id && read_status=0";
                                            $run= mysqli_query($con,$query);
                                            return mysqli_fetch_assoc($run);
                                        }
                                              function notificationcount()
                                        {
                                            $con=mysqli_connect("localhost","root","","interect");
                                            $currentuser_user_id=$_SESSION['bhavesh']['user']['name'];
                                            $query="SELECT * from notification where  whom='$currentuser_user_id' ";
                                            $run= mysqli_query($con,$query);
                                            return mysqli_fetch_all($run,true);
                                        }
                                       
                                        function gettime2($date)
                                        {
                                           return date('h:i  jS m a',strtotime($date));
                                        }  
                                             function gettime($date)
                                             {
                                                return date('h:i - (F jS, Y) a',strtotime($date));
                                             }                     
                             if(isset($_POST['like222']))
                     {
                         $con=mysqli_connect("localhost","root","","interect");
                         $currentuser = $_SESSION['bhavesh']['user']['id'];
                         $postimg=$_SESSION['bhavesh']['user']['pro_pic'];
                         $postname=$_SESSION['bhavesh']['user']['name'];
                         $postid=$_POST['like222'];
                         if(checklikestatus($postid))
                         {
                            echo "";

                         }else{
                         $str="insert into likes(post_id,likeimg,likename,user_id,status) values('$postid','$postimg','$postname','$currentuser','1')";
                         $r=mysqli_query($con,$str);
                         
                         $conn=mysql_connect("localhost","root","");
                         $db= mysql_select_db("interect",$conn);
                     
                         $str2 ="SELECT name from posts WHERE id=$postid";
                         $result2=mysql_query($str2);
                         $r2= mysql_fetch_assoc($result2);
                         
                                          
                                         $getuser=$r2['name'];
                                         $getpostimg2=$r2['post_img'];
                  $getusername=$getuser;
                  $getuserpic=$_SESSION['bhavesh']['user']['pro_pic'];
                  $currentmname=$_SESSION['bhavesh']['user']['name'];
                  
                  $query2="insert into notification(whofollow,whom,propic,kind,post_img)values('$currentmname' ,'$getusername','$getuserpic','like','$getpostimg2')";
                  $yyy=mysqli_query($con,$query2);
                         if($r)
                         {
                            
                            header('location:sarktank.php');
                             
                         }
                         else
                         {
                          
                             echo "sorry somthing wrong";
                         }
                        }
                        } 
                                 if(isset($_POST['mymsg122'])){
                                $con=mysqli_connect("localhost","root","","interect");
                                $currentuser = $_SESSION['bhavesh']['user']['id'];
                                $currentpropic= $_SESSION['bhavesh']['user']['pro_pic'];
                                $currentuname= $_SESSION['bhavesh']['user']['name'];
                                $postmsg=$_POST['mymsg122'];
                                $commenttext=$_POST['commenttext22'];
                                $msgpost22=msgpost22($postmsg); 
                               $userid= $msgpost22[0]['userid'];
                                
                                $str="INSERT into postmsg(pro_img,uname,post_id,sender,reciver,msg) values('$currentpropic','$currentuname','$postmsg','$currentuser','$userid','$commenttext')";

                                 $result=mysqli_query($con,$str);
                                 if($result)
                                 {
                                    header('location:sarktank.php');
                                 }
                                 else
                                 {
                                    echo "some thing wrong";
                                 }
                            }
                                                         if(isset($_POST['unlike222']))
                     {
                         $con=mysqli_connect("localhost","root","","interect");
                         $currentuser = $_SESSION['bhavesh']['user']['id'];
                      
                         $delpostid=$_POST['unlike222'];
                      
                         $str="delete from likes where user_id=$currentuser && post_id=$delpostid";
                         $r=mysqli_query($con,$str);
                         if($r)
                         {
                            
                             header('location:sarktank.php');
                             
                         }
                         else
                         {
                          
                             echo "sorry somthing wrong";
                         }
                      
                        } ?>  

 <!-- NAVBAR SECTION START -->                                       
<nav id="nav1">
    <div class="container">
      
        <table>
<tr><td> <img style="margin-left:16px;" id="btn33" src="images/icon/interect2901.png"  height="40" width="40" ></img></td><td>
        <h2 id="LOG"  class="log">
            Interact
            
        </h2> </td>
        <td><input style="color:gray;font-size:15px;padding-left:10px;padding-top:4px;padding-bottom:4px; border-radius:20px;" id="live-search" placeholder=" search people...." style="" name="input" type="text" size='40'></td>
</tr>
<tr><td><td></tr>
</table>
        <script type="text/javascript">
    
            
            
            </script>
        
        
        
        <div class="create">
        <button style="border-radius:10px;" onclick="pdfopen()"><img style="border-radius:0px;padding:2px; background-color:white;" src="images/icon/jjj.png" height="40" width="40"></img></button> 
    <button style="border-radius:40px;" onclick="videopop40()"><img id="video1" style="border-radius:30px; background-color:white;" src="images/icon/youtube.png" height="40" width="40"></img></button>
            <div   class="profile-photo">
          
              <a href="profile.php?u=<?php echo $_SESSION['bhavesh']['user']['name']; ?>">  <img id="probtn" src="images/<?php   print_r($_SESSION['bhavesh']['user']['pro_pic']);?>"  height="40" width="40"></img></a>
                

            </div>
           <button style="border-radius:40px; background-color:none;" onclick="mainpost1()"> <img  id="btn2001" src="images/icon/add2004.png" height="44" width="44"></img></button>
           
          <button onclick="onnoti()" style="border-radius:100%; background-color:white; padding:0px;margin:0px; position:relative;"> <small style="padding:4px; border-radius:40px; background-color:red;color:white;font-size:17px;possition:  position: absolute;"><?php  print_r(count(notificationcount())); ?></small><img id="notiopen"  style="margin-right:5px; background-color:white;"  src="images/icon/noti.png" height="44" width="44"></img></button>
       
   
       
        </div>
    </div>
</nav>

 <!-- END NAVBAR SECTION -->
<!---------------------------------------- main section----------------------------->


<main>
    
    <div class="container">
    
        <!----------------------------------------left----------------------------->
        <div class="left" style="background-color:#dadbdd;" >
        <div   id="searchresult"></div>
         <!-- SIDEBAR EBOVE PROFILE SECTION  START-->
                    <div class="profile">
                            <div class="pro-add">
                             <a href="profile.php?u=<?php echo $_SESSION['bhavesh']['user']['name']; ?>">   <img class="profile-photo" src="images/<?php print_r($_SESSION['bhavesh']['user']['pro_pic']);?>" height="60" width="60"></img></a>
                            </div>
                                <div class="handle">
                                  
                                  <h3><?php 
                                               print_r($_SESSION['bhavesh']['user']['name']);

                                                                 ?></h3>
                                                                 <h5>@<?php 
                                               print_r($_SESSION['bhavesh']['user']['user_profile']);

                                                                 ?></h5>
                                   
                                </div>
                                
                    </div>
                    <!-- SIDEBAR EBOVE PROFILE SECTION  END-->
                            <!----------------------------------------side bar----------------------------->
                           
                            <div class="sidebar" id="SIDEBAR"  >
                            
                                <a  class="menu-item ">
                                    <span > <img style="border-radius:0; background-color:#dadbdd;" src="images/icon/home.png" height="35" width="30"></img></span><h3>home</h3>
                                 </a>
                                 <a  class="menu-item" id="messageopen">
                                    <span  > <img style="border-radius:0; background-color:#dadbdd;" src="images/icon/comment29.png" height="35" width="35"></img><?php $newmsgcont=newmsgcount();if(count($newmsgcont['id'])==0){ echo "";}else{?><small class="notification-count"><?php print_r(count($newmsgcont['id'])); echo "+"; } ?></small></span><h3><button style="border:none;" onclick="messagepop10()">messages</button></h3>
                                 </a>
                                            
                                       <a  class="menu-item" id="theme">
                                           <span> <img style="border-radius:0; background-color:#dadbdd;" src="images/icon/emui-themes-fav.png" height="35" width="30"></img></span><h3><button style="border:none;" onclick="theme40()">theme</button></h3>
                                       </a>
                                       <a href="policies.php" class="menu-item" id="theme">
                                           <span> <img style="border-radius:0; background-color:#dadbdd;" src="images/icon/policy12.jpg" height="35" width="35"></img></span><h3>privecy police</h3>
                                       </a>
                                       <a href="typing test project.php" class="menu-item" >
                                           <span> <img style="border-radius:100%; background-color:#dadbdd;" src="images/icon/Uiconstock-Ios8-Setting-Notepad (1).ico" height="35" width="35"></img></span><h3>typing game</h3>
                                       </a>
                                       <?php if(isset($_POST['logout1'])){
                                        unset($_SESSION['bhavesh']['user']);
                                        header('location:login.php');
                                       } ?>
                                       <a href="login.php" class="menu-item" id="theme">
                                           <span> <img style="border-radius:100%; background-color:#dadbdd;" src="images/icon/IMG_20220504_180132.jpg" height="35" width="35"></img></span><h3><form method="POST"><button name="logout1">logout</button></form></h3>
                                       </a>
                                      
                        
                            </div>
                           
                            <!----------------------------------------END OF SIDEBAR----------------------------->
                            
        </div>
         <!----------------------------------------END LEFT BAR------------------------------------------>

    
                                <!----------------------------------------middle----------------------------->
                               
 
                                <div class="middle">
                               
                        
                                    <!---------------------------- FILDS------------------------------->
                                    <?php 
                                             
                                             //follow suggestion
                                         
                                                                                     //for checking the user is followed by current user or not
                                                                                //for filter follow suggestion
                                            
                        ?>
                    
                         <script>
                          
                            function myFunction ()
                                {
                                    
                                
                                postpop1.style.display='grid';
                                 
                                
                               
    
                                }
                             
                        
                         </script>
                       
                       
                      
                                  <?php   $posts=filterposts(); if (count($posts)<1) {
                                        echo "<br><br>
                                        <center><img src='images/6ad1d1eba400880e3c3de062fcb13576(1).png' width=800 height=500></img><br>follow some one</center>";
                                    }else{
                                    foreach ($posts as $post) {
                                        
                                   
                                    ?> 
                                        <div class="feeds"  >
                                        <div class="feed" id="FILDS">
                                          
                                            <div class="head">
                                                <div class="user">
                                                    <div class="profil-photo">
                                                    <a href="profile.php?u=<?php echo $post['name'] ?>"> <img src="images/<?php echo $post['pro_pic']; ?>" height="60" width="60"></img></a>
                                                    </div>
                                                    <div class="ingo">
                                                        <h2><?php echo $post['name']?></h2><h4 class="username">@<?php echo $post['user_profile']; ?></h4>
                                                       <br>
                                                       <?php echo "<h2>    </h2>";?>
                                                        <h3>caption  :  <?php echo "<font color='red'>".$post['post_text']."</font>"; ?></h3>
                                                    </div>
                                                   
                                                </div>
                                                <small> <?php print_r( gettime($post['created_at']));?></small><br>
                                                <span class="edit">
                                                    <!-- three dots -->
                                                   
                                                 <?php
                                                 
                                                  if($_SESSION['bhavesh']['user']['name']==$post['name']){ ?><form method="POST"><button style="border:none;background-color:white;" name="delpost" value="<?php print_r($post['id']); ?>" id="editpostbtn2" class="editpostbtn"  ><img style="background-color:white;border:1px solid black; border-radius:10px; " src="images/icon/trash.jpg" width="40" height="40"></img></button></form><?php }else echo""; ?>                                 
                                               <div class="editpost">
<div class="editpost2">
  <table >
    <tr><td width='37px'></td><td>  <input type="submit" id="editcencel" value="X" ></td></tr>
    <tr><td colspan='2'><a class="subtype" ><h4> delete</h4></a></td></tr>
    <tr><td colspan='2'><a  class="subtype" id="subtheme"><h4>theme</h4></a></td></tr>
  
                                    </table>
</div>
</div>
         
                                                  </span> 
                                            </div><?php global $file_type;   if($post['video']) {  ?><center><form method="POST"><button id="postidby" style="border:none; font-size:19px; background-color:white;"  name="ppp"  value="<?php print_r($post['id']); ?>" >[ view ]</button></form></center>
                                               <center> <video   height="500" width="750"   controls ><source src='video/<?php echo $post['video']?>' type='video/mp4'></video></center>
                                                <?php }else if($post['doc']){?><center><embed type="application/pdf" src="pdf/<?php echo $post['doc'] ?>" height="500" width="750" ></center><?php } else { ?>
                                            <div style="border-radius:0px;" class="photo " id=" postview<?=$post['id']?> "><center>
                                         <form method="POST"><button id="postidby"  type="submit"style="border:none; background-color:white;"  name="ppp"  value="<?php print_r($post['id']); ?>" ><img   style="border-radius:0px;" class="postpopbtn  " src="posts/<?php echo $post['post_img']; ?>"  data-bs-toggle="postpop1"  height="500" width="750" ></img></button></form>
                                                
                                            
                 
                                    </center>
                                            </div><?php global $postmsg;  } ?>
                                             
                                            <div class="action-button">
                                              
                                                <div class="bookmark">
                                                    <!-- bookmark button -->
                                                </div>
                                            </div>
                                      
                                            <div class="caption">
                                             <form method="POST"><table><tr><td>
                                                    <?php if(!likeorunlike($post['id'])&& $_SESSION['bhavesh']['user']['id']){ ?><button name="like"  value="<?php echo $post['id']; ?>" style="background-color:white; border:0px;"><img class="like2001" style="margin-left:102px; margin-right:30px; "  src="images/icon/heart.png" height="35" width="35"></img></button>
                                                    <?php } else{?><button name="unlike" value="<?php echo $post['id']; ?>"  style="border:0px; background-color:white;"><img class="like2001" style="margin-left:102px; margin-right:30px;"  src="images/icon/fullheart.png" height="30" width="30"></img></button><?php }  ?></td><td><h3 style="display:inline-block; ">like * <?php $likecount=likecount($post['id']); print_r(count($likecount)); ?></h3></td>
                                                    </tr></table>
                                                </form>
                                               <br>
                                                <div><form method="POST">
                                                    <table>
                                                        <?php   ?>
                                                        <tr><td><textarea style="border-bottom:2px solid green; border-top:none; border-left:none; border-right:none; margin-left:50px;" name="commenttext"  cols="100" rows="2"></textarea></td><td><button style="border-radius:25px 0px 25px 0px; font-size:19px;padding:8px; border:1px solid red;" name="mymsg1" value="<?php print_r($post['id']); ?>">send</button></td></tr>
                                                      
                                                
                                                    </table>
                                                </form>
                                        <br>
                                                <div style="margin-left:30px;">
                                                comments * <?php  $getpostmsg=getpostmsg($post['id']);  print_r(count($getpostmsg)); ?></div>
                                                <div style="height:100px; overflow-x:hidden;">
                                                 <?php
                                                               
                                                              
                                                               if(empty($getpostmsg))
                                                               {
                                                                echo "";
                                                               }else{
                                                               foreach($getpostmsg as $getpost29=>$n)
                                                              {
                                                                
                                                               ?>
                                                                 
                                                               <div style="margin-top:9px; border-radius:30px; "><table><tr><td style="border-radius:30px; width:40px;"><img style="margin-left:7px; border-radius:59px; height:40px; width:40px;" src="images/<?php echo $n['pro_img'] ?>" ></img></td><td ><?php print_r($n['uname']); ?> : </td><td>
                                                               <p style="margin-left:14px;"> <?php print_r($n['msg']); ?></p>
                                                                <td></tr></table>
                                                              </div>
                                                               <?php } }?>
                                                           </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <?php 
                                    }}
                            
                                       
                                         
                                        ?>
                                    
                                
                                   
                               
                                </div>
                              <!--=================== end middle============================= -->
                                <!----------------------------------------right----------------------------->
                                
                                <div class="right">
                               
                                    <div class="messages" id="MESSAGES">
                                    <div id="HEDING" class="heading">
                                          <h4>Friend Suggestion</h4>                         
                                        </div>
                                   <br>
                                      
                                            <!-------------- messages----------- -->
                                           
                                            <div class="all-messages">
                                                <?php 
                                                // GET PRO_PIC PERTICULER USER BY ID
                                                    
                                                 if(count($follow_seggestion)<1){
                                                     echo "<img src='images/icon/jjjjk.png' height=200 width=200></img>";
                                                 }else{
                                                foreach ($follow_seggestion as $suser) {
                                              if($suser['ac_status']=='0'){echo "";}else{
                                                 ?>
                                                 
                                            <div class="message">
                                                <div class="profile-photo"><table><tr><td>
                                        
                                                <a href="profile.php?u=<?php echo $suser['name'] ?>"><img src="images/<?php echo $suser['pro_pic']; ?>" height="54" width="54"></img></a></td><td><div class="message-body">
                                                         <table class="followheight"><tr><td>
                                       
                                                         <h5><a href="profile.php?u=<?php echo $suser['name'] ?>"><font color='black' ><?php echo $suser['name']; ?></font></a></h5></td></tr><tr><td>@<?php echo $suser['user_profile']; ?></td></tr></table>
                          
                                                         <form method="post">
                                                            </div></td><td><button name='follow' class="nnn  followbtn" value='<?php echo $suser['id']; ?>'>follow</button></td></tr></table></div>
                                                </form>
                                            
                                                        
                                            </div>
                                           <?php }}} ?>
                                            </div>
                                        </div>
                                        <br>
                                        <!-- ------------end of messaage ------------>
                                        <!-------------- friend requests ------------->
       
                                       
                            
                                </div>
                    </div>
                </main>
                        
                <?php 
                 ?>
                 <div class="pdf1">
                    <div class="pdf2">

                                                
        <div class="postq"><h3>send doc</h3></div>
      
      <form  method="POST" enctype="multipart/form-data" >
              <table>
         </tr><tr><td  colspan=3><div id="display_image"><embed  style="display:none;"id="post_doc" type="application/pdf" src="" height="245" width="400"></div></td> 
          </tr>
          <tr><td colspan=3><input type="text" name="post_text" placeholder="caption" size="55"></td></tr>
          <tr><td>              
              <input type="file" id="select-post-doc" name="post_doc" multiple require></td>
              
              <td><input type="submit" class="nnn" id="postbtn3"  name="adddoc" value="post"></td>
              <td><input onclick="pdfclose()" type="button" class="nn1"   value="cencel"></td></tr>
          </table>
          </form></center>
                                              </div>
                                              </div>
<!--============================ theme customization============================== -->
<div class="customize-theme">
    <div class="card">
        <table><tr><td><h2>customize your view</h2></td><td ><button style="margin-left:140px;background-color:red;color:white;x" onclick="them40close()" >X</button></td></tr></table>
       
        <!------------------- font size-------------------- -->
     
        <!------------------ primary colors------------- -->
      
        <div class="color">
            <h4>background</h4>
            <div class="choose-color">
            <form method="POST">
             <button name="color1" value="rgb(226, 218, 218)"   class="color-1"></button>
             <button name="color2" value="#edc8dd"  class="color-2"></button>
             <button name="color3" value="#c8e6d5" class="color-3"></button>
             <button name="color4" value="#e3bd9d"  class="color-4"></button>
             <button name="color5" value="hsl(202,75%,60%)"  class="color-5"></button>
             <button name="bg2" value="hsl(252,30%,17%)"  class="color-6"></button>
                </form>
            </div>
        </div>
        
        <!-- background color -->
     
            <script>
                function change_theme(color)
                {
                    document.getElementById('nav1').style.backgroundColor='#4e4e4f';
                    document.getElementById('change_m').style.backgroundColor=color;
                    document.getElementById('LOG').style.color='white';
                    
                    document.getElementById('HEDING').style.backgroundColor='white'
                    document.getElementById('HEDING').style.borderRadius='20px';
            
                   
                }
                </script>
        </div>
    </div>
</div>
<!-- -------------------------------------------------------------------------------- -->\
      
<div class="main-post">
    <div class="modal"><center>



        <div class="postq"><h3>create post</h3></div>
      
        <form  method="POST" enctype="multipart/form-data" >
                <table>
           </tr><tr><td  colspan=3><div id="display_image"><img src="" style="display:none;" id="post_img" height="245" width="400"></img></div></td> 
            </tr>
            <tr><td colspan=3><input type="text" name="post_text" placeholder="caption" size="55"></td></tr>
            <tr><td>              
                <input type="file" id="select-post-image" name="post_img" multiple></td>
                
                <td><input type="submit" class="nnn" id="postbtn3"  name="addpost" value="post"></td>
                <td><input onclick="imgclose40()" type="button" class="nn1" id="cencel22"  value="cencel"></td></tr>
            </table>
            </form></center>
        
  </div>
</div>
<div class="videopop">
    <div style="background-color:white; border-radius:30px;padding:10px;" class="videopop2"><center>



        <div class="postq"><h3>post video</h3></div>
        <?php 
 
?>
        <form  method="POST" enctype="multipart/form-data" >
                <table>
           </tr><tr><td  colspan=3><div id="display_image"><video style="display:none;" height="245" width="400"  id="post_video"   controls ><source src="" type='video/mp4'></video></div></td> 
            </tr>
            <tr><td colspan=3><input type="text" name="video_text" placeholder="caption" size="55"></td></tr>
            <tr><td>              
                <input id="select-post-video" type="file"  name="video" ></td>
                
                <td><input type="submit" class="nnn" id="postbtn3"  name="addvideo" value="post"></td>
                <td><input onclick="videoclose40()" type="button" class="nn1" id="videoclose"  value="cencel"></td></tr>
            </table>
            </form></center>
        
  </div>
</div>

<div class="profilesub">
<div class="submanu">
  
<a class="subtype" href="profile.php?u=<?php echo $_SESSION['bhavesh']['user']['name'] ?>"><h4><font color='white'>profile</h4></font></a>
    <a  class="subtype" id="subtheme"><h4>theme</h4></a>
    <a   class="subtype" href="login.php"><h4>logout</h4></a>

</div>
</div>


<!-- function for getting id of chat user -->
<?php




?>
<div id="mybox" class="messagemodal">
<div clsss="mymessage"  >
<table   style="  margin-left:5px;border-radius:10px;  box-shadow: 0 0 2rem  var(--color-primary); margin-top:80px; border-right:1px solid black; width:520px; height:800px; display:block; background-color:white;"  >
    <tr >
    
        <td style="font-size:20px; background-color:hsl(252,30%,10%); color:white;  border-bottom:2px solid black;" >
    Messages
</td>
<td style="border-bottom:1px solid black;"><table><tr><td  ></td><td><input onclick="messageclose()" class='messageclose' style="background-color:red; color:white;" type="submit" value="X"></td></tr></table></td>
</tr>
<tr><td>
<div class="tlbmsg" style="margin-bottom:390px;   margin-left:10px;padding-right:25px;">
<?php $chats=getallmessages();
                                        $chatlist="";
                                   
                                            if(empty($chats)){echo "";}
                                                else{
                                              foreach($chats as $chat)
                                              {
                                              $ch_user=getuser($chat['user_id']);
                                              $seen=false;
                                              if($chat['messages'][0]['read_status']==1 || $chat['messages'][0]['from_user_id']==$_SESSION['bhavesh']['user']['id'])
                                              {
                                                $seen=true;
                                              }
                                            
                                              $chatlist.='   
                                              <div ><table width="370px"  padding-right:10px;   style=" font-color:black; margin-top:10px; border-radius:20px; background-color:#d8d8e1; "  ><tr><td>
                                         
                                         <a href="#"><img src="images/'. $ch_user['pro_pic'].'" height="54" width="54"></img></a></td><td><div >
                                                  <table width="200px"   class="followheight" ><tr><td>
                                
                                                  <h5>'. $ch_user['name'].'</h5></td></tr><tr><td>@'. $ch_user['name'].'</td></tr></table>
                   
                                               
                                                     </td><td width="100px">'.substr($chat['messages'][0]['msg'],0,5).'...</td><td>'. gettime2($chat['messages'][0]['create_at']).'</td><td width="400px">'.($seen?'':'<img src="images/icon/read.png" height="20" width="20"></img>').'</td>
                                                     <td><form method="POST"><button style="border:none; background-color:white;k" name="comment" value="'.$chat['user_id'].'"><img style="backgrond-color:white;" height="25" width="25" src="images/icon/eyes1.png"></img></button></form>
                                                     </td>
                                                     </tr></table>
                                         
                                     
                                                 
                                     </div>';
                                     
                                        
                                                ?>
                                          
                                              <?php
                                              }
                                         
                                              if(empty($chats))
                                              {
                                                echo "";
                                              }else{
                                            echo $chatlist; 
                                              }
                                            }
                                           ?>
                                            
</td></tr>
</table>
</div>
</div>



<!-- JavaScript Bundle with Popper -->
<?php 

if(isset($_POST['dnoti']))
{
    $con=mysqli_connect("localhost","root","","interect");
$id=$_POST['dnoti'];
$query="delete from notification where id=$id";
$run= mysqli_query($con,$query);
}
if(isset($_POST['dnoti2']))
{
    $con=mysqli_connect("localhost","root","","interect");
$id=$_POST['dnoti2'];
$query="delete from notification where id=$id";
$run= mysqli_query($con,$query);
}
?>
<div class="noti">
    <div class="noti2">
<table style="margin-left:10px;margin-bottom:20px; border-bottom:1px solid black;"><tr><td><h2>notification</h2></td><td></td><td><button onclick="noticlose40()" class="noticlose" style="margin-left:180px;background-color:red; color:white;">X</button></td></tr></table>

    <div class="message" style="margin-bottom:4px; overflow:hidden;">     
    <?php  $jdk1=notificationcount(); 
if($jdk1=='')
{

}else{
 foreach($jdk1 as $jdk)
              {  if($jdk['kind']=="follower"){ ?>              
          <table  style="margin-left:10px; margin-bottom:7px; background-color:#d8d8e1;padding:7px;">
            <tr>
            <td>
               <img height="50" width="50" src="images/<?php print_r($jdk['propic']); ?>"></img>
            </td>
            <td><?php print_r($jdk['whofollow']); ?>is follow you <?php print_r($jdk['whom']); ?><br><?php print_r(gettime($jdk['current_time'])); ?></td>
            <td><form method="POST"><button type="submit" name="dnoti"  value="<?php echo $jdk['id']; ?>" style="border-radius:30px;margin-left:20px; background-color:red;color:white;">X</button></form></td>
        </tr>
        </table>     
        <?php } elseif($jdk['kind']=="like"){ ?>
        
           <table  style="margin-left:10px; margin-bottom:7px; background-color:#d8d8e1;padding:7px;">
            <tr>
            <td>
            <?php if($jdk['post_img']){ ?>  <img style="border-radius:0px;" height="50" width="50" src="posts/<?php print_r($jdk['post_img']); ?>"></img> <?php } else {?><video   height="40" width="40"   controls ><source src='video/<?php echo $jdk['video']?>' type='video/mp4'></video><?php } ?> 
            </td>
            
            <td><?php print_r($jdk['whofollow']); ?>is  like  <img height="20" width="20" src="images/icon/fullheart.png"></img> your <?php if($jdk['post_img']){ echo "post";  }else echo "video"; ?> <br><?php print_r(gettime($jdk['current_time'])); ?></td>
            <td><form method="POST"><button type="submit" name="dnoti2"  value="<?php echo $jdk['id']; ?>" style="border-radius:30px;margin-left:20px; background-color:red;color:white;">X</button></form></td>
        </tr>
        </table> 
        <?php } }}?>                         
              </div>    
                      
    </div>
</div>

<script>
    
    //images load on post
var input = document.querySelector("#select-post-image");
input.addEventListener("change", preview);

function preview()
{
    var fileobject = this.files[0];
    var filereder = new FileReader();
    filereder.readAsDataURL(fileobject);
    filereder.onload = function()
    {
        var image_src = filereder.result;
        var image = document.querySelector('#post_img');
        image.setAttribute('src', image_src);
        image.setAttribute('style','display:');
    }
}
//video load on post
var input2 = document.querySelector("#select-post-video");
input2.addEventListener("change", preview2);

function preview2()
{
    var fileobject2 = this.files[0];
    var filereder2 = new FileReader();
    filereder2.readAsDataURL(fileobject2);
    filereder2.onload = function()
    {
        var image_src1 = filereder2.result;
        var image1 = document.querySelector('#post_video');
        image1.setAttribute('src', image_src1);
        image1.setAttribute('style','display:');
    }
}
$(document).ready(function(){
                $("#live-search").keyup(function(){
                    var input =$(this).val();
                    if(input != '' )
                    {
                        $.ajax({
                            url:"livesearch.php",
                            method:"POST",
                            data:{input:input},
                            success: function(data)
                            {
                                $("#searchresult").css("border","1px solid black");
                                $("#searchresult").css("background-color","white");
                                $("#searchresult").html(data);
                                $("#searchresult").css("display","grid");
                            }
                        });
                    }
                    else
                    {
                        $("#searchresult").css("display","none");
                        
                    }

                });
            });
            var input3 = document.querySelector("#select-post-doc");
input3.addEventListener("change", preview3);

function preview3()
{
    var fileobject3 = this.files[0];
    var filereder3 = new FileReader();
    filereder3.readAsDataURL(fileobject3);
    filereder3.onload = function()
    {
        var image_src3 = filereder3.result;
        var image3 = document.querySelector('#post_doc');
        image3.setAttribute('src', image_src3);
        image3.setAttribute('style','display:');
    }
}
    </script>
<!------------------------ POST-POP-UP -------------------- -->   
<?php if(isset($_POST['ppp'])) {?>
                                    
                                  
                                    <?php 

                     function likeorunlike2($user_id)
                                               {     $con=mysqli_connect("localhost","root","","interect");
                                                   $currentuser = $_SESSION['bhavesh']['user']['id'];
                                                   $query="SELECT post_id   FROM likes where post_id=$user_id && user_id=$currentuser ";  
                                                   $run=mysqli_query($con,$query);
                                                   return mysqli_fetch_assoc($run);
                                                   
                                               }
                                               // COUNT LIKE
                                                   function likecount2($user_id)
                                               {     $con=mysqli_connect("localhost","root","","interect");
                                                   $currentuser = $_SESSION['bhavesh']['user']['id'];
                                                   $query="SELECT   * FROM likes where   post_id=$user_id   ";  
                                                   $run=mysqli_query($con,$query);
                                                   return mysqli_fetch_all($run);
                                                   
                                               }
                                               //FOR LIKE COUNT
                                               function likecount11()
                                               {     $con=mysqli_connect("localhost","root","","interect");
                                                   $llll=$_POST['ppp'];
                                                   $currentuser = $_SESSION['bhavesh']['user']['id'];
                                                   $query="SELECT   * FROM likes where   post_id=$llll   ";  
                                                   $run=mysqli_query($con,$query);
                                                   return mysqli_fetch_all($run,true);
                                                  
                                               }$like11=likecount11();
                                               //GET POST COMMENT
                                        function getpostmsg11()
                                        {
                                           $llll=$_POST['ppp'];
                                           $con=mysqli_connect("localhost","root","","interect");
                                           $currentuser=$_SESSION['bhavesh']['user']['id'];
                                           $query="SELECT *from postmsg where post_id=$llll";
                                           $r=mysqli_query($con,$query);
                                           return mysqli_fetch_all($r,true);
                                        }$mm=getpostmsg11();
                                        //FOR GET ALL POST INFORMATION
                                      function getpost11()
                                      {
                                       $llll=$_POST['ppp'];
                                          $con=mysqli_connect("localhost","root","","interect");
                                          $currentuser = $_POST['ppp'];
                                          $query="SELECT posts.video, posts.id,posts.created_at,posts.userid,posts.post_img,posts.post_text,posts.created_at,user.name,user.user_profile,user.pro_pic FROM posts JOIN user  ON user.id=posts.userid where posts.id=  $llll";
                                          $r=mysqli_query($con,$query);
                                          return mysqli_fetch_all($r,true);
                                      }$post11=getpost11();  ?>
               <div class="postpop" id="exampleModal">
                                               <!-- POST POPUP CLOSE START -->
                                               <table ><tr><td width="960px"></td><td><input onclick="postclose40()" class="postpopclose " onclick="closme()" type="submit" value="X"></td></tr></table>
                                               <!-- POST POPUP CLOSE end -->                                           
                                                                                                                        
                                                   
                                                  
                                                    
                                                   <table border='4' style="border-radius:10px;background-color:white;"  bordercolor='black' >
                                                       <tr> <?php ?>
                                                       <td > <!--  VIDEO POP START -->
                                                           <?php  if($post11[0]['video']) {  ?>
                          <center> <video   height="500" width="750"   controls ><source src='video/<?php echo $post11[0]['video']?>' type='video/mp4'></video></center>
                           <?php }else{?>
                                                           <!--  VIDEO POP START -->
                       <div style="border-radius:0px;" class="photo " id=" postview<?=$post['id']?> "><center>
                           <!-- POST IMAGE POP START -->
                   <img   style="border-radius:0px;" class="postpopbtn  " src="posts/<?php echo $post11[0]['post_img']; ?>"  data-bs-toggle="postpop1"  height="500" width="690" ></img>
                           <!-- POST IMAGE POP END -->
                           <?php } ?>
                       

               </center>
                                                                                                   </td>
                                                               <td>
                                                                   <table class="subtable2003" bgcolor="white"><tr><td >
                                                               <div class="feeds"  >
                                                                            <table >             
                                                                         <tr style="border:1px solid black;" ><td style=" border-bottom:1px solid black;" > <a href="profile.php?u=<?php echo $post11[0]['name'] ?>"> <img src="images/<?php echo $post11[0]['pro_pic']; ?>" height="60" width="60"></img></a></td>
                                                                                                       
                                                                                                       
                                                                               <td style="border-bottom:1px solid black; "  width='400px'><h3><?php echo $post11[0]['name']?></h3><h4>@<?php echo $post11[0]['user_profile']; ?></h4>
                                                                                                          <br>
                                                               </td></tr>
                                                                                                        <tr ><td style="border-bottom:1px solid black;"><h4>caption  :  </h4></td><td style="border-bottom:1px solid black;"><?php echo $post11[0]['post_text']; ?></td></tr>
                                                               </table>            
                                                                 </td></tr>
                                                                 <!-- COMMENT SECTION START -->
                                                               <tr><td ><br><form method="POST"><textarea style="border-bottom:2px solid green; border-top:none; border-left:none; border-right:none; margin-left:0px;" name="commenttext22"  cols="50" rows="1"></textarea><button type="submit" style="border-radius:25px 0px 25px 0px; font-size:15px;padding:8px; border:1px solid red;" name="mymsg122" value="<?php print_r($post11[0]['id']); ?>">send</button></form> <div style="margin-left:30px;"><br>comments * <?php  $getpostmsg=$mm ; print_r(count($getpostmsg)); ?></div>
                                                                                                   <div style="height:250px; overflow-x:hidden;">
                                                                                                    <?php
                                                                                                                  
                                                                                                                 
                                                                                                                  if(empty($getpostmsg))
                                                                                                                  {
                                                                                                                   echo "";
                                                                                                                  }else{
                                                                                                                  foreach($getpostmsg as $getpost29=>$n)
                                                                                                                 {
                                                                                                                   
                                                                                                                  ?>
                                                                                                                    
                                                                                                                  <div style="margin-top:9px; border-radius:30px; "><table><tr><td style="border-radius:30px; width:40px;"><img style="margin-left:7px; border-radius:59px; height:40px; width:40px;" src="images/<?php echo $n['pro_img'] ?>" ></img></td><td ><?php print_r($n['uname']); ?> : </td><td>
                                                                                                                  <p style="margin-left:14px;"> <?php print_r($n['msg']); ?></p>
                                                                                                                   <td></tr></table>
                                                                                                                 </div>
                                                                                                                  <?php } }?>
                                                                                                              </div></td><td></td></tr>
                                                                 <!-- COMMENT SECTION END -->                                              
                                                                 <!-- LIKE SECTION START -->
                                                               </table>
                                                                   <td style="width:300px;"><div style="overflow-x:hidden; height:300px">
                                      
                                                                   <h3><table><tr><td><form method="POST">  <center style="margin-left:23px;"> *likes <?php print_r(count($like11)); ?></center></td><td><form method="POST" style="float:left;"><table><tr><td>
                             <?php if(!likeorunlike2($post11[0]['id'])&& $_SESSION['bhavesh']['user']['id']){ ?><button type="submit" name="like222"  value="<?php echo $post11[0]['id']; ?>" style="background-color:white; border:0px;"><img class="like2001" style="margin-left:102px; margin-right:30px; "  src="images/icon/heart.png" height="35" width="35"></img></button>
                               <?php } else{?><button type="submit" name="unlike222" value="<?php echo $post11[0]['id']; ?>"  style="border:0px; background-color:white;"><img class="like2001" style="margin-left:102px; margin-right:30px;"  src="images/icon/fullheart.png" height="30" width="30"></img></button><?php }  ?></form></td>
                               </tr></table>
                           </form></td></tr></table></h3>
                                                                   <?php if($like11==''){echo "";}else{ foreach($like11 as $ml){ ?>
                                                                       <table>
                                                                           <tr>
                                                                               <td width=100x>
                                                                                <img src='images/<?php echo $ml['likeimg']; ?>' height='30' width='30'></img>                                   
                                                                       </td>
                                                                       <td ><?php echo $ml['likename']; ?></td>
                                                                   </tr></table><?php }} ?>
                                                                   </div>
                                                                  </td>
                                                               </tr>
                                                               </table> 
                                                                <!-- LIKE  SECTION END -->
                                                               
                                                   
                                                                                                                 
                                                   
                                                                      
                                           
                                                       
                                                               
                                                               </div>
                                                                <!------------------------ POST-POP-UP END -------------------- --> 
                  <?php } ?>
                  <script>
    var messagemodal=  document.querySelector('.messagemodal');
    var customizetheme = document.querySelector('.customize-theme');
    var videopop401= document.querySelector('.videopop');
    var mainpost40 = document.querySelector('.main-post');
    var noti40 = document.querySelector('.noti');
    var postpop40 = document.querySelector('.postpop');
    var pdf1=document.querySelector('.pdf1');
    function postclose40()
    {
        postpop40.style.display="none";
    }
    function pdfclose()
    {
        pdf1.style.display="none";
    }
    function pdfopen()
    {
        pdf1.style.display="grid";
    }
    function onnoti()
    {
        noti40.style.display="grid";
    }
    function noticlose40()
    {
        noti40.style.display="none";
    }
    function videopop40()
    {
        videopop401.style.display="grid";
    }
    function mainpost1()
    {
        mainpost40.style.display="grid";
    }
    function imgclose40()
    {
        mainpost40.style.display="none";
    }
    function videoclose40()
    {
        videopop401.style.display="none";
    }
 function messagepop10()
{
messagemodal.style.display="grid";
}
function messageclose()
{
 messagemodal.style.display="none";
}

function theme40()
{
    customizetheme.style.display="grid";
}
function them40close()
{
    customizetheme.style.display="none";
}
    </script>


<?php }else { echo "<center style='margin-top:10%;'><img style='border-radius:100%' src='images/icon/interect2901.png'></img><h1>no data found</h1><br><h2>or my be logout you <a href='login.php'>go login page?</a></h2></center>" ;} ?>

</body>

</html>