<?php $con=mysqli_connect("localhost","root","","interect");
  if(!$con)
  {
    echo "connection is failed".mysqli_connect_error();
  }
  if(isset($_POST['input']))
  {
    $input=$_POST['input'];
    $query="SELECT *from user where name like '{$input}%' or user_profile like '{$input}%' ";
    $result= mysqli_query($con,$query);
    $rows=mysqli_fetch_all($result,true);
  
    ?><center>
       <table  >
        <tr>
            <?php if($rows==''){ echo "<h3 style='margin-top:50px;color:blue;'>no data found</h3>";}else{ foreach($rows as $row=>$m){
                
             ?>
           <table style="background-color:#d8d8e1; padding:10px;margin-top:4px;" width="280"><tr><td>
                                        
                                        <a href="profile.php?u=<?php echo $m['name'] ?>"><img src="images/<?php echo $m['pro_pic']; ?>" height="54" width="54"></img></a></td><td><div class="message-body">
                                                 <table class="followheight"><tr><td>
                               
                                                 <h5><a href="profile.php?u=<?php echo $m['name'] ?>"><font color='black' ><?php echo $m['name']; ?></font></a></h5></td></tr><tr><td>@<?php echo $m['user_profile']; ?></td></tr></table>
    </tr>
    
    </table>
    <center>
   <?php } }
  
  }
  else
  {
      echo "<h6>no data found</h6>";
  }

  
  ?>