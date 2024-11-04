<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  method="POST" enctype="multipart/form-data" >
                    
<input type="file" accept="video/*"  runat="server" size="20" name="file" >
                
                <input type="submit" class="nnn" id="postbtn3"  name="addvideo" value="post">
              
          
            </form>
</body>
</html>
<?php 
if(isset($_FILES['file']))
{
    $name=$_FILES['file'];
    print_r($name);
    header('loction:demo.php');
}
?>