<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class='newest-members' >

<div style='width: -webkit-fill-available;' class='notifications'>
  <div class='notify-header'>
    <h2><i class="fa">&#xf0c0;</i> Refuse Members</h2>
    <div class='action-holder'>
      <i class="fa">&#xf106;</i> <i class="fa">&#xf013;</i>
    </div>
  </div>

  <div class='notify-box' style="height:400px;">
                           <?php  
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
</body>
</html>