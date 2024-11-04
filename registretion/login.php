
<html>
    <head>
        <title>using java script form</title>
        <link href="stylejava.css" rel="stylesheet">
    </head>
    <body>
        <center><div  class="div1"><h1>interect</h1></div></center>
        <center>
        <div class="box">
            <center>
                <div class="m-img">
                <center> <img class="f-logo" src="ios7-contact-outline_icon-icons.com_50287.png" ></img></center>
                </div></center><br>
                <?php
if(isset($_POST["submit"]))
{
   
    
$conn=mysql_connect("localhost","root","") or die ("database is not connect");
$db= mysql_select_db("interect",$conn);
$uname=$_POST["t1"];
$pwd=$_POST["t2"];
$str ="SELECT *from user where name='.$uname.' and password='.$pwd.'";
$result=mysql_query($str);
$ans=mysql_num_rows($result);
if($ans==0)
	{
	echo"either username and password is wrong";
	}
else
	{
        require('startpage.html');
	echo "password is  correct";
	}

}
?>

                <form method="POST" >
 <input type="button" value="E-mail" id="f-fabook" class="facebook">
 <input type="button" value="twitter" id="f-twitter" class="twitter">           
 <input type="button" value="instagram" id="f-fabook" class="instagram"><br><br>
<input type="text" name="t1" placeholder="userame" id="f-name" size="30" class="name"><br/>
<p id="usererror" class="error"></p><br>
<input type="password" name="t2"  placeholder="password"  id="f-password" size="30" class="password"><br/>
<p id="passworderror" class="error"></p><br>
<input type="submit" name="submit" value="login" id="f-submit" class="submit">
<input type="reset" name="reset" value="cencel" id="f-cencel" class="cencel">
</form>
<p>if not registed ? <a href="javascript-form.php">registed</a>  </p>  
<div>
    </div></center>
    <body>

	
    </body>
   
    </script>
</html>
