<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="font-family:'arial';">
    <?php 
    if(isset($_POST['delete']))
    {
        $con=mysqli_connect("localhost","root","","interect");
        $email=$_POST['email'];
        $password=$_POST["password"];
        $currentuser=$_SESSION['bhavesh']['user']['id'];
        $currentusername=$_SESSION['bhavesh']['user']['name'];
        $str="select *from user where email='$email' and password='$password'";
        $result=mysqli_query($con,$str);
        if($result)
        {   // main database delete
            $str2="delete from user where id=$currentuser";
            $result2=mysqli_query($con,$str2);
            //post delete of its
            $str3="delete from posts where userid=$currentuser";
            $result3=mysqli_query($con,$str3);
            //post messages
            $str4="delete from postmsg where sender=$currentuser or reciver=$currentuser";
            $result4=mysqli_query($con,$str4);
            //notification
            $str5="delete from notification user where whofollow=$currentusername or whom=$currentusername";
            $result5=mysqli_query($con,$str5);
            //messanger
            $str6="delete from messages  where from_user_id=$currentuser or to_user_id=$currentuser";
            $result6=mysqli_query($con,$str6);
            //like
            $str7="delete from likes  where user_id=$currentuser ";
            $result7=mysqli_query($con,$str7);
            //followlist
            $str8="delete from  follow_list where follower_id=$currentuser or userid=$currentuser";
            $result8=mysqli_query($con,$str8);
            
            echo "<script> confirm('are you sure delete account peremenent');</script>";
 
        }else
        {
            echo "email or password wrong";
        }
        
    }
    ?>
    <Table>
        <tr>
            <td><img src='images/delete2.png' width='730' height='700'></img><td>
                <td><a href="deleteaccount.php"style="box-shadow: 0 0.3rem 0.5rem  rgb(112, 111, 111); padding:10px; margin-left:30px; background-color:green; color:white;font-size:13px"  >Back</a><br>
                <h3 style="margin-left:30px;box-shadow: 0 0.3rem 0.5rem  rgb(112, 111, 111);padding:10px;background-color:pink;font-family:'arial';">alert you when you delete account after Deletion of permenentaly than
                          your cant not access account also you lost your all data post , images 
                          video</h3> <center><br>
                          <center style="margin-left:30px;padding:3px;background-color:#8c92e9;"><h2>interact</h2></center>
                    <form method="POST" style="box-shadow: 0 0.3rem 0.5rem  rgb(112, 111, 111);30px;border:none; padding:100px;margin-left:30px;"><center>
                        <table cellpadding="4" cellspacing="4">
                        
                            <tr><td><h2><?php echo $_SESSION['bhavesh']['user']['name']; ?></h2><br><br></td><tr>
                                <tr><td><input style="box-shadow: 0 0.3rem 0.5rem  rgb(112, 111, 111); padding:6px;" name="email" placeholder="e-mail" size='30' type="text"><br><br></td></tr>
                                <tr><td><input style="box-shadow: 0 0.3rem 0.5rem  rgb(112, 111, 111); padding:6px;" name="password" placeholder="password" type="text" size='30'><br><br></td></tr>
                                <tr><td><input style="box-shadow: 0 0.3rem 0.5rem  rgb(112, 111, 111); padding:6px; background-color:red; color:white;font-size:13px" name="delete" type="submit" value="Permanent Delete Account"></td></tr>
                        </table>                 </center>
                    </form>
                    </center>
                </td>
</tr>
</table>
</body>
</html>