/*document.getElementById('date-input')*/window.addEventListener('click', function() {
	var age_value = document.getElementById('age-input').value;
	if(age_value >= 5 && age_value < 10) {
		document.getElementById('time-input').removeAttribute('disabled');
		document.getElementsByClassName('datalist-option')[0].removeAttribute('disabled');
		document.getElementsByClassName('datalist-option')[1].setAttribute('disabled', 'on');
		document.getElementsByClassName('datalist-option')[2].setAttribute('disabled', 'on');
	} else if(age_value < 5) {
		document.getElementById('time-input').setAttribute('disabled', 'on');
	} else {
		document.getElementById('time-input').removeAttribute('disabled');
		document.getElementsByClassName('datalist-option')[0].setAttribute('disabled', 'on');
		document.getElementsByClassName('datalist-option')[1].removeAttribute('disabled');
		document.getElementsByClassName('datalist-option')[2].removeAttribute('disabled');
	}
});