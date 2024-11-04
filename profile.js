// create post
const btn = document.querySelector('#btn33');
const post =document.querySelector('.main-post');
const cencel1 =document.querySelector('#cencel22');
// start modal
const openpost = () => {
    post.style.display = 'grid';
}

const cencel = (f) =>
{
    f.target.classList.contains('.main-post')
        post.style.display = 'none';
    
}
// close modal

btn.addEventListener('click', openpost);
cencel1.addEventListener('click', cencel );


// ********************************************************
// create post

    
const addbio = document.querySelector('#addbio');
const biodata =document.querySelector('.monolog');
const cencel33 =document.querySelector('#cencel33');
// start modal

const openbio = () => {
    biodata.style.display = 'grid';
}

const cencelbio = (f) =>
{
    f.target.classList.contains('.monolog')
        biodata.style.display = 'none';
    
}
// close modal

addbio.addEventListener('click', openbio);
cencel33.addEventListener('click', cencelbio );



var input = document.querySelector("#select-post-image");
input.addEventListener("change", preview);

function preview()
{
    var fileobject = this.files[0];
    var filereder = new FileReader();
    filereder.readAsDataURL(fileobject);
    filereder.onload = function()
    {
        var image_src = filereder.result;
        var image = document.querySelector('#post_img');
        image.setAttribute('src', image_src);
        image.setAttribute('style','display:');
    }
}

// big profile

const bigprobtn = document.querySelector('#bigprobtn');
const bigpro =document.querySelector('.bigpro');
const cencel111 =document.querySelector('#cencel11');
// start modal

const openbigpro = () => {
    bigpro.style.display = 'grid';
}

const cencelbigpro= (f) =>
{
    f.target.classList.contains('.bigpro')
        bigpro.style.display = 'none';
    
}
// close modal

bigprobtn.addEventListener('click', openbigpro);
cencel11.addEventListener('click', cencelbigpro );

// *********************************
const  followingopen = document.querySelector('#followopen');
const followpopup =document.querySelector('.follow-popup');
const cencel234 =document.querySelector('#cencel234');
// start modal

const followopen = () => {
    followpopup.style.display = 'grid';
}

const cencelfollow = (f) =>
{
    f.target.classList.contains('.follow-popup')
        followpopup.style.display = 'none';
    
}
// close modal

followingopen.addEventListener('click', followopen);
cencel234.addEventListener('click', cencelfollow);

// *************************************************************
const  followerop = document.querySelector('#followerbtn1');
const followerpopup =document.querySelector('.followperson');
const cencel500 =document.querySelector('#cencel500');
// start modal

const followeropen = () => {
    followerpopup.style.display = 'grid';
}

const cencelfollower = (f) =>
{
    f.target.classList.contains('.followperson')
        followerpopup.style.display = 'none';
    
}
// close modal

followerop.addEventListener('click', followeropen);
cencel500.addEventListener('click', cencelfollower);

var input1 = document.querySelector("#select-post-image2");
input1.addEventListener("change", preview);

function preview()
{
    var fileobject1 = this.files[0];
    var filereder1 = new FileReader();
    filereder1.readAsDataURL(fileobject1);
    filereder1.onload = function()
    {
        var image_src1 = filereder1.result;
        var image1 = document.querySelector('#post_img2');
        image1.setAttribute('src', image_src1);
        image1.setAttribute('style','display:');
    }
}

// theam
// theam java script
const theambtn = document.querySelector('#theambtn');
const theam =document.querySelector('#theamby');
const theamcl =document.querySelector('#cenceltheam');
// start modal
const opentheam = () => {
    theam.style.display = 'grid';
   
}

const cenceltheam = (f) =>
{
    f.target.classList.contains('#theamby')
        theam.style.display = 'none';
    
}

// close modal

theambtn.addEventListener('click', opentheam);
theam.addEventListener('click', cenceltheam );

var input2 = document.querySelector("#select-post-bio");
input2.addEventListener("change", preview1);

function preview1()
{
    var fileobject2 = this.files[0];
    var filereder2 = new FileReader();
    filereder2.readAsDataURL(fileobject2);
    filereder2.onload = function()
    {
        var image_src2 = filereder2.result;
        var image2 = document.querySelector('#bio_img');
        image2.setAttribute('src', image_src2);
        image2.setAttribute('style','display:');
    }
}