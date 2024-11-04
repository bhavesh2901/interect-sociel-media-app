// theam java script
const btn = document.querySelector('#theme');
const post =document.querySelector('.customize-theme');
const cencel1 =document.querySelector('#cencel22');

// start modal
const openpost = () => {
    post.style.display = 'grid';
   
}

const cencel = (f) =>
{
    f.target.classList.contains('.customize-theme')
        post.style.display = 'none';
    
}

// close modal

btn.addEventListener('click', openpost);
post.addEventListener('click', cencel );

//--------------- end of theam java scrip-----------------------
const videobtn = document.querySelector('#video1');
const videopop =document.querySelector('.videopop');
const videoclose =document.querySelector('#videoclose');

// start modal
const videoopen = () => {
    videopop.style.display = 'grid';
    videopop.style.transition= 'all 0.10s ease';
}

const videocencel= (f) =>
{
    f.target.classList.contains('.videopop')
    videopop.style.display = 'none';
    
}
// close modal
videobtn.addEventListener('click', videoopen);
videoclose.addEventListener('click', videocencel);
//--------------- post open javascript-------------------------

const btnpost = document.querySelector('#btn2001');
const post1 =document.querySelector('.main-post');
const cencel12 =document.querySelector('#cencel22');
// start modal
const openpost1 = () => {
    post1.style.display = 'grid';
}

const cencel11 = (f) =>
{
    f.target.classList.contains('.main-post')
        post1.style.display = 'none';
      
}
// close modal

btnpost.addEventListener('click', openpost1);
cencel12.addEventListener('click', cencel11 );


//---------------- post end javascript------------------------

// ----------------sub-theam javascript-----------------------
const subproopen = document.querySelector('#probtn');
const subprofile =document.querySelector('.profilesub');

// start modal
const subproop = () => {
    subprofile.style.display = 'grid';
}

const closeprosub = (f) =>
{
    f.target.classList.contains('.main-post')
    subprofile.style.display = 'none';
    1
}
// close modal

subproopen.addEventListener('click', subproop);
subprofile.addEventListener('click', closeprosub );
//---------------- sub-theam end------------------------

// ----------------edit button-----------------------

const editbtn = document.querySelector('.editpostbtn');
const editpost1 =document.querySelector('.editpost2');
const editpost =document.querySelector('#editcencel');
// start modal
const editopen = () => {
    editpost1.style.display = 'grid';
}

const editclose= (f) =>
{
    f.target.classList.contains('.editpost2')
    editpost1.style.display = 'none';
    
}
// close modal
editbtn.addEventListener('click', editopen);
editpost.addEventListener('click', editclose);



// ----------------post pop-up-----------------------
let postpopbtn = document.querySelector('.postpopbtn');
let postpop1 =document.querySelector('.postpop');
let postpopclose =document.querySelector('.postpopclose');
// start modal
     
function postpopopen  ()  {
    postpop1.style.display = 'grid';
}

function postpopcencel (f) 
{
    f.target.classList.contains(postpop1)
    postpop1.style.display = 'none';
    
}
// close modal
postpopbtn.addEventListener('click', postpopopen);
postpopclose.addEventListener('click', postpopcencel);

// ----------------message pop-up-----------------------
const messagebtn = document.querySelector('#messageopen');
const message1 =document.querySelector('.messagemodal');
const messageclose =document.querySelector('.messageclose');

// start modal
const messageopen = () => {
    message1.style.display = 'grid';
    message1.style.transition= 'all 0.10s ease';
}

const messagecencel= (f) =>
{
    f.target.classList.contains('.messagemodal')
    message1.style.display = 'none';
    
}
// close modal
messagebtn.addEventListener('click', messageopen);
messageclose.addEventListener('click', messagecencel);

//************************************************************* */

//***************************************************** */




const notibtn = document.querySelector('#notiopen');
const noti1 =document.querySelector('.noti');
const noticencel =document.querySelector('.noticlose');
// start modal
const notiopen = () => {
    noti1.style.display = 'grid';
}

const noticlose= (b) => 
{
    b.target.classList.contains('.noti')
    noti1.style.display = 'none';
    
}
// close modal
notibtn.addEventListener('click', notiopen);
noticencel.addEventListener('click', noticlose);
function opennoti()
{
    noti1.style.display='grid';
}

  