document.getElementById("about-click").addEventListener("click", aboutShow);
document.getElementById("course-click").addEventListener("click", courseShow);
document.getElementById("plan-click").addEventListener("click", planShow);

function courseShow(){
	document.getElementById("general").style.display = 'none';
	document.getElementById("course").style.display = 'block';
	document.getElementById("plan").style.display = 'none';
}
function aboutShow(){
	document.getElementById("general").style.display = 'block';
	document.getElementById("course").style.display = 'none';
	document.getElementById("plan").style.display = 'none';
}
function planShow(){
	document.getElementById("plan").style.display = 'block';
	document.getElementById("course").style.display = 'none';
	document.getElementById("general").style.display = 'none';
}