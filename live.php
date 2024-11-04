<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php $con=mysqli_connect("localhost","root","","interect");
  if(!$con)
  {
    echo "connection is failed".mysqli_connect_error();
  }
 
    $input=$_POST['live1'];
    $query="SELECT *from user where live like '{$input}%'  ";
    $result= mysqli_query($con,$query);
    $rows=mysqli_fetch_all($result,true);
  
    ?><center>
       <table id="customers" >
       <tr>
        <th>Joined date</th>
        <th>profile</th>
        <th>name</th>
        <th>profie name</th>
        <th>gender</th>
        <th>merital</th>
        <th>mobail</th>
        <th>school</th>
        <th>collage</th>
        <th style="color:red;">live</th>
       
      </tr>
      <?php if($rows==''){ echo "<h3 style='margin-top:50px;color:blue;'>no data found</h3>";}else{ foreach($rows as $row=>$m){ ?>
        <tr>
          
                
            
          
        <td><?php echo $m['createat']; ?></td>
        <td><img src='images/<?php print_r($m['pro_pic']); ?>' width='40'height='40'></img></td>
        <td><?php echo $m['name']; ?></td>
        <td><?php echo $m['user_profile']; ?></td>
        <td><?php if( $m['gender']=='1'){echo "male";} else if($m['gender']=='2'){echo "female";}else if($m['gender']=='0'){echo "other";} ?></td>
        <td><?php echo $m['marital_status']; ?></td>
        <td><?php echo $m['mobail']; ?></td>
        <td><?php echo $m['school']; ?></td>
        <td><?php echo $m['collage']; ?></td>
        <td style="color:red;"><?php echo $m['live']; ?></td>
    </tr>
    <?php } }?>
    </table>
    <center>
  
  
 


  
  
</body>
</html>