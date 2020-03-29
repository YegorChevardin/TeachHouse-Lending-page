/*NAVBAR SCROLL HIDE SECTION START*/
var prevScrollpos = window.pageYOffset;
	
window.onscroll = function() {
	var currentScrollpos = window.pageYOffset;
	
	if(currentScrollpos >= 15 * 16) {
		if(prevScrollpos > currentScrollpos) {
			document.getElementsByClassName('navbar')[0].style.top = "0";
		} else {
			document.getElementsByClassName('navbar')[0].style.top = "-5.1em";
		}

		prevScrollpos = currentScrollpos;
	}
}
/*NAVBAR SCROLL HIDE SECTION END*/