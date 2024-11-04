<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .middle .stories
{
    display: flex;
    justify-content: space-between;
    height: 13rem;
    gap:0.5rem; 
 
    border-radius: 7px ;
}

.middle .stories .story
{
    padding: var(--card-padding);
   border-radius: 3px;
    display: flex;
    flex-direction:column;
    justify-content:space-between;
    align-items:var(--left);
    height: 168px;
    color:white;
    font-size: 0.75rem;
    width: 100%;
    position: relative;
    border-left: 6px solid rgb(39, 16, 141);
    border-top: 4px solid rgb(37, 26, 138);
    border-radius: 10px;

}
.middle .stories .story::before
{
    content: "";
    display:block;
    width: 88%;
    height: 5rem;
    background:linear-gradient(transparent , rgba(0, 0, 0, 0.87));
    position: absolute;
    bottom: 0;
}
.middle .stories .story .name
{
    text-transform: capitalize;
    z-index: 0;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
.middle .stories .story:nth-child(1)
{
   background: url("images/Anushka_Sharma.jpg")
   no-repeat center center/cover; 
}
.middle .stories .story:nth-child(2)
{
   background: url("images/Kareena_Kapoor.jpg")
   no-repeat center center/cover;
  
}
.middle .stories .story:nth-child(3)
{
   background: url("images/KareenaWall6GX.gif")
   no-repeat center center/cover; 
}
.middle .stories .story:nth-child(4)
{
   background: url("images/KareenaCCK25.gif")
   no-repeat center center/cover; 
}
.middle .stories .story:nth-child(5)
{
   background: url("images/karin.jpg")
   no-repeat center center/cover; 
}
.middle .stories .story .pro1
{
  ruby-align: left;
}
.middle .story .profile-photo
{
    width:2rem;
    height: 2rem;
    text-align: left;
  
    border:4px solid #272b69;
} 
        </style>
</head>
<body>
    

<!---------------------sotory----------------------------->
 <div class="stories">
                                         <div class="story">
                                             <div class="pro1">
                                                 <img class="profile-photo" src="images/<?php print_r($_SESSION['bhavesh']['user']['pro_pic']);?>" height="70" width="70">
                                             </div>
                                             <p class="name">your story</p>
                                         </div>
                                         <div class="story">
                                            <div class="pro1">
                                                <img class="profile-photo" src="images/lembor.jpeg"height="70" width="70">
                                            </div>
                                            <p class="name">nita ambani</p>
                                        </div>
                                        <div class="story">
                                            <div class="pro1">
                                                <img class="profile-photo" src="images/pexels.jpeg"height="70" width="70">
                                            </div>
                                            <p class="name">anil ambani</p>
                                        </div>
                                        <div class="story">
                                            <div class="pro1">
                                                <img class="profile-photo" src="images/pllllllol.jpg"height="70" width="70">
                                            </div>
                                            <p class="name">ratan tata</p>
                                        </div>
                                        <div class="story">
                                            <div class="pro1">
                                                <img class="profile-photo" src="images/llllllll.jpg"height="70" width="70">
                                            </div>
                                            <p class="name">karshan patel</p>
                                        </div>
                                     </div>
                                       <!--------------------------- END STORY -------------------------------></body>
</html>