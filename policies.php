<?php session_start(); ?>
<html>
<head>
<title>new diynamic my self project </title>
<style type="text/css">
.menu-bar
{
background-color:#353535;
text-align:center;
}
.menu-bar ul
{
display:inline-flex;
list-style:none;
color:#ffffff;
}
.menu-bar li
{
width:200;
}
.menu-bar a
{
text-decoration:none;
color:#ffffff;
}
.active,.menu-bar ul li:hover
{
background:1a1a20;
border-radius:6px;
}
.sub-menu-1
{
display:none;
}
.menu-bar ul li:hover .sub-menu-1
{
display:block;
background-color:#1b1b60;
margin-top:15;
margin-left:-15;
}
.menu-bar ul li:hover .sub-menu-1 ul
{
display:block;
margin:10px;
}
.menu-bar ul li:hover .sub-menu-1 ul li
{
width:100px;
padding:10px;
background:transparent;
border-radius:0;
text-align:left;
}

</style>
</head>
<body >
<i--- start heading-->
<table border=0  width=100%  cellpadding="0" cellspacing="0" bgcolor="6c2773">
<tr><td><table border=0 width=100% cellpadding=15 cellspacing=0 alingn=center bgcolor=#353535>
         <tr >
         <td bgcolor="951a1a"><font size=6 face="Matura MT Script Capitals" color=#ffffff>
         <strong>privecy police</strong>
             </font>
         </td>
         </tr>
         </table>
         </td>
         </tr>
		<tr>
		<td>
		<div class="menu-bar">
			<form method="POST">
    		<ul>
		<li class="active"><a herf="#"></i><button style="background-color:#353535; border:none; color:white;" name="home">home</botton></a></li>
		
	
		
		<li><a herf="#"><button style="border:none; background-color:#353535; color:white;" name="term">Terms  </button></a></li>
		<li><a herf="#"><button style="border:none; background-color:#353535; color:white;" name="service">Service</button></a></li>
		<li><a herf="#"><button style="border:none; background-color:#353535; color:white;" name="who">who use interact?</button></a></li>
		<li><a herf="#"><button style="border:none; background-color:#353535; color:white;" name="addtional">Additional provisions</button></a></li>
		<li><a herf="#"><button style="border:none; background-color:#353535; color:white;" name="deletion" >Deletion account</button></a></li>
</form>
		</div>
<i--- and heading-->
<i---home-->

<div style="background-color:black;">
<?php 
if(isset($_POST['home']))
{
	require('about.php');
}
else if(isset($_POST['deletion']))
{
	header('location:deleteaccount.php');
}
else if(isset($_POST['term']))
{
	require('terem.php');
}
else if(isset($_POST['service']))
{
	require('service.php');
}
else if(isset($_POST['who']))
{
	require('who.php');
}
else if(isset($_POST['addtional']))
{
	require('addtiion.php');
}
else
{
	require('about.php');
}
?>
</div>

</head>
</html>
