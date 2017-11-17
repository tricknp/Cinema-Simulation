function replacePage(){
	window.location.replace("_pages/home.php");
}

var btn = document.getElementById('btnStart');
btn.addEventListener('click', replacePage);