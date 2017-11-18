function clearContent(){
	document.getElementById('sala').value = '';
	document.getElementById('filme').value = '';
	document.getElementById('capacidade').value = '';
	document.getElementById('data').value = '';
	document.getElementById('hora').value = '';

	document.getElementById('sala').focus();
}
var btnClear = document.getElementById('btnClear');
btnClear.addEventListener('click', clearContent);
