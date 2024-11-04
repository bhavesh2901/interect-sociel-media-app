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
        $re=mysqli_query($con,$str);
        if($re)
        {  
            $str2="update user set ac_status='0' where id=$currentuser";
        $re2=mysqli_query($con,$str2);
            echo "<script> confirm('are you sure delete account temporary ');</script>";
 
        }else
        {
            echo "email or password wrong";
        }
        
    }
    ?>
    <Table>
        <tr>
            <td><img src='images/delete1.jpg' width='730' height='700'></img><td>
                <td><a href="deleteaccount.php"style="box-shadow: 0 0.3rem 0.5rem  rgb(112, 111, 111); padding:10px; margin-left:30px; background-color:green; color:white;font-size:13px"  >Back</a><br>
                <h3 style="margin-left:30px;box-shadow: 0 0.3rem 0.5rem  rgb(112, 111, 111);padding:10px;background-color:pink;font-family:'arial';">temporary deletion your acccount dose not delate permenentaly delete but it
only hide your account From other user other
other user cant not access your account</h3> <center><br>
<center style="margin-left:30px;padding:3px;background-color:#8c92e9;"><h2>interact</h2></center>
                    <form method="POST" style="box-shadow: 0 0.3rem 0.5rem  rgb(112, 111, 111);30px;border:none; padding:100px;margin-left:30px;"><center>
                        <table cellpadding="4" cellspacing="4">
                        
                            <tr><td><h2><?php echo $_SESSION['bhavesh']['user']['name']; ?></h2><br><br></td><tr>
                                <tr><td><input style="box-shadow: 0 0.3rem 0.5rem  rgb(112, 111, 111); padding:6px;" name="email" placeholder="e-mail" size='30' type="text"><br><br></td></tr>
                                <tr><td><input style="box-shadow: 0 0.3rem 0.5rem  rgb(112, 111, 111); padding:6px;" name="password" placeholder="password" type="text" size='30'><br><br></td></tr>
                                <tr><td><input style="box-shadow: 0 0.3rem 0.5rem  rgb(112, 111, 111); padding:6px; background-color:red; color:white;font-size:13px" name="delete" type="submit" value="Temporary Delete Account"></td></tr>
                        </table>                 </center>
                    </form>
                    </center>
                </td>
</tr>
</table>
</body>
</html>