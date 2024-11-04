<!--
NAME OF PROJECT: INTERACT SOSCIL MIDEA SITE
DVELOPER NAME  : CHAVDA BHAVESH
YEAR           : 2023
COLLAGE        : S C GANDHI BCA COLLAGE
PAGE           : START PAGE 
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .startpage1
{

    width: 100%;
    height: 100%;
    position: fixed;
    top:0;
    left:0;
    z-index: 100;
    text-align: center;
    display: grid;
    place-content: center;
    animation-name: startpage;
    animation-iteration-count:unset ;
    animation-duration:3s; 
   background-color: #111111;
}

.page
{
   
    padding:100px;
    width: 100px;
    animation-name: inter;
    animation-iteration-count:unset ;
    animation-duration:3s; 
   
    background-size: 60px;
    margin-right: 270px;
    margin-bottom: 290px ;
}
.loading-area
{
    position: fixed;
    left: 0;
    top:35%;
    right: 7%;
    z-index: 1000;
    background: #000;
}
.loader
{
    width: 200px;
    height: 200px;
    line-height: 200px;
    text-align: center;
    position:absolute;
    left: 50%;
    top:50%;
    margin: -3pc  0 0 -50px;
    font-size: 30px;
    color:#fff;
 
}
.load_anim1,.load_anim2,.load_anim2
{
    position: absolute;
    width: 300px;
    height: 300px;
    border-radius: 50%;
    border: 10px solid;
    border-left-color:#10ac84;
    border-top-color:#ff9f43;
    border-right-color:#0984e3;
    border-bottom-color:#d63031;
    position: absolute;
    left: 50%;
    right: 50%;
    margin: -100px 0 0 -100px;
    animation: loadanim 0.6s;
    animation-iteration-count: infinite;
    box-shadow: 0 0 2rem  rgb(14, 177, 22);
}
.load_anim2{
    animation: loadanim2 4s;
    animation-iteration-count: infinite;
}

@keyframes loadanim {
    0%{
        transform: rotate3d(1,1,1,0deg);
   
    }
 
    100%
    {
        transform: rotate3d(1,1,1,360deg);
        
    }
    
}
@keyframes loadanim2 {
    0%{
        transform: rotate3d(1,1,1,0deg);
    }
    100%
    {
        transform: rotate3d(1,1,1,-360deg);
    }
    
}
        </style>
</head>
<body>
<div class="startpage1">

  
<div class="loading-area"><span class="loader"><img style=" border-radius:100%;padding:4px;" src="images/icon/interect2901.png" width="200px" height="200px"></img><br><font size=10>interact</font></span>
<span class="load_anim1"></span>
<span class="load_anim2"></span>

</div>



</div>  
<script>
    var startpage = document.querySelector('.startpage1');
var page1= document.querySelector('.page');


window.onload =function(){
startpage.style.display="grid";
page1.style.display="grid";
}
setTimeout(function changeCss (){
    location.replace('sarktank.php');
},3000);
</script> 
</body>
</html>