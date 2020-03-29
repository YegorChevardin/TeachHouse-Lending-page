document.getElementById('GetDocumentButton').addEventListener('click', function() {
	document.getElementById('defaultCheck1').checked = true;
	document.getElementsByClassName('form-check')[0].style.border = "10px solid rgba(72, 153, 237, .7)";
});

document.getElementById('defaultCheck1').addEventListener('click', function() {
	if(document.getElementById('defaultCheck1').checked == true) {
		document.getElementsByClassName('form-check')[0].style.border = "10px solid rgba(72, 153, 237, .7)";
	} else {
		document.getElementsByClassName('form-check')[0].style.border = "none";
	}
});