<!--
NAME OF PROJECT: INTERACT SOSCIL MIDEA SITE
DVELOPER NAME  : CHAVDA BHAVESH
YEAR           : 2023
COLLAGE        : S C GANDHI BCA COLLAGE
PAGE           : PROFILE PAGE 
-->
<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="profile.css" rel="stylesheet" >
    <style>
        .postpop
{

    background-color:rgba(51, 50, 50, 0.5); 
    width: 100%;
    height: 100%;
    position: fixed;
    top:0;
    left:0;
    overflow-x: hidden;
    z-index: 100;
    text-align: center;
    display: grid;
    place-content: center;
    overflow-x: hidden;
}
        </style>
</head>
<body style="background-color:<?php $profile=getuserbyusername($_GET['u']); print_r($profile['color']);  ?>" id="change_m">
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
                                          $query="SELECT posts.video,posts.doc, posts.id,posts.created_at,posts.userid,posts.post_img,posts.post_text,posts.created_at,user.name,user.user_profile,user.pro_pic FROM posts JOIN user  ON user.id=posts.userid where posts.id=  $llll";
                                          $r=mysqli_query($con,$query);
                                          return mysqli_fetch_all($r,true);
                                      }$post11=getpost11();  ?>
               <div class="postpop" id="exampleModal">
                                               <!-- POST POPUP CLOSE START -->
                                               <table ><tr><td width="960px"></td><td><input class="postpopclose " onclick="closme()" type="submit" value="X"></td></tr></table>
                                               <!-- POST POPUP CLOSE end -->                                           
                                                                                                                        
                                                   <div class="postpop1"  >
                                                  
                                                    
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
                                                               </div>
                                                                <!------------------------ POST-POP-UP END -------------------- --> 
                  <?php } ?>
    <nav id="nav1" style="background-image:url('images/<?php  print_r($profile['bio_pic']);   ?>');">
       
    <div class="container">
           <div class="profil-photo">
            <?php function getuserbyusername($username)
                {
                    $con=mysqli_connect("localhost","root","","interect");
                    $query= "SELECT * FROM  user WHERE name='$username'";
                    $run=mysqli_query($con,$query);
                    return mysqli_fetch_assoc($run);
                }
                function gettime($date)
                {
                   return date('h:i - (F jS, Y) a',strtotime($date));
                } 
                 
                                              ?>
            <img id="bigprobtn" src="images/<?php   echo $profile['pro_pic'];?>" height="170" width="170"></img>
            <div class="username" ><div>
        <h1 style="background-color:white;padding:15px; border-radius:20px;" >   <?php     
                                           print_r($profile['name']);

                                                                 ?></h1></div>
                                                                 <h4 ><small style="background-color:white;padding:10px; border-radius:20px;" >@<?php     
                                           print_r($profile['user_profile']);

                                                                 ?></small></h4>
                                                              
                                                            
                                                                
           </div>
          
           </div>
        <div>
            <?php
       
       function unfollouser29($user_id)
       {
        global $profile;
           $con=mysqli_connect("localhost","root","","interect");
           $currentuser = $_SESSION['bhavesh']['user']['id'];
           $query="DELETE FROM follow_list WHERE follower_id=$currentuser && userid=$user_id";
           return mysqli_query($con,$query);
       }
                  if(isset($_POST['unfollow29']))
                                                       {
                                                           $user_id=$_POST['unfollow29'];
                                                           if(unfollouser29($user_id)){
                                                               $response['status']=true;
                                                               header("location:profile.php?u=".$profile['name']);
                                                            
                                                           }
                                                           else {
                                                               $response['status']=false;
                                                           }
                                                           echo json_encode($response);
                                                       }
                                                       if(isset($_POST['unfollow30']))
                                                       {
                                                           $user_id=$_POST['unfollow30'];
                                                           if(unfollouser29($user_id)){
                                                               $response['status']=true;
                                                               header("location:profile.php?u=".$profile['name']);
                                                            
                                                           }
                                                           else {
                                                               $response['status']=false;
                                                           }
                                                           echo json_encode($response);
                                                       }
                                                       if(isset($_POST['unfollow2901']))
                                                       {
                                                           $user_id=$_POST['unfollow2901'];
                                                           if(unfollouser29($user_id)){
                                                               $response['status']=true;
                                                               header("location:profile.php?u=".$profile['name']);
                                                            
                                                           }
                                                           else {
                                                               $response['status']=false;
                                                           }
                                                           echo json_encode($response);
                                                       }
                                                       function  getactivechatuserid()
{
    $con=mysqli_connect("localhost","root","","interect");
    $currentuser_user_id=$_SESSION['bhavesh']['user']['id'];
    $query= "SELECT from_user_id,to_user_id from messages where to_user_id=$currentuser_user_id || from_user_id=$currentuser_user_id ORDER BY id DESC";
    $run= mysqli_query($con,$query);
    $data= mysqli_fetch_all($run,true);
    $ids=array();
    if($data=="")
    {echo "";}
    else{
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
                                                       $chats=getallmessages();
                                        $chatlist="";
                                        if(isset($_POST['comment']))
                                        {

                                          $_SESSION['commentuser']=$_POST['comment'];
                                          
                                              
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
                                       
                                                       if(isset($_POST['unfollow1975']))
                                                       {
                                                           $user_id=$_POST['unfollow1975'];
                                                           if(unfollouser29($user_id)){
                                                               $response['status']=true;
                                                               header("location:profile.php?u=".$profile['name']);
                                                            
                                                           }
                                                           else {
                                                               $response['status']=false;
                                                           }
                                                           echo json_encode($response);
                                                       }
             ?>
      <table class="follow_list" ><tr>
      <th><div  class="following"><table><tr><td><?php print_r(count(currentpost())); ?></td><td> posts</td></tr></table></div></th>    <th ><div id="followopen" class="following"><table><tr><td><?php print_r(count(notfollow())); ?></td><td> following</td></tr></table></div> </th> <th><div class="follower" id="followerbtn1"><table ><tr><td><?php print_r(count(kkk())); ?></td><td> follower</td></tr></table></div></th><th>
      <th><table><tr><td>
        <form method="post">
        <?php if($_SESSION['bhavesh']['user']!=$profile) {if(checkfollowstatus($_SESSION['bhavesh']['user']['id'])){?>
            <button style="font-size:19px; background-color:red; color:white; padding:10px; border-radius:30px" name="unfollow29"   value="<?php echo $profile['id']; ?>">unfollow</button>
        <?php }else{ ?>
          <button style="font-size:19px; background-color:blue; color:white; padding:10px; border-radius:30px"  name="follow28" value="<?php echo $profile['id'];?>">follow</button>
        <?php }} ?></form>
    </td></tr></table></th><?php if($_SESSION['bhavesh']['user']==$profile){}else{ ?><th><form method="POST"><button style="padding:5px; background-color:darkblue; border-radius:10px;color:white;" value="<?php print_r( $profile['id']); ?>" name="comment">messages</button></form></th><?php } ?><th></th><th style="font-size:19px;border-left:2px solid black; background-color:; color:white; padding:3px; border-radius:100%"  ><?php if($_SESSION['bhavesh']['user']==$profile){?><a href="sarktank.php"><img style="background-color:white;border-radius:30px;padding:4px;" src="images/icon/home.png" width="30" height="30"></img></a><?php } else{ ?><a href="profile.php?u=<?php print_r($profile['name']);?>"><img style="background-color:white;border-radius:30px;padding:4px;" src="images/icon/home.png" width="30" height="30"></img></a><?php } ?></th>
   
</tr>
   </table>
        </div>
</div>
    </nav>
    <button>Edit Bio</button>
  
  
<main>
    
    <div class="container">
            <table><tr><td>
        <div class="left">
       
   
            <div id="editn" style="background-color:<?php if($_SESSION['bhavesh']['user']['color']=='hsl(252,30%,17%)'){ echo '#7a7a7a';}else{echo 'white';} ?>;
            color:<?php if($_SESSION['bhavesh']['user']['color']=='hsl(252,30%,17%)'){ echo 'white';}else{echo 'black';} ?>" class="information">
                <table  class="table1">
                    <tr><td>
                      <span><img src="images/icon/school.png" width="20" height="20"></span> <small> from </small> <?php     
                                           print_r($profile['school']);

                                                                 ?></td>
                    </tr>
                    <tr><td>
                        <span><img src="images/icon/school.png" width="20" height="20"></span>    <small> from </small>  <?php     
                                           print_r($profile['collage']);

                                                                 ?></td>
                    </tr>
                    <tr><td>
                        <span><img src="images/icon/brifcase.png" width="20" height="20"></span>   <small>work at</small> <?php     
                                           print_r($profile['work']);

                                                                 ?></td>
                    </tr>
                    <tr><td>
                        <span><img src="images/icon/home.png" width="20" height="20"></span> <small>form</small><?php     
                                           print_r($profile['live']);

                                                                 ?></td>
                    </tr>
                    <tr><td>
                        <span><img src="images/icon/location.png" width="20" height="20"></span>   <small>  live </small><?php     
                                           print_r($profile['from_city']);

                                                                 ?></td>
                    </tr>
                    <tr><td>
                        <span><img src="images/icon/heart.png" width="20" height="20"></span>     <?php     
                                           print_r($profile['marital_status']);

                                                                 ?></td>
                    </tr>
                    <tr><td><?php if($_SESSION['bhavesh']['user']==$profile){?><table><tr><td>
                    <input type='submit' class='nnn' id='addbio'    value='+ Edit-profile'></td><td> <button style="display:flex;" name="posttext" class="nnn" id="btn33">+ create post </button></td></tr></table></td>
                    <?php } ?>
                    </tr>  
                </table>
            </div><br>
            <?php if($_SESSION['bhavesh']['user']==$profile){ ?>
            <h3 class="nnn"><center>Following</center></h3>
            <?php } ?>
            <table id="thefo"  style="background-color:<?php if($_SESSION['bhavesh']['user']['color']=='hsl(252,30%,17%)'){ echo '#7a7a7a';}else{echo 'white';} ?>;
            color:<?php if($_SESSION['bhavesh']['user']['color']=='hsl(252,30%,17%)'){ echo 'white';}else{echo 'black';} ?>"  cellpadding=40><tr><td>
            <?php    
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
        
             if(count(getfollowing($profile['id']))=="")
             {
                if($_SESSION['bhavesh']['user']==$profile){ 
                 echo "<h2>follow someone</h2>";
                }
             }      
      $following2=$notfollow;   foreach ($following2 as $puser) {
                                              
      ?>
                                         <div   class="message" ><?php if($_SESSION['bhavesh']['user']==$profile){ ?>
                                             <div class="profile-photo"><table ><tr><td><a class="subtype" href="profile.php?u=<?php echo $puser['name']; ?>"><img style="border-radius:20px;" src="images/<?php echo $puser['pro_pic']; ?>" height="40" width="40"></img></a></td><td><div class="message-body">
                                                         <h5><?php echo $puser['name']; ?><br>@<?php echo $puser['user_profile']; ?></h5>
                       
                                                      <form method="post">

                                                   
                                                         </div></td><td><button name='unfollow30' class="nnn  followbtn" value='<?php echo $puser['id']; ?>'>unfollow</button></td></tr></table></div>
                                                        
                                             </form>
                                         <?php } ?>
                                                     
                                         </div>
                                         
                                        <?php }?>
      </td></tr></table>            
        </div></td><td>
        <div class="right" style="width:850px;  margin-left:70px; margin-right:30px;">
      
        
              <!---------------------------- FILDS------------------------------->
             
                <?php 
                                           
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
                                               function likecount($user_id)
                                           {     $con=mysqli_connect("localhost","root","","interect");
                                               $currentuser = $_SESSION['bhavesh']['user']['id'];
                                               $query="SELECT   * FROM likes where   post_id=$user_id   ";  
                                               $run=mysqli_query($con,$query);
                                               return mysqli_fetch_all($run);
                                              
                                           }
                                          if(isset($_POST['unlike']))
                                           {
                                               $con=mysqli_connect("localhost","root","","interect");
                                               $currentuser = $_SESSION['bhavesh']['user']['id'];
                                            
                                               $delpostid=$_POST['unlike'];
                                            
                                               $str="delete from likes where user_id=$currentuser && post_id=$delpostid";
                                               $r=mysqli_query($con,$str);
                                               if($r)
                                               {
                                                  
                                                header("location:profile.php?u=".$profile['name']);
                                                   
                                               }
                                               else
                                               {
                                                
                                                   echo "sorry somthing wrong";
                                               }
                                            
                                              }
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
                                           
                                               $str2 ="SELECT name from posts WHERE id=$postid";
                                               $result2=mysql_query($str2);
                                               $r2= mysql_fetch_assoc($result2);
                                               
                                               $getpostimg2=$r2['post_img'];
                                                               $getuser=$r2['name'];
                                        $getusername=$getuser;
                                        $getuserpic=$_SESSION['bhavesh']['user']['pro_pic'];
                                        $currentmname=$_SESSION['bhavesh']['user']['name'];
                                        
                                        $query2="insert into notification(whofollow,whom,propic,kind,post_img)values('$currentmname' ,'$getusername','$getuserpic','like','$getpostimg2')";
                                        $yyy=mysqli_query($con,$query2);
                                               if($r)
                                               {
                                                  
                                                header("location:profile.php?u=".$profile['name']);
                                                   
                                               }
                                               else
                                               {
                                                
                                                   echo "sorry somthing wrong";
                                               }
                                              }
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
                                             function checkfollowstatus($user_id)
                                             {     $con=mysqli_connect("localhost","root","","interect");
                                                global $profile;
                                                 $currentuser = $profile['id'];
                                                 $query="SELECT * FROM follow_list   WHERE follower_id=$currentuser  && userid=$user_id";  
                                                 $run=mysqli_query($con,$query);
                                                 return mysqli_fetch_assoc($run);
                                                
                                             }
                                             function getfollowsuggestion()
                                             {
                                                global $profile;
                                                 $con=mysqli_connect("localhost","root","","interect");
                                                 $currentuser = $profile['id'];
                                                 $query= "SELECT * FROM  user WHERE id!=$currentuser";
                                                 $run=mysqli_query($con,$query);
                                                 return mysqli_fetch_all($run,true);
                                             }
                                               
                                             $follow_seggestion= filterfollowsuggestion();
                                          
                                             function filterposts()
                                             {
                                              global $profile;
                                             $list= getpost();
                                             $filter_list = array();
                                             foreach ($list as $post1) {
                                                if(checkfollowstatus($post1['userid'])||$post1['userid']==$profile['id'])
                                                {
                                                 $filter_list[]=$post1;  
                                                   
                                                
                                                } 
                                                
                                             }
                                             return $filter_list; 
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
                                            function msgpost22($my)
                                            {
                                                $con=mysqli_connect("localhost","root","","interect");
                                                $currentuser=$_SESSION['bhavesh']['user']['id'];
                                                $query="SELECT *from posts where id=$my";
                                                $r=mysqli_query($con,$query);
                                                return mysqli_fetch_all($r,true);
                                            }
                                             function getfollower($user_id)
                                             {
                                                 
                                                $con=mysqli_connect("localhost","root","","interect");
                                               
                                                $query= "SELECT * FROM  follow_list WHERE userid=$user_id";
                                                $run=mysqli_query($con,$query);
                                                return mysqli_fetch_all($run,true);
                                             }
                                             function getfollowing($user_id)
                                             {
                                                $con=mysqli_connect("localhost","root","","interect");
                                               
                                                $query= "SELECT * FROM  follow_list WHERE follower_id=$user_id";
                                                $run=mysqli_query($con,$query);
                                                return mysqli_fetch_all($run,true);
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
                                                 
                                                 $getpostimg2=$r2['post_img'];
                                                                 $getuser=$r2['name'];
                                          $getusername=$getuser;
                                          $getuserpic=$_SESSION['bhavesh']['user']['pro_pic'];
                                          $currentmname=$_SESSION['bhavesh']['user']['name'];
                                          
                                          $query2="insert into notification(whofollow,whom,propic,kind,post_img)values('$currentmname' ,'$getusername','$getuserpic','like','$getpostimg2')";
                                          $yyy=mysqli_query($con,$query2);
                                                 if($r)
                                                 {
                                                    
                                                    header("location:profile.php?u=".$profile['name']);
                                                     
                                                 }
                                                 else
                                                 {
                                                  
                                                     echo "sorry somthing wrong";
                                                 }
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
                                                    
                                                    header("location:profile.php?u=".$profile['name']);
                                                     
                                                 }
                                                 else
                                                 {
                                                  
                                                     echo "sorry somthing wrong";
                                                 }
                                              
                                                }
                                           ?> 
                                            <?php   function getpostmsg($my)
                                                    {
                                                        $con=mysqli_connect("localhost","root","","interect");
                                                        $currentuser=$_SESSION['bhavesh']['user']['id'];
                                                        $query="SELECT *from postmsg where post_id=$my";
                                                        $r=mysqli_query($con,$query);
                                                        return mysqli_fetch_all($r,true);
                                                    } ?>
                                          
              <?php $posts=currentpost();if (count($posts)<1) {
                                        echo "<br><br>
                                        <center><img src='images/6ad1d1eba400880e3c3de062fcb13576(1).png' width=800 height=500></img></center>";
                                    }else{
                                    foreach ($posts as $post) {
                                        
                                    
                                    ?>
                                        <div class="feeds"  >
                                        <div class="feed" id="FILDS">
                                            <div class="head">
                                                <div class="user">
                                                    <div class="profil-photo">
                                                        <img src="images/<?php echo $post['pro_pic']; ?>" height="30" width="30">
                                                    </div>
                                                    <div class="ingo">
                                                        <h3><?php echo $post['name']; ?></h3><h4>@<?php echo $post['user_profile']; ?></h4><br>
                                                        <h4>caption  :  <?php echo $post['post_text']; ?></h4>
                                                    </div>
                                                   
                                                </div>
                                                <small> <?php echo gettime($post['created_at']);?></small><br>
                                                <span class="edit">
                                                    <!-- three dots -->
                                                    <img class="btn2"src="images/icon/dot.jpg" height="36" width="36"></img>
                                                </span> 
                                            </div>
                                            <div class="photo"><center><form method="POST"><button id="postidby" style="border:none; font-size:19px; background-color:white;"  name="ppp"  value="<?php print_r($post['id']); ?>" >[ view ]</button></form></center><?php global $file_type;  if($post['video']) {  ?>
                                               <center> <video height="400" width="500"   controls ><source src='video/<?php echo $post['video']?>' type='video/mp4'></video></center>
                                                <?php }else if($post['doc']){?><center><embed type="application/pdf" src="pdf/<?php echo $post['doc'] ?>" height="500" width="750" ></center><?php } else { ?><center>
                                                    <form method="POST"><button id="postidby" style="border:none; background-color:white;"  name="ppp"  value="<?php print_r($post['id']); ?>" ><img   style="border-radius:0px;" class="postpopbtn  " src="posts/<?php echo $post['post_img']; ?>"  data-bs-toggle="postpop1"  height="500" width="750" ></img></button></form>
                                    </center>
                                            </div>
                                            <?php } ?>
                                          
                                            <form method="POST">
                                                    <?php if(!likeorunlike($post['id'])&& $_SESSION['bhavesh']['user']['id']){ ?><button name="like"   value="<?php echo $post['id']; ?>" style="background-color:white; border:0px;"><img class="like2001" style="margin-left:102px; margin-right:30px; "  src="images/icon/heart.png" height="35" width="35"></img></button>
                                                    <?php } else{?><button name="unlike" value="<?php echo $post['id']; ?>"  style="border:0px; background-color:white;"><img class="like2001" style="margin-left:102px; margin-right:30px;"  src="images/icon/fullheart.png" height="30" width="30"></img></button><?php }  ?><p style="display:inline-block; ">like *<?php $likecount=likecount($post['id']); print_r(count($likecount)); ?></p>
                                                </form>
                                            <div class="caption">
                                            <form method="POST">
                                                    <table>
                                                        <?php   ?>
                                                        <tr><td><input style="padding:8px;

border-left: 2px solid black;
border-right: 2px solid black;
border-top:none;
border-bottom:none;
border-radius: 20px;
text-align: center;
margin-right: 3px;" name="commenttext" placeholder="say something...." class="comment1 comment-input" size="90" type="text" ></td><td><button class="nnn" name="mymsg1" value="<?php print_r($post['id']); ?>">send</button></td></tr>
                                                      
                                                
                                                    </table>
                                                </form>
                                            <div style="margin-left:30px;">comments * <?php  $getpostmsg=getpostmsg($post['id']);  print_r(count($getpostmsg)); ?></div>
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
                                    <?php 
                                    }}
                                    ?>
            
        </div></td><td><?php  if($_SESSION['bhavesh']['user']==$profile){?>
        <div style="height:650px; background-color:<?php if($_SESSION['bhavesh']['user']['color']=='hsl(252,30%,17%)'){ echo '#7a7a7a';}else{echo 'white';} ?>;
      color:<?php if($_SESSION['bhavesh']['user']['color']=='hsl(252,30%,17%)'){ echo 'white';}else{echo 'black';} ?> "  class="messages" id="MESSAGES">
                                        <div class="heading">
                                          <h4 class="nnn">Friend Suggestion</h4>                         
                                        </div>
                                   <br>
                                      
                                            <!-------------- messages----------- -->
                                           
                                            <div style="overflow-x:hidden; height:540px;" class="all-messages">
                                                <?php 
                                                   function getpro_pic($my)
                                                   {
                                                       $con=mysqli_connect("localhost","root","","interect");
                                        $currentuser=$_SESSION['bhavesh']['user']['id'];
                                        $query="select  name,pro_pic  from user where id=$my";
                                        $r=mysqli_query($con,$query);
                                        return mysqli_fetch_all($r,true);
                                                   }
                                                       function follouser($user_id)
                                                       {
                                                           global $profile;
                                                           $con=mysqli_connect("localhost","root","","interect");
                                                           $currentuser = $profile['id'];
                                                           $query="INSERT INTO follow_list(follower_id,userid)values($currentuser ,$user_id)";
                                                           return mysqli_query($con,$query);
                                                           $getuser=getpro_pic($user_id);
                                                           $getusername=$getuser[0]['name'];
                                                           $getuserpic=$_SESSION['bhavesh']['user']['pro_pic'];
                                                           $currentmname=$_SESSION['bhavesh']['user']['name'];
                                                           
                                                           $query2="insert into notification(whofollow,whom,propic,kind)values('$currentmname' ,'$getusername','$getuserpic','follower')";
                                                           mysqli_query($con,$query2);
                                                        
                                                       }
                                                       if(isset($_POST['follow2901']))
                                                       {
                                                           $user_id=$_POST['follow2901'];
                                                           if(follouser($user_id)){
                                                               $response['status']=true;
                                                               header("location:profile.php?u=".$profile['name']);
                                                            
                                                           }
                                                           else {
                                                               $response['status']=false;
                                                           }
                                                           echo json_encode($response);
                                                       }
                                                       if(isset($_POST['follow2003']))
                                                       {
                                                           $user_id=$_POST['follow2003'];
                                                           if(follouser($user_id)){
                                                               $response['status']=true;
                                                               header("location:profile.php?u=".$profile['name']);
                                                            
                                                           }
                                                           else {
                                                               $response['status']=false;
                                                           }
                                                           echo json_encode($response);
                                                       }
                                                        
                                              
                                                function unfollouser($user_id)
                                                {
                                                    global $profile;
                                                    $con=mysqli_connect("localhost","root","","interect");
                                                    $currentuser = $profile['id'];
                                                    $query="DELETE FROM follow_list WHERE follower_id=$currentuser && userid=$userid";
                                                    return mysqli_query($con,$query);
                                                }
                                                 if(count($follow_seggestion)<1){
                                                     echo "<img src='images/icon/jjjjk.png' height=200 width=200></img>";
                                                 }else{
                                                foreach ($follow_seggestion as $suser) {
                                               if($suser['ac_status']=='0'){echo "";}else{
                                                 ?>
                                            <div class="message">
                                                <div class="profile-photo"><table><tr><td><a class="subtype" href="profile.php?u=<?php echo $suser['name']; ?>"><img style="border-radius:20px;" src="images/<?php echo $suser['pro_pic']; ?>" height="40" width="40"></img></a></td><td><div class="message-body">
                                                            <h5><?php echo $suser['name']; ?><br>@<?php echo $suser['user_profile']; ?></h5>
                          
                                                         <form method="post">
                                                            </div></td><td><button name='follow2901' class="nnn" value='<?php echo $suser['id']; ?>'>follow</button></td></tr></table></div>
                                                </form>
                                            
                                                        
                                            </div>
                                           <?php }}}} ?>
                                            </div>
                                        </div>  </td></tr></table>
</main>
    <div class="main-post">
        <div class="modal">
        <?php
    //for managing add post
    $con=mysqli_connect("localhost","root","","interect");
    if(isset($_POST['addpost']))
    {
        $post_text=$_POST['post_text'];
        
        $file_name=$_FILES['post_img']['name'];
        
            $folder="posts/".$file_name;
            move_uploaded_file($_FILES['post_img']['tmp_name'],$folder);
            $user_id=$profile['id'];
            $name22=$profile['name'];
            $str="INSERT into posts(userid,post_text,post_img,name) values($user_id,'$post_text','$file_name','$name22')";
            $re=mysqli_query($con,$str);
           
            if($re)
            {
                header("location:profile.php?u=".$profile['name']);
                echo "added sucessfully";
            }
            else {
                echo "somting roung";
            }

    }
    function getpost()
    {
        $con=mysqli_connect("localhost","root","","interect");
        $query="SELECT posts.id,posts.doc,posts.created_at,posts.userid,posts.post_img,posts.post_text,posts.created_at,user.name,user.user_profile,user.pro_pic FROM posts JOIN user  ON user.id=posts.userid ORDER BY id DESC";
        $r=mysqli_query($con,$query);
        return mysqli_fetch_all($r,true);
    }
    function currentpost()
    {
        global $profile;
        $con=mysqli_connect("localhost","root","","interect");
        $currentuser = $profile['id'];
        $query="SELECT posts.video,posts.doc, posts.id,posts.created_at,posts.userid,posts.post_img,posts.post_text,posts.created_at,user.name,user.user_profile,user.pro_pic FROM posts JOIN user  ON user.id=posts.userid where user.id=  $currentuser";
        $r=mysqli_query($con,$query);
        return mysqli_fetch_all($r,true);
    }
    function kkk()
    {
        global $profile;
        $con=mysqli_connect("localhost","root","","interect");
        $currentuser = $profile['id'];
        $query="SELECT user.name,user.user_profile,user.pro_pic,follow_list.follower_id,follow_list.id FROM follow_list JOIN user  ON user.id=follow_list.follower_id where follow_list.userid=  $currentuser";
        $r=mysqli_query($con,$query);
        return mysqli_fetch_all($r,true);
    }
   
   
 ?>
    
    
        <center>
           
        <div class="postq"><h3>create post</h3></div>
      
        <form  method="POST" enctype="multipart/form-data" >
                <table>
           <tr><td  colspan=3><div id="display_image"><img src="" style="display:none;" id="post_img" height="245" width="400"></img></div></td> 
            </tr>
            <tr><td colspan=3><input type="text" name="post_text" placeholder="caption" size="55"></td></tr>
            <tr><td>              
                <input type="file" id="select-post-image" name="post_img" multiple></td>
                <td><input type="submit" class="nnn"  name="addpost" value="post"></td>
                <td><input type="button" class="nn1" id="cencel22"  value="cencel"></td></tr>
            </table>
            </form>
</center>
      </div>
    </div>
    <!-- add biodata -->
    <div class="monolog">
        <div class="modal1">
             <!-- add biodata -->
             <?php
                $con=mysqli_connect("localhost","root","","interect");
                if(isset($_POST['submit']))
                {
                
                $school1=$_POST['school'];
                $collage1=$_POST['collage'];
                $work1=$_POST['work'];
                $live1=$_POST['live'];
                $from1=$_POST['from_city'];
                $marital1=$_POST['marital'];
                $name1=$_POST['name'];
                $profile_pictur=$_POST['pro_pic'];
                $bio_pic=$_POST['bio_pic'];
                $profile['bio_pic']=$bio_pic;
                $profile['school']=$school1;
                $profile['collage']=$collage1;
                $profile['work']=$work1;
                $profile['live']=$live1;
                $profile['from_city']=$from1;
                $profile['marital_status']=$marital1;
                $profile['name']=$name1;


                $string="UPDATE user SET name='$name1', school='$school1',collage='$collage1',work='$work1',live='$live1',from_city='$from1',marital_status='$marital1'   where id=".$profile['id'];
                $result=mysqli_query($con,$string);
                if($result)
                {
                    header("location:profile.php?u=".$profile['name']);
                    echo "<script>alert('edit-bio sucessfully')<script>";
                }
                else{
                    echo "something wrong";
                }
                
                }
                if(isset($_POST['addpro']))
                {
                    $bio_pic=$_POST['pro_pic'];
                $profile['pro_pic']=$bio_pic;
                $file_name=$_FILES['pro-pic']['name'];
                $folder="images/".$file_name;
                move_uploaded_file($_FILES['pro-pic']['tmp_name'],$folder);
                $profile_pic="pro_pic='$file_name'";
                $commentpropic="pro_img='$file_name'";
                $profile['pro_pic']=$file_name;
                $str="UPDATE user SET  $profile_pic  where id=".$profile['id'];
                $re=mysqli_query($con,$str);
                $str2="UPDATE  postmsg SET $commentpropic  where sender=".$profile['id'];
                $re2=mysqli_query($con,$str2);
                if($re && $re2)
                {
                    header("location:profile.php?u=".$profile['name']);
                    echo "<script>alert('update pic sucessfully')<script>";

                }
                else {
                echo "<script>alert('profile pic not is update')<script>";
                }
                }
                if(isset($_POST['bio_pic']))
                {
                    $bio_pic=$_POST['bio_pic'];
                $profile['bio_pic']=$bio_pic;
                $file_name=$_FILES['bio-pic']['name'];
                $folder="images/".$file_name;
                move_uploaded_file($_FILES['bio-pic']['tmp_name'],$folder);
                $bio_pic="bio_pic='$file_name'";
                $commentpropic="pro_img='$file_name'";
                $profile['bio_pic']=$file_name;
                $str="UPDATE user SET  $bio_pic  where id=".$profile['id'];
                $re=mysqli_query($con,$str);
              
                if($re )
                {
                    header("location:profile.php?u=".$profile['name']);
                    $bio_pic=$_POST['bio_pic'];
                    $_SESSION['bhavesh']['user']['bio_pic']=$bio_pic;
                    echo "<script>alert('update pic sucessfully')<script>";

                }
                else {
                echo "<script>alert('profile pic is update')<script>";
                }
                }
                ?>
                <center>
   
    <form method="POST"  enctype="multipart/form-data">
            <table  cellpadding="7" cellspacing="10">
            <tr><td colspan="2" class="postq">edit bio-data</td><td class="postq">edit profil-pic</td><td class="postq" >edit bio pic</td><td><input type="button" class=" followbtn" name="cencel" value="X" id="cencel33"></tr>
            <tr><td>school:</td><td><input type="text" name="school" value="<?php print_r($profile['school']); ?>" ></td><td><input type="file" id="select-post-image2" name="pro-pic" value="<?php print_r($profile['pro_pic']); ?>"></td><td><input type="file" id="select-post-bio" name="bio-pic" value=""></td></tr>
            <tr><td>collage:</td><td><input type="text" name="collage" value="<?php print_r($profile['collage']); ?>" ></td><td rowspan="4"><div style="border-radius:40px;" class="editimg"><img style="border-radius:40px;" id="post_img2"  src="images/<?php print_r($profile['pro_pic']); ?>" height="190" width="200"></img></div></td><td rowspan="4"><div style="border-radius:40px;" class="editimg"><img style="border-radius:40px;" id="bio_img"  src="images/<?php print_r($profile['bio_pic']); ?>" height="190" width="200"></img></div></td></tr>
            <tr><td>work:</td><td><input type="text" name="work" value="<?php print_r($profile['work']); ?>" ></td></tr>
            <tr><td>live:</td><td><input type="text" name="live" value="<?php print_r($profile['live']); ?>"></td></tr>
            <tr><td>from:</td><td><input type="text" name="from_city"  value="<?php print_r($profile['from_city']); ?>"></td></tr>
            <tr><td>marital:</td><td><input type="text" name="marital" value="<?php print_r($profile['marital_status']); ?>" ></td><br></tr>
            <tr><td>name:</td><td><input type="text"  name="name" value="<?php print_r($profile['name']); ?>" ></td></tr>
            <tr><br><br><td><input type="submit" class="nnn" name="submit" value="update-bio"></td><td></td><td ><input type="submit" value="update-profile" name="addpro" class="nnn"></td><td ><input type="submit" value="update-bio" name="bio_pic" class="nnn"></td></tr>

    </table>
    </form>
            </center>
</div>
</div>
<div class="bigpro">
       <div class="big-profile">
        <table >
            <tr><td width='227px'></td><td> <input type="button" class="followbtn2" value="X" id="cencel11"></td></tr>
                <tr><td colspan='2'> <div><img src="images/<?php print_r($profile['pro_pic']);?>" height="260" width="260"></img></div><td></tr>
            </table>
          
          
</div>
</div>
<div class="follow-popup">

       <div id="followpopup">  <h3 class="following-tile">Following <input align="right" type="button" id="cencel234" class=" followbtn2" value="X"></h3><br><br><br><br><br>
           <center>
         
     <?php        
                                      
                                             if(count(getfollowing($profile['id']))=="")
                                             {
                                                 echo "<h2>follow someone</h2>";
                                             }
      $following2=$notfollow; foreach ($following2 as $puser) {
                                              
                                              ?>
                                         <div class="message">
                                             <div class="profile-photo"><table><tr><td><a class="subtype" href="profile.php?u=<?php echo $puser['name']; ?>"><img style="border-radius:30px;" src="images/<?php echo $puser['pro_pic']; ?>" height="40" width="40"></img></a></td><td><div class="message-body">
                                                         <h5><?php echo $puser['name']; ?><br>@<?php echo $puser['user_profile']; ?></h5>
                       
                                                      <form method="post">
                                                         </div></td><td><button name='unfollow1975' class="nnn  followbtn" value='<?php echo $puser['id']; ?>'>unfollow</button></td></tr></table></div>
                                             </form>
                                         
                                                     
                                         </div>
                                         
                                        <?php }?>
                                        
     </center>
</div>
</div>
<div class="followperson">

       <div id="followerpopup">  <h3 class="following-tile">Follower<input align="right" type="button" id="cencel500" class=" followbtn2" value="X"></h3><br><br><br><br><br>
           <center>
         
     <?php        
                                             if(count(getfollowing($profile['id']))==0)
                                             {
                                                 echo "<h2>no one can follow you</h2>";
                                             }
                                             else{
      $following2=kkk();   foreach ($following2 as $tuser) {
                                              
                                              ?>
                                              
                                         <div class="message">
                                             <div class="profile-photo"><table><tr><td><a class="subtype" href="profile.php?u=<?php echo $tuser['name']; ?>"><img style="border-radius:20px;" src="images/<?php echo $tuser['pro_pic']; ?>" height="40" width="40"></img></a></td><td><div class="message-body">
                                                         <h5><?php echo $tuser['name']; ?><br>@<?php echo $puser['user_profile']; ?></h5>
                                          
                                                      <form method="post">
                                                       </div></td><?php if(checkfollowstatus($tuser['follower_id'])) {?><td><button style="background-color:red;" name='unfollow2901' class="nnn " value='<?php echo $tuser['id']; ?>'>unfollow</button></td><?php }else{?>  <td>  <button name='' class="nnn  " value='<?php echo $tuser['id']; ?>'>follow</button></td><?php }}?></tr></table></div>
                                             </form>
                                         <?php } ?>
                                                     
                                         </div>
                                         
                                        
                                        
     </center>
</div>
</div>
    
    
  
</div>


</div>
<div id="theamby">
    <div id="theamby2">
<?php require('postall.php'); ?>
      </div>
      </div>
      <script>
        let postpopbtn = document.querySelector('.postpopbtn');
let postpop1 =document.querySelector('.postpop');
let postpopclose =document.querySelector('.postpopclose');
// start modal
     
function postpopopen  ()  {
    postpop1.style.display = 'grid';
}

function postpopcencel (f) 
{
    f.target.classList.contains(postpop1)
    postpop1.style.display = 'none';
    
}
// close modal
postpopbtn.addEventListener('click', postpopopen);
postpopclose.addEventListener('click', postpopcencel);
        </script>
<script src="profile.js"></script>
</body>
</html>
