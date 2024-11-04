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
                $profile_pictur=$_POST['pro_pic'];
                $_SESSION['bhavesh']['user']['school']=$school1;
                $_SESSION['bhavesh']['user']['collage']=$collage1;
                $_SESSION['bhavesh']['user']['work']=$work1;
                $_SESSION['bhavesh']['user']['live']=$live1;
                $_SESSION['bhavesh']['user']['from_city']=$from1;
                $_SESSION['bhavesh']['user']['marital_status']=$marital1;

                $string="UPDATE user SET school='$school1',collage='$collage1',work='$work1',live='$live1',from_city='$from1',marital_status='$marital1' $profile_pic  where id=".$_SESSION['bhavesh']['user']['id'];
                $result=mysqli_query($con,$string);
                if($result)
                {
                    header('location:profile.php');
                    echo "<script>alert('edit-bio sucessfully')<script>";
                }
                else{
                    echo "something wrong";
                }
                
                }
                if(isset($_POST['addpro']))
                {
                $file_name=$_FILES['pro-pic']['name'];
                $folder="images/".$file_name;
                move_uploaded_file($_FILES['pro-pic']['tmp_name'],$folder);
                $profile_pic="pro_pic='$file_name'";
                $_SESSION['bhavesh']['user']['pro_pic']=$file_name;
                $str="UPDATE user SET  $profile_pic  where id=".$_SESSION['bhavesh']['user']['id'];
                $re=mysqli_query($con,$str);
                if($re)
                {
                    header('location:profile.php');
                    echo "<script>alert('update pic sucessfully')<script>";

                }
                else {
                echo "<script>alert('profile pic is update')<script>";
                }
                }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST"  enctype="multipart/form-data">
        <table  cellpadding="10" cellspacing="14">
        <tr><td colspan="2" class="postq">edit bio-data</td><td class="postq">edit profil-pic</td></tr>
        <tr><td>school:</td><td><input type="text" name="school" value="<?php print_r($_SESSION['bhavesh']['user']['school']) ?>" ></td><td><input type="file" id="select-post-image" name="pro-pic" value="<?php print_r($_SESSION['bhavesh']['user']['pro_pic']); ?>"></td></tr>
        <tr><td>collage:</td><td><input type="text" name="collage" value="<?php print_r($_SESSION['bhavesh']['user']['collage']) ?>" ></td><td rowspan="4"><div class="editimg"><img id="post_img" src="images/<?php print_r($_SESSION['bhavesh']['user']['pro_pic']); ?>" height="190" width="200"></img></div></td></tr>
        <tr><td>work:</td><td><input type="text" name="work" value="<?php print_r($_SESSION['bhavesh']['user']['work']) ?>" ></td></tr>
        <tr><td>live:</td><td><input type="text" name="live" value="<?php print_r($_SESSION['bhavesh']['user']['live']) ?>"></td></tr>
        <tr><td>from:</td><td><input type="text" name="from_city"  value="<?php print_r($_SESSION['bhavesh']['user']['from_city']) ?>"></td></tr>
        <tr><td>marital:</td><td><input type="text" name="marital" value="<?php print_r($_SESSION['bhavesh']['user']['marital_status']) ?>" ></td><br></tr>
        <tr><br><br><td><input type="submit" class="nnn" name="submit" value="update-bio"></td><td><input type="button" class="nnn" name="cencel" value="cencel" id="cencel33"></td><td ><input type="submit" value="update-profile" name="addpro" class="nnn"></td></tr>

</table>
</form>
</body>
</html>