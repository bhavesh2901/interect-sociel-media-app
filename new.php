<?php
   function getuser()
   {
       $conn=mysql_connect("localhost","root","");
       $db= mysql_select_db("interect",$conn);
     
       $str ="SELECT * from user ";
       $result=mysql_query($str);
       return mysql_fetch_assoc($result);
      
       
   }
   $user=getuser();
   print_r($user);
?>