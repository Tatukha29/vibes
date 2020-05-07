var bisnesbtn=document.querySelector('.bisnesbtn');
var projectbtn=document.querySelector('.projectbtn');
var bisnes=document.querySelector('.bisnes');
var project=document.querySelector('.project');
bisnesbtn.onclick=function(){
bisnes.style.display="block";
project.style.display="none";
bisnesbtn.style.textDecoration='underline';
projectbtn.style.textDecoration='none';

}
projectbtn.onclick=function(){
	project.style.display="block";
	bisnes.style.display="none";
	bisnesbtn.style.textDecoration='none';
projectbtn.style.textDecoration='underline';
}