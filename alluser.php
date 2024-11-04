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
              <h2><i class="fa">&#xf0c0;</i> All Members</h2>
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
                  <th>profile</th>
                  <th>bio_pic</th>
                  <th>gender</th>
                  <th>mobail</th>
                  <th>live</th>
                  <th>action</th>
                </tr>
                <?php foreach($user as $u){ ?>
                <tr>
                  <td><?php print_r(gettime2($u['create at'])); ?></td>
                  <td><?php print_r($u['name']); ?></td>
                  <td><img src='images/<?php print_r($u['pro_pic']); ?>' width='40'height='40'></img></td>
                  <td><img src='images/<?php print_r($u['bio_pic']); ?>' width='40'height='40'></img></td>
                  <td><?php if($u['gender']==1){echo "male";}else{echo "female"; } ?></td>
                  <td><?php print_r($u['mobail']); ?></td>
                  <td><?php print_r($u['live']); ?></td>
                  <td>
                    <form method="POST">
                     
                   <button name="deluser" style="border:none;" value="<?php print_r($u['id']); ?>"> <a class='actions-btns2' href='#'><i class="fa fa-times"></i></a></button>
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
</body>
</html>