<!--POPPER SECTION START-->
<script src="{{asset('Main/js/popper/popper.js')}}" crossorigin="anonymous"></script>
<!--integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"-->
<!--POPPER SECTION END-->
<!--BOOTSTRAP SECTION START-->
<script src="{{asset('Main/js/bootstrap_js/bootstrap.min.js')}}" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!--BOOTSTRAP SECTION END-->
<!--PARTICLES LOAD SECTION START-->
<script src="{{asset('Main/js/particles/particles.min.js')}}" defer></script>
<script src="{{asset('Main/js/particles/main.js')}}" defer></script>
<!--PARTICLES LOAD SECTION END-->
<!--PAGE SCRIPTS SECTION START-->
<script type="text/javascript" src="{{asset('Main/js/page_elements/navbar.js')}}"></script>
<script type="text/javascript" src="{{asset('Main/js/page_elements/back-to-top-button.js')}}"></script>
<script type="text/javascript" src="{{asset('Main/js/page_elements/navbar-navigation-color-resize.js')}}"></script>
<script type="text/javascript" src="{{asset('Main/js/page_elements/time-input-option-control.js')}}" defer></script>
<script type="text/javascript" src="{{asset('Main/js/page_elements/form-check.js')}}"></script>
<!--ALERT MESSAGE SECTION START-->
<script type="text/javascript">
	var msg = function() {
		alert("{{Session::get('alert')}}");
	}
	var exist = "{{Session::has('alert')}}";
	
	if(exist) {
		setTimeout(msg, 2500);
	}
</script>
<!--ALERT MESSAGE SECTION END-->
<!--PAGE SCRIPTS SECTION END-->