function replacePage(){
	window.location.replace("_pages/home.html");
}

var btn = document.getElementById('btnStart');
btn.addEventListener('click', replacePage);