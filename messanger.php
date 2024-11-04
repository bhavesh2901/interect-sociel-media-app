<!--
NAME OF PROJECT: INTERACT SOSCIL MIDEA SITE
DVELOPER NAME  : CHAVDA BHAVESH
YEAR           : 2023
COLLAGE        : S C GANDHI BCA COLLAGE
PAGE           : MESSANGER PAGE 
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        main .container
{
    display: grid;
    grid-template-columns: 40vh 180vh  ;
    column-gap: 7rem;
    position: relative;
    
}
.pdf1
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
    display: none;
    place-content: center;
    overflow-x: hidden;
}
.pdf1 .pdf2
{
    width: 400px;
   border-radius: 20px;
   margin-top: 80px;
    padding: 12px;
   background-color: #ffffff;
    color: black;
    cursor: pointer;
    
}
.videopop
{
    background: rgba(51, 50, 50, 0.5);
    width: 100%;
    height: 100%;
    position: fixed;
    top:0;
    left:0;
    z-index: 100;
    text-align: center;
    display: none;
    place-content: center;
   
}
.videopop .videopop1
{
    padding:30px;
    width: 400px;
    
    background-color: white;
    border-radius: 30px;
}

#theamby
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
 #theamby2
{
   
    padding:30px;
    width: 500px;
    
    background:white;
    border-radius: 30px;
}
.postphoto
{
    background: rgba(51, 50, 50, 0.5);
    width: 100%;
    height: 100%;
    position: fixed;
    top:0;
    left:0;
    z-index: 100;
    text-align: center;
    display: none;
    place-content: center;
   
}
.postphoto .postphoto2
{
    padding:30px;
    width: 400px;
    
    background: white;
    border-radius: 30px;
}
 .middle
{
    width:600px;
  
    background-color:white;
    
}


 .card
{
    background: var(--color-white);
    padding: 3rem;
    border-radius: var(--card-border-radius);
    transition: all 0.1s ease;
    
    box-shadow: 0 0 2rem  var(--color-primary);
}
/*======== font size====== */
 .font-size
{
    margin-top: 5rem;
}
 .font-size > div{
    display: flex;
    justify-content: space-between;
    align-items: center;
    background:var(--color-light);
    padding: var(--search-padding);
    border-radius: var(--card-border-radius);
}
 .choose-size
{
    background: var(--color-secondary);
    height: 0.3rem;
    width: 100%;
    margin: 0.1rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
 .choose-size span
{
    width:  1rem;
    height: 1rem;
    background: var(--color-secondary);
    border-radius: 50%;
    cursor: pointer;
}
 .choose-size span.active
{
    background: var(--color-primary);

}
/* ==============fontsize============== */

.color
{
    margin-top: 2rem;
}
 .card
{
    background: var(--color-white);
    padding: 3rem;
    border-radius: var(--card-border-radius);
    transition: all 0.1s ease;
    
    box-shadow: 0 0 2rem  var(--color-primary);
}
 .choose-color
{
    background: var(--color-light);
    padding: var(--search-padding);
    border-radius: var(--card-border-radius);
    display: flex;
    align-items: center;
    justify-content: space-between;
}
 .choose-color button
{
width: 3.2rem;
height: 3.2rem;
border-radius: 20%;
border:2px solid black;
}
.choose-color button:nth-child(1)
{
    background-image:url('images/white.jpg');
}
 .choose-color button:nth-child(2)
{
    background-image:url('images/love200.jpg');
}
.choose-color button:nth-child(3)
{
    background-image:url('images/sky.jpg');
}
 .choose-color button:nth-child(4)
{
    background-image:url('images/orange.jpg');
}
 .choose-color button:nth-child(5)
{
    background-image:url('images/ispazio.png');
}
.choose-color button:nth-child(6)
{
    background-image:url('images/2224368.png');
    background-position:justify;
}
 .choose-color button .active
{
    border:5px solid 2rem;
}
 .background .choose-bg
{
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap:1.5rem;
}
 .background .choose-bg > div
{
    padding:var(--card-padding);
    width: 100%;
    display: flex;
    align-items: center;
    font-size: 1rem;
    font-weight: bold;
    border-radius: 0.4rem;
    cursor: pointer;
}
 .background .choose-bg > div .active{
    border:2px solid black;
}
 .background .choose-bg  .bg-1
{
 background: white;
 color: black;
}
 .background .choose-bg  .bg-2
{
 background:hsl(252,30%,17%);
 color: white;
}
 .background .choose-bg  .bg-3
{
 background:hsl(252,30%,10%);
 color: white;
}
 .choose-bg > div span
{
    width: 2rem;
    height: 2rem;
    border:2px solid var(--color-gray);
    border-radius: 50%;
    margin-right: 1rem;
}

.sendm
{
    padding-left:20px;
    padding-right:20px;
    padding-top:7px;
    padding-bottom:7px;
     background-color:darkblue;
      color:white;
       border-radius:20px;
       border-bottom:3px solid red;
       border-left:3px solid red;
       font-size:16px;
       margin-left:5px;
}
.sendm:hover
{
    background-color:blue;
    color:white;
    font-size:16px;margin-left:5px;
}
@media screen and (max-width:1200px) {
body
{
    margin:0px;
    width:2000px;
    
}
}

@media screen and(max-width:992px){

}
        </style>
</head>
<body  id="change_m">
<div id="theamby">
                <div id="theamby2">
                <?php session_start();
                 if(isset($_POST['color_1']))
                {
                 $con=mysqli_connect("localhost","root","","interect");
                 $currentuser=$_SESSION['bhavesh']['user']['id'];
                 $color1=$_POST['color_1'];
                 $str="UPDATE user SET msthem='$color1' where id=$currentuser";
                 $str2="UPDATE user SET mscolor='rgb(226, 218, 218)' where id=$currentuser";
                 $r=mysqli_query($con,$str);$r2=mysqli_query($con,$str2);
                 if($r and $r2){header('location:messanger.php');
                $_SESSION['bhavesh']['user']['msthem']=$color1;$_SESSION['bhavesh']['user']['mscolor']='rgb(226, 218, 218)';}
                }
                if(isset($_POST['color_2']))
                {
                 $con=mysqli_connect("localhost","root","","interect");
                 $currentuser=$_SESSION['bhavesh']['user']['id'];
                 $color2=$_POST['color_2'];
                 $str="UPDATE user SET msthem='$color2' where id=$currentuser";
                 $str2="UPDATE user SET mscolor='#edc8dd' where id=$currentuser";
                $r= mysqli_query($con,$str);$r2=mysqli_query($con,$str2);
                if($r and $r2){header('location:messanger.php'); 
                 $_SESSION['bhavesh']['user']['msthem']=$color2;$_SESSION['bhavesh']['user']['mscolor']='#edc8dd';}
                }
                if(isset($_POST['color_3']))
                {
                 $con=mysqli_connect("localhost","root","","interect");
                 $currentuser=$_SESSION['bhavesh']['user']['id'];
                 $color3=$_POST['color_3'];
                 $str="UPDATE user SET msthem='$color3' where id=$currentuser";
                 $str2="UPDATE user SET mscolor='#c8e6d5' where id=$currentuser";
                $r= mysqli_query($con,$str);$r2=mysqli_query($con,$str2);
                if($r and $r2){header('location:messanger.php');    
                    $_SESSION['bhavesh']['user']['msthem']=$color3;$_SESSION['bhavesh']['user']['mscolor']='#c8e6d5';}
                }
                if(isset($_POST['color_4']))
                {
                 $con=mysqli_connect("localhost","root","","interect");
                 $currentuser=$_SESSION['bhavesh']['user']['id'];
                 $color4=$_POST['color_4'];
                 $str="UPDATE user SET msthem='$color4' where id=$currentuser";
                 $str2="UPDATE user SET mscolor='#e3bd9d' where id=$currentuser";
                 $r=mysqli_query($con,$str);$r2=mysqli_query($con,$str2);
                 if($r and $r2){header('location:messanger.php');   
                     $_SESSION['bhavesh']['user']['msthem']=$color4;$_SESSION['bhavesh']['user']['mscolor']='#e3bd9d';}
                }
                if(isset($_POST['color_5']))
                {
                 $con=mysqli_connect("localhost","root","","interect");
                 $currentuser=$_SESSION['bhavesh']['user']['id'];
                 $color5=$_POST['color_5'];
                 $str="UPDATE user SET msthem='$color5' where id=$currentuser";
                 $str2="UPDATE user SET mscolor='hsl(202,75%,60%)' where id=$currentuser";
                $r= mysqli_query($con,$str);$r2=mysqli_query($con,$str2);
                if($r and $r2){header('location:messanger.php');   
                     $_SESSION['bhavesh']['user']['msthem']=$color5;$_SESSION['bhavesh']['user']['mscolor']='hsl(202,75%,60%)'; }
                }
                if(isset($_POST['color_6']))
                {
                 $con=mysqli_connect("localhost","root","","interect");
                 $currentuser=$_SESSION['bhavesh']['user']['id'];
                 $color6=$_POST['color_6'];
                 $str="UPDATE user SET msthem='2224368.png' where id=$currentuser";
                 $str2="UPDATE user SET mscolor='hsl(252,30%,17%)' where id=$currentuser";
                $r= mysqli_query($con,$str);$r2=mysqli_query($con,$str2);
                if($r and $r2){header('location:messanger.php');  
                      $_SESSION['bhavesh']['user']['msthem']='2224368.png'; $_SESSION['bhavesh']['user']['mscolor']='hsl(252,30%,17%)';}
                }
                ?>
                
     <div class="card" >
        <h2>customize your view</h2>

        <!------------------ primary colors------------- -->
        <div class="color">
            <h4>background</h4>
            <form method="POST">
            <div class="choose-color">
                <button name="color_1"  value="white.jpg" class="color-1"></button>
                <button name="color_2" value="love200.jpg" class="color-2"></button>
                <button name="color_3" value="sky.jpg"  class="color-3"></button>
                <button name="color_4" value="orange.jpg" class="color-4"></button>
                <button name="color_5" value="ispazio.png" class="color-5"></button>
                <button name="color_6" value="2224368.png" class="color-6"></button>
               
                
            </div>
            </form>
            <table style="margin-left:18px;"><tr><td width="58px">light</td><td width="58px">love</td><td width="58px">sky</td><td width="58px">desert</td><td width="58px">cold</td><td width="58px">dark</td></tr></table>
        </div>
        </div>
                </div>
                </div>

    <?php  require('header.php'); 
      
    function  getactivechatuserid()
    {
        $con=mysqli_connect("localhost","root","","interect");
        $currentuser_user_id=$_SESSION['bhavesh']['user']['id'];
        $query= "SELECT from_user_id,to_user_id from messages where to_user_id=$currentuser_user_id || from_user_id=$currentuser_user_id ORDER BY id DESC";
        $run= mysqli_query($con,$query);
        $data= mysqli_fetch_all($run,true);
        $ids=array();
        foreach($data as $ch){
        if($ch['from_user_id']!=$currentuser_user_id && !in_array($ch['from_user_id'],$ids)){
    $ids[]=$ch['from_user_id'];
        }
        if($ch['to_user_id']!=$currentuser_user_id && !in_array($ch['to_user_id'],$ids)){
            $ids[]=$ch['to_user_id'];
                }
        }
        return $ids;
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
                
    function getmessages($user_id)
{
    $con=mysqli_connect("localhost","root","","interect");
    $currentuser_user_id=$_SESSION['bhavesh']['user']['id'];
    $query= "SELECT *from messages where (to_user_id=$currentuser_user_id && from_user_id=$user_id) || (from_user_id=$currentuser_user_id && to_user_id=$user_id) ORDER BY id DESC";
    $run= mysqli_query($con,$query);
    return mysqli_fetch_all($run,true);
}
function updatemsgreadstutus($user_id)
{
    $con=mysqli_connect("localhost","root","","interect");
    $currentuser_user_id=$_SESSION['bhavesh']['user']['id'];
    $query="UPDATE messages SET read_status=1 where to_user_id=$currentuser_user_id && from_user_id=$user_id";
   return  mysqli_query($con,$query);
    
}

if(isset($_POST['send']))
{
    if($_POST['message1']=="")
    {
        echo "";
    }
    else
    {
    $con=mysqli_connect("localhost","root","","interect");
    $currentuser_user_id=$_SESSION['bhavesh']['user']['id'];
    $msg1=$_POST['message1'];
    $send1=$_POST['send'];
    $query= "INSERT into messages(from_user_id,to_user_id,msg) values ('$currentuser_user_id','$send1','$msg1') ";
    $query1="INSERT into dup(from_user_id,to_user_id,msg) values('$currentuser_user_id','$send1','$msg1')";
    $run= mysqli_query($con,$query);
    $run2=mysqli_query($con,$query1);
    updatemsgreadstutus($send1);
    
   
    if($run){
       echo "insert";
       header('location:messanger.php');
    }
    else
    {
        echo "not insert";
    }
}
    
}
function gettime($date)
{
   return date('h:i - (F jS, Y ) a',strtotime($date));
} 
    $bhavesh=$_SESSION['commentuser'];
    $chatbh=getmessages($bhavesh);
   

    ?>
  <main>
    <div class="container"><table ><tr><td  style="background-color:white;overflow-x:hidden; height:870px; width:450px; display:block; ">
    <div><h2>messages</h2> </div>
    <div  class="left" style="width:400px; height:870px;"  >
  
<?php $chats=getallmessages();
                                        $chatlist="";
                                        if(isset($_POST['comment']))
                                        {

                                          $_SESSION['commentuser']=$_POST['comment'];
                                          
                                              
                                                header('location:messanger.php');
                                             
                                                 
                                      
                                        }
                                  
                                            

                                             
                                              foreach($chats as $chat)
                                              {
                                              $ch_user=getuser($chat['user_id']);
                                              $seen=false;
                                              if($chat['messages'][0]['read_status']==1 || $chat['messages'][0]['from_user_id']==$_SESSION['bhavesh']['user']['id'])
                                              {
                                                $seen=true;
                                              }
                                            
                                              $chatlist.='   
                                              <div ><table width="400px"   style=" font-color:black; margin-top:10px; border-radius:20px;  border-bottom:3px solid black;"  ><tr><td>
                                         
                                         <a href="#"><img src="images/'. $ch_user['pro_pic'].'" height="54" width="54"></img></a></td><td><div >
                                                  <table width="100px"   class="followheight" ><tr><td>
                                
                                                  <h5>'. $ch_user['name'].'</h5></td></tr><tr><td>@'. $ch_user['name'].'</td></tr></table>
                   
                                               
                                                     </td><td width="50px">'. $chat['messages'][0]['msg'].'</td><td>'. gettime($chat['messages'][0]['create_at']).'</td><td width="400px">'.($seen?'':'<img src="images/icon/read.png" height="20" width="20"></img>').'</td>
                                                     <td><form method="POST"><button style="border:none; background-color:white;" name="comment" value="'.$chat['user_id'].'"><img style="backgrond-color:white;" height="25" width="25" src="images/icon/eyes1.png"></img></button></form>
                                                     </td>
                                                     </tr></table>
                                         
                                     
                                                 
                                     </div>';
                                     
                                        
                                                ?>
                                          
                                              <?php
                                              }
                                         
                                              if(count($chats)==0)
                                              {
                                                echo "no message";
                                              }else{
                                            echo $chatlist; 
                                              }
                                           ?>
                                            

                                            

</div>
                                            </td><td>
                                            
<div class="middle" id="MIDDLE" style="background-image:url('images/<?php print_r($_SESSION['bhavesh']['user']['msthem']); ?>'); flex-direction: column-reverse;">

<?php 
if(isset($_POST['adddoc']))
{
    
   
 $file_name=$_FILES['post_doc']['name'];
    
    if($file_name=='')
    {
        echo "";
    }else{
    
     $con=mysqli_connect("localhost","root","","interect");
        $folder="C:/wamp/www/sark tank/msgphoto/".$file_name;
        
        move_uploaded_file($_FILES['post_doc']['tmp_name'],$folder);
        $user_id=$_SESSION['bhavesh']['user']['id'];
        $str="INSERT into  messages(from_user_id,to_user_id,doc) values($user_id,'$bhavesh','$file_name')";
        $str1="INSERT into  dup(from_user_id,to_user_id,doc) values($user_id,'$bhavesh','$file_name')";
        $re=mysqli_query($con,$str);
        $re2=mysqli_query($con,$str1);
       
        if($re)
        {
            header('location:messanger.php');
            echo "added sucessfully";
        }
        else {
            echo "somting roung";
        }
     }
}
if(isset($_POST['addvideo']))
{
    
   
 $file_name=$_FILES['video']['name'];
    
    if($file_name=='')
    {
        echo "";
    }else{
    
     $con=mysqli_connect("localhost","root","","interect");
        $folder="C:/wamp/www/sark tank/msgphoto/".$file_name;
        
        move_uploaded_file($_FILES['video']['tmp_name'],$folder);
        $user_id=$_SESSION['bhavesh']['user']['id'];
        $str="INSERT into  messages(from_user_id,to_user_id,video) values($user_id,'$bhavesh','$file_name')";
        $str1="INSERT into  dup(from_user_id,to_user_id,video) values($user_id,'$bhavesh','$file_name')";
        $re=mysqli_query($con,$str);
        $re2=mysqli_query($con,$str1);
       
        if($re)
        {
            header('location:messanger.php');
            echo "added sucessfully";
        }
        else {
            echo "somting roung";
        }
     }
}
if(isset($_POST['addphoto']))
                                           {
                                               
                                              
                                            $file_name=$_FILES['post_img']['name'];
                                               
                                               if($file_name=='')
                                               {
                                                   echo "";
                                               }else{
                                               
                                                $con=mysqli_connect("localhost","root","","interect");
                                                   $folder="C:/wamp/www/sark tank/msgphoto/".$file_name;
                                                   
                                                   move_uploaded_file($_FILES['post_img']['tmp_name'],$folder);
                                                   $user_id=$_SESSION['bhavesh']['user']['id'];
                                                   $str="INSERT into  messages(from_user_id,to_user_id,photo) values($user_id,'$bhavesh','$file_name')";
                                                   $str1="INSERT into  dup(from_user_id,to_user_id,photo) values($user_id,'$bhavesh','$file_name')";
                                                   $re=mysqli_query($con,$str);
                                                   $re2=mysqli_query($con,$str1);
                                                  
                                                   if($re)
                                                   {
                                                       header('location:messanger.php');
                                                       echo "added sucessfully";
                                                   }
                                                   else {
                                                       echo "somting roung";
                                                   }
                                                }
                                           }
                                         
                                           if(isset($_POST['deletemsg']))
                                           {
                                            $msgdelete=$_POST['deletemsg'];
                                            $con=mysqli_connect("localhost","root","","interect");
                                            $str="DELETE from messages where id=$msgdelete";
                                            $re=mysqli_query($con,$str);
                                      
                                            if($re)
                                            {
                                                header('location:messanger.php');
                                                echo "delete sucessfully";
                                               
                                            }
                                            else {
                                                echo "somting roung";
                                            }
                                           }
                                           

?>
<div style=" background:linear-gradient(rgba(163, 23, 121, 0.4),rgba(123, 106, 218, 0.4)); padding:4px;" ><form method="POST"><table><tr><td ><img class="imagebtn" style="margin-right:15px;"  src="camara2.png" height="40" width="40"></img></td><td>
    <button type="button" style="border-radius:40px;" onclick="videopop40()"><img id="video1" style="border-radius:30px; background-color:white;" src="images/icon/youtube.png" height="40" width="40"></img></button></td><td><textarea style="border-radius:30px;" name="message1"  cols="100" rows="1"></textarea></td><td><button style="" class="sendm" name="send" value="<?php print_r($bhavesh); ?>">Send</button></td><td><button type="button" style="border-radius:14px;" onclick="pdfopen()"><img style="border-radius:0px;padding:2px; background-color:white;" src="images/icon/jjj.png" height="40" width="40"></img></button> </td><tr></table></form></div>
<div style=" background-color:white; height:60px;border-bottom:2px solid black; margin-bottom:19px;" ><center><table style="   margin-left:5px;"><tr><td><h2 style="margin-right:14px;">To  :  </h2></td><td ><img style="margin-right:15px;" id="probtn" src="images/<?php  $ch_user=getuser($bhavesh); print_r($ch_user['pro_pic']);?>"  height="40" width="40"></img></td><td><h2 style="color:black;"><?php  print_r($ch_user['name']);?></h2></td></tr></table></center></div>
    <?php if(empty($chatbh)){echo "";} else{ foreach($chatbh as $cm){if($cm['from_user_id']==$_SESSION['bhavesh']['user']['id']){ ?>
        <table>
        <tr><td><div  style="margin-left:850px;"><form method="POST"><button name="deletemsg" style=" background-color:red; color:white;" value="<?php echo $cm['id']; ?>">X</button></form></div></td></tr>
            <tr>
               
                <td>
        <div id="me" <?php  if(empty($cm['photo'])){ ?> style=" background-color:blue;color:white;border:2px solid black; border-radius:25px 0px 25px 0px; padding:10px;display:inline-block;
 
 margin-top:8px;
 margin-left:660px;
 font-size:20px;
width:194px;" <?php } else{ ?> style="color:black;padding:8px;display:inline-block;
 flex-direction: column-reverse;
 margin-top:8px;
 margin-left:660px;
 font-size:20px;
width:194px"<?php }if($cm['video']){ ?>style=" background-color:white;color:white;border:2px solid black; border-radius:25px 0px 25px 0px; padding:10px;display:inline-block;
 
 margin-top:8px;
 margin-left:660px;
 font-size:20px;
width:194px;"  <?php } ?>>
<?php if($cm['msg']){ print_r($cm['msg']);}if($cm['photo']){?><img style="border:3px solid black;" src='msgphoto/<?php print_r($cm['photo']);?>' height=120 width=100></img><?php }elseif($cm['video']){ ?><video   height="300" width="200"   controls ><source src='msgphoto/<?php echo $cm['video']?>' type='video/mp4'></video><?php } ?><?php if($cm['doc']){?><embed type="application/pdf" src="msgphoto/<?php echo $cm['doc'] ?>" height="300" width="200" ><?php }?><br>
    <span><font size="2"><?php print_r(gettime($cm['create_at']));?></font></span>
</div>
    </td><td><img style="margin-right:15px;" id="probtn" src="images/<?php  print_r($_SESSION['bhavesh']['user']['pro_pic']);?>"  height="40" width="40"></img></td>
    </tr>
    </table>
<?php }else{  ?>

<div <?php  if(empty($cm['photo'])){ ?>   style=" background-color:white; color:black;   
    border:2px solid black; border-radius:0px 25px 0px 25px; padding:10px; display:inline-block; margin-top:30px; font-size:20px; width:210px;"<?php }if($cm['video']){?> style="padding:8px; display:inline-block; margin-top:30px; font-size:20px;" <?php } if($cm['photo']){ ?> style="padding:8px; display:inline-block; margin-top:30px; font-size:20px;"<?php }?> class="you">
<?php if($cm['msg']){ print_r($cm['msg']);}if($cm['video']){?><video   height="300" width="200"  controls ><source src='msgphoto/<?php echo $cm['video']?>' type='video/mp4'></video><?php }if($cm['photo']){?><img  style="border:3px solid black;" src='msgphoto/<?php print_r($cm['photo']);?>' height=120 width=100></img><?php }?><?php if($cm['doc']){?><embed type="application/pdf" src="msgphoto/<?php echo $cm['doc'] ?>" height="300" width="200" ><?php }?><br>
    <span><font size="2"><?php print_r(gettime($cm['create_at']))?></font></span>
</div><img style="margin-right:15px;" id="probtn" src="images/<?php  $ch_user=getuser($bhavesh); print_r($ch_user['pro_pic']);?>"  height="40" width="40"></img><br>

<?php }}}?>
    
</div>
</td></tr></table>
<div class="right">

<div class="postphoto">
    <div class="postphoto2"><center>



        <div class="postq"><h3>Send photo</h3></div>
      
        <form  method="POST" enctype="multipart/form-data" >
                <table>
           </tr><tr><td  colspan=3><div id="display_image"><img src="" style="display:none;" id="post_img" height="245" width="400"></img></div></td> 
            </tr>
          
            <tr><td>              
                <input type="file" id="select-post-image" name="post_img" multiple></td>
                
                <td><input type="submit" class="nnn" id="postbtn3"  name="addphoto" value="Send"></td>
                <td><input type="button" class="nn1" id="cencel445"  value="cencel"></td></tr>
            </table>
            </form></center>
        
  </div>
</div>
</div>
</div>

</main>
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

<script >
  
                
const photobtn = document.querySelector('.imagebtn');
const photosend =document.querySelector('.postphoto');
const  cencelphoto=document.querySelector('#cencel445');

// start modal
const photoopen = () => {
    photosend.style.display = 'grid';
}

const photoclose = (f) =>
{
    f.target.classList.contains('.postphoto')
    photosend.style.display = 'none';
    1
}
// close modal

photobtn.addEventListener('click', photoopen);
cencelphoto.addEventListener('click', photoclose );

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
var videopop401= document.querySelector('.videopop');
var pdf1=document.querySelector('.pdf1');
function pdfclose()
    {
        pdf1.style.display="none";
    }
    function pdfopen()
    {
        pdf1.style.display="grid";
    }
    function videopop40()
    {
        videopop401.style.display="grid";
    }
    function videoclose40()
    {
        videopop401.style.display="none";
    }
//images load on post
const theambtn = document.querySelector('#theambtn');
const theam =document.querySelector('#theamby');
const theamcl =document.querySelector('#cenceltheam');
// start modal
const opentheam = () => {
    theam.style.display = 'grid';
   
}

const cenceltheam = (f) =>
{
    f.target.classList.contains('#theamby')
        theam.style.display = 'none';
    
}

// close modal

theambtn.addEventListener('click', opentheam);
theam.addEventListener('click', cenceltheam );

                function color1(color)
            {
                
                document.getElementById('change_m').style.backgroundColor=color;
                document.getElementById('MIDDLE').style.backgroundImage="url('images/white.jpg')";
              
               
            }
            function color2(color)
            {
                
                document.getElementById('change_m').style.backgroundColor=color;
                document.getElementById('MIDDLE').style.backgroundImage="url('images/love200.jpg')";
               
            }
            function color3(color)
            {
                
                document.getElementById('change_m').style.backgroundColor=color;
                document.getElementById('MIDDLE').style.backgroundImage="url('images/sky.jpg')"; 
                
               
            }
            function color4(color)
            {
                
                document.getElementById('change_m').style.backgroundColor=color;
                document.getElementById('MIDDLE').style.backgroundImage="url('images/orange.jpg')"; 
               
            }
            function color5(color)
            {
                
                document.getElementById('change_m').style.backgroundColor=color;
                document.getElementById('MIDDLE').style.backgroundImage="url('images/ispazio.png')";
               
            }
            function color6(color)
                {
                 
                    document.getElementById('change_m').style.backgroundColor=color;
                    document.getElementById('MIDDLE').style.backgroundImage="url('images/2224368.png')";
                   
                   
                }
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
         
           
</script>  

</body>
</html>
