<!--
NAME OF PROJECT: INTERACT SOSCIL MIDEA SITE
DVELOPER NAME  : CHAVDA BHAVESH
YEAR           : 2023
COLLAGE        : S C GANDHI BCA COLLAGE
PAGE           : TYPING GAME PAGE 
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .main-box{
            width: 100%;
            height: 100vh;
            position: relative;
            background-color: #3498db;
        }
        .box-sub
        {
            position: absolute;
            top:50%;
            left: 50%;
            transform: translate(-50% ,-50%);
            text-align: center;
        }
        #textid
        {
            border:10px solid #34495e;
            color: white;
            border-radius: 10px 10px 0 0 ;
            background-color: #444;
            font-size: 1.3rem;

        }
        h1
        {
            color: white;
            
            
        }/*---------------navbar--------------*/
nav{
    width :100%;
    padding-bottom:0px;
    position: fixed;
    top:0;
    left: 0;
    height: 63px;
    line-height: 12px;
    z-index: 6;
   background-color: rgb(48, 47, 47);
    color:black;
    border-bottom: 2PX solid rgb(247, 244, 244);
    
}
nav .container
{
    display: flex;
    align-items: center;
    justify-content: space-between;
    line-height: 0.7px;
}
nav .container .log 
{
    text-transform: lowercase;
    color:rgb(252, 250, 250);
    padding: 10px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    position: relative;
    font-size: 30px;
}

 .search-bar
{
    background: #f9f9fa;
    border-radius:var(--border-radius);
    padding:8px;


}
 .search-bar input[type="search"]
{
    background: transparent;
    width:20vw;
    margin-left:0px;
    font-size: 0.9rem;
    color:var(--color-dark);
    border:1px solid white;
    
}

nav .search-bar input[type="search"]::placeholder
{
    color:rgb(88, 88, 85);

}
nav .create
{
    display: flex;
    align-items: center;
    gap:2rem;
    
}
       
        .start
        {
            border-radius:10px 10px 0 0;
            padding: 10px ;
            background-color: darkblue;
            color: white;
            font-size: 15px;
        }
    </style>
</head>
<body>
<div class="main-box">
<?php session_start(); ?>
<nav style="background-color:rgb(48, 47, 47); border-radius:0px;" id="nav1">
    <div class="container">
        <h2 style="padding:16px; margin-left:7px; background-color:red; color:white; border-radius:20px;font-family: sans-serif;  border:1px solid red; font-size:25px;" class="log">
             <div ><font color="blue" size="5">interact</font> typing game</div>
            
        </h2> 
        
       
      
        
        <div class="create" style="padding-top:5px; margin-right:10px; color:white; border-radius:30px; padding-left:10px;">
       
        <center style=" border-radius:20px; border-bottom:1px solid black; ">
<table  celpading='0' celspacing='0'>
      <tr><td ><img style="margin-right:15px; border-radius:100%;" id="probtn" src="images/<?php  print_r($_SESSION['bhavesh']['user']['pro_pic']);?>"  height="50" width="50"></img></td><td width="50px" > <h3 style="  height:10px;  margin:6px;"><?php print_r($_SESSION['bhavesh']['user']['name']); ?></h3></td></tr>
        </table></center>
        <div style="margin-right:30px;" class="search-bar">
       
            <a href="sarktank.php"><img  src="images/icon/home.png" width="30" height="30"></img></a>
            
        </div>

            </div>
 
       
        </div>
    </div>
</nav>
    <div class="box-sub">    
    
        <p class="main-text"><h1>Typing Test</h1></p> <br>
        <p id="msg"class="togglebox"></p><br>
        <textarea id="textid" rows="10" cols="100"></textarea><br><br>
        <button id="btn" class="start" type="button">Start</button>
    </div>
</div>
<script>
    const setofwords=[
        "my name is chavda bhavesh. i am so cool",
        "so what up guy\' you all fine i am bhavesh and i am bca student ",
        "wow this is so cool how can you write this seep so fast typing which place you learn this all",
        "ok bro you are righ i understan what are you said so fine let\s start ovar session ",
        "hey what\' up raman i am nilesh can i ask qustion if yes than what\s your age"
];
const msg=document.getElementById('msg');
const typeword=document.getElementById('textid');
const btn= document.getElementById('btn');
let startTime,endTime;
const playgame=()=>
{
    let randomNumber=Math.floor(Math.random()*setofwords.length);
    msg.innerText=setofwords[randomNumber];
    let date = new Date();
    startTime=date.getTime();
    btn.innerText="Done";
}

const endplay=()=>
{
    let date = new Date();
    endTime=date.getTime();
    let totalTime=((endTime-startTime)/1000);
    console.log(totalTime);
    let totalSrging= typeword.value;
    let wordCount=wordCounter(totalSrging);
    let speed =Math.round((wordCount/totalTime)*60);
    let finelword="you typed total at  "+speed+"  word per minutes";
    finelword+=compareword(msg.innerText,totalSrging);
    msg.innerText=finelword;
}
const compareword=(str1,str2)=>
{
    let word1= str1.split(" ");
    let word2=str2.split(" ");
    let cnt=0.
    
    word1.forEach(function(item,index){
        if(item==word2[index])
        {
            cnt++;
        }
    })
    let errorWords =(word1.length -cnt);
    return (cnt+" correct out of "+word1.length+" words and the total number of error are "+errorWords+".");

}
const wordCounter=(str)=>
{
    let response= str.split(" ").length;
    return response;
}
btn.addEventListener('click',function(){
    if(this.innerText=='Start')
    {

        typeword.disabled = false;
         playgame();
         
                
    }
    else if(this.innerText=='Done'){
        typeword.disabled= true;
        btn.innerText="Start";
        endplay();
    }

});


</script>


</body>
</html>