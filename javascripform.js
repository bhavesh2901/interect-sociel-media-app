let username= document.getElementById("f-name");
let password= document.getElementById("f-password");
let cpassword= document.getElementById("co-password");
let date= document.getElementById("f-date");
let mobail= document.getElementById("f-mobail");
let email= document.getElementById("f-email");
let gender= document.getElementsByClassName("gender1");
let flag =1;

function validatefrom()
{
    if(username.value == "")
    {
        document.getElementById("usererror").innerHTML ="*empty name";
        flag =0;
    }
    else if(username.value.length<3)
    {
        document.getElementById("usererror").innerHTML ="*must require 3 charcater";
        flag =0;
    }
    else{
        document.getElementById("usererror").innerHTML ="";
        flag=1;
    }
    if(password.value == "")
    {
        document.getElementById("passworderror").innerHTML ="*empty password";
        flag=0;

    }
   else if(password!=cpassword)
    {
        document.getElementById("passworderror").innerHTML ="*password not match";
        flag=0;

    }
    else if(password.value.length<3)
    {
        document.getElementById("passworderror").innerHTML ="*must require 3 charcater";
        flag=0;
    }
    else{
        document.getElementById("passworderror").innerHTML ="";
        flag=1;
    }
    if(date.value =="")
    {
        document.getElementById("date").innerHTML="*birthdate must require";
        flag=0;
    }
    else
    {
        document.getElementsByClassName("date").innerHTML="";
        flage=1;
    }
    if(mobail.value == "")
    {
        document.getElementById("mobailerror").innerHTML ="*empty mobail no";
        flag=0;

    }
    else if(mobail.value.length = 10)
    {
        document.getElementById("mobailerror").innerHTML="*mobail no must 10 charcater"
        flag=0;
    }
    else{
        document.getElementById("mobailerror").innerHTML ="";
        flag=1;
    }
    if(email.value == "")
    {
        document.getElementById("emailerror").innerHTML ="*empty e-mail";
        flag=0;

    }
    else if(email.value.length<3)
    {
        document.getElementById("emailerror").innerHTML ="*must require 3 charcater";
        flag=0;
    }
    else if(email.indexof('@'<=0))
    {
        document.getElementById("emailerror").innerHTML="*invalid e-mail";
        flag=0;
    }
    else{
        document.getElementById("emailerror").innerHTML ="";
        flag=1;
    }
   
    if(flag){
        return true;
    }
    else{
        return false;
    }
   
}