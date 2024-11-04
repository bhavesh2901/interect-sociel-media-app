<!--
NAME OF PROJECT: INTERACT SOSCIL MIDEA SITE
DVELOPER NAME  : CHAVDA BHAVESH
YEAR           : 2023
COLLAGE        : S C GANDHI BCA COLLAGE
PAGE           : THEAM PAGE 
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /*===================================== color costimization================================================ */

.customize-theme .card
{
    background: var(--color-white);
    padding: 3rem;
    border-radius: var(--card-border-radius);
    transition: all 0.1s ease;
    
    box-shadow: 0 0 2rem  var(--color-primary);
}
/*======== font size====== */
.customize-theme .font-size
{
    margin-top: 5rem;
}
.customize-theme .font-size > div{
    display: flex;
    justify-content: space-between;
    align-items: center;
    background:var(--color-light);
    padding: var(--search-padding);
    border-radius: var(--card-border-radius);
}
.customize-theme .choose-size
{
    background: var(--color-secondary);
    height: 0.3rem;
    width: 100%;
    margin: 0.1rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.customize-theme .choose-size span
{
    width:  1rem;
    height: 1rem;
    background: var(--color-secondary);
    border-radius: 50%;
    cursor: pointer;
}
.customize-theme .choose-size span.active
{
    background: var(--color-primary);

}
/* ==============fontsize============== */

.customize-theme .color
{
    margin-top: 2rem;
}
.customize-theme .choose-color
{
    background: var(--color-light);
    padding: var(--search-padding);
    border-radius: var(--card-border-radius);
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.customize-theme .choose-color span
{
width: 2.2rem;
height: 2.2rem;
border-radius: 50%;
}
.customize-theme .choose-color span:nth-child(1)
{
    background-color: rgb(226, 218, 218);
}
.customize-theme .choose-color span:nth-child(2)
{
    background-color: #edc8dd;
}
.customize-theme .choose-color span:nth-child(3)
{
    background-color: #c8e6d5;
}
.customize-theme .choose-color span:nth-child(4)
{
    background-color: #e3bd9d;
}
.customize-theme .choose-color span:nth-child(5)
{
    background-color: hsl(202,75%,60%);
}
.customize-theme .choose-color span .active
{
    border:5px solid 2rem;
}
.customize-theme .background .choose-bg
{
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap:1.5rem;
}
.customize-theme .background .choose-bg > div
{
    padding:var(--card-padding);
    width: 100%;
    display: flex;
    align-items: center;
    font-size: 1rem;
    font-weight: bold;
    border-radius: 0.4rem;
    cursor: pointer;
}
.customize-theme .background .choose-bg > div .active{
    border:2px solid black;
}
 .customize-theme .background .choose-bg  .bg-1
{
 background: white;
 color: black;
}
 .customize-theme .background .choose-bg  .bg-2
{
 background:hsl(252,30%,17%);
 color: white;
}
 .customize-theme .background .choose-bg  .bg-3
{
 background:hsl(252,30%,10%);
 color: white;
}
.customize-theme .choose-bg > div span
{
    width: 2rem;
    height: 2rem;
    border:2px solid var(--color-gray);
    border-radius: 50%;
    margin-right: 1rem;
}

        </style>
</head>
<body>
    

<!--============================ theme customization============================== -->
<div class="customize-theme">
    <div class="card">
        <h2>customize your view</h2>
        <p>manage your font size , color . and background</p>
        <!------------------- font size-------------------- -->
        <div class="font-size">
            <h4>font size</h4>
            <div>
                <h6>Aa</h6>
                <div class="choose-size">
                    <span class="font-size1"></span>
                    <span class="font-size2"></span>
                    <span class="font-size3"></span>
                    <span class="font-size4"></span>
                    <span class="font-size5"></span>
                </div>
                <h3>Aa</h3>
            </div>
        </div>
        <!------------------ primary colors------------- -->
        <div class="color">
            <h4>background</h4>
            <div class="choose-color">
                <span  onclick="change_mode('rgb(226, 218, 218)')" class="color-1"></span>
                <span  onclick="change_mode('#edc8dd')" class="color-2"></span>
                <span onclick="change_mode('#c8e6d5')"  class="color-3"></span>
                <span onclick="change_mode('#e3bd9d')" class="color-4"></span>
                <span onclick="change_mode('hsl(202,75%,60%)')" class="color-5"></span>
            </div>
        </div>
    
        <!-- background color -->
        <div class="background">
            <h4>background</h4>
            <div class="choose-bg">
                <div class="bg-1">
                    <span onclick="change_theme('#164f99')"></span>
                    <h5 for="bg-1">light</h5>
                </div>
                <div class="bg-2">
                    <span  onclick="change_theme('hsl(252,30%,17%)')"></span>
                    <h5>Dim</h5>
                </div>
                <div class="bg-3">
                    <span  onclick="change_theme('hsl(252,30%,10%)')"></span>
                    <h5 for="bg-1">light out</h5>
                </div>
            </div>
    
        </div>
    </div>
</div>
<!-- -------------------------------------------------------------------------------- -->
</body>
</html>