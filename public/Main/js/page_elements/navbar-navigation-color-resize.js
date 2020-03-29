var navbar = document.getElementsByClassName('navbar')[0];
			
			window.addEventListener('resize', function() {
				if(window.innerWidth < 1200) {
					navbar.classList.remove('navbar-light');
					navbar.classList.add('navbar-dark');
				} else {
					navbar.classList.remove('navbar-dark');
					navbar.classList.add('navbar-light');
				}
			});