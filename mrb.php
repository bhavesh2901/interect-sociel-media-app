
<?php

$file_name=$_FILES['file']['name'];
$file_size=$_FILES['file']['size'];
$file_tmp =$_FILES['file']['tmp_name'];
$file_type=$_FILES['file']['type'];
$file_error=$_FILES['file']['error'];
if(isset($_POST["submit"]))
{
                 
                if($file_type=="image/jpg"or $file_type=="image/jpeg" or $file_type=="image/png")
                {
                if($file_size>2097152)
                    {
                        echo "<h1>*file size must be less than 2 MB</h1>";
                    }
                else
                    {
      
                        move_uploaded_file($file_tmp,"images/".$file_name);
                        $folder="images/".$file_name;
                        echo "<h1>*insert successed</h1>";
                        
                    }
                }
                else
                {
                    echo "<font color=red><h1>*file must be(jpeg/jpg/png) format</h1></font>";
                
                   
                }
    
 
}
    ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data" action="C:/wamp/www/MATIRIAL 3/sorry.php">
            <table border=2>
            <tr>
            <td>
            file name:<br>
            <?php echo $file_name;?>
            </td></tr><tr>
            <td>
            file path:<br>
            <?php echo $file_tmp;?>
            </td></tr><tr>
            <td>
            type:<br>
            <?php echo $file_type;?>
            </td></tr><tr>
            <td>
            size:<br>
            <?php echo $file_size;?>
            </td>
            </tr>
            </table>
                <table border=2>
                    <tr><td>
            <input type="file" name="file"multiple></td>
            <tr><td>
            <?php echo "<img src='$folder' width='100' height='100'></img>"; ?></td></tr>
            <td><input type="submit" name="submit" value="upload"></td>
            </tr>
            </table>
            </form>
</body>
</html>