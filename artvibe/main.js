var bisnesbtn=document.querySelector('.bisnesbtn');
var projectbtn=document.querySelector('.projectbtn');
var bisnes=document.querySelector('.bisnes');
var project=document.querySelector('.project');

var allbtn=document.querySelector('.all');
var musicbtn=document.querySelector('.music');
var photobtn=document.querySelector('.photo');
var artbtn=document.querySelector('.art');

var allpost=document.querySelector('.postall');
var musicpost=document.querySelector('.postmusic');
//var photopost=document.querySelector('.postphoto');
//var artpost=document.querySelector('.postart');

bisnesbtn.onclick=function(){
bisnes.style.display="block";
project.style.display="none";
bisnesbtn.style.opacity="100%";
projectbtn.style.opacity="25%";
}
projectbtn.onclick=function(){
	project.style.display="block";
	bisnes.style.display="none";
	bisnesbtn.style.opacity="25%";
projectbtn.style.opacity="100%";
}
allbtn.onclick=function(){
	allpost.style.display="block";
	musicpost.style.display="none";
	//photopost.style.display="none";
	//artpost.style.display="none";
	musicbtn.style.opacity="25%";
	photobtn.style.opacity="25%";
	artbtn.style.opacity="25%";
}
musicbtn.onclick=function(){
	allpost.style.display="none";
	musicpost.style.display="block";
	//photopost.style.display="none";
	//artpost.style.display="none";
}
