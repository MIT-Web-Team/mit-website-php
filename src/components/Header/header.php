<header class="header-container noselect">
	<div class="header-top">
		<a class="active" href="/" aria-current="page">
			<h1 class="HeaderLogo">
				<img src="src/assets/mit_logo.png">
			</h1>
		</a>
		<?php if (isset($_SESSION["admin"]) && $_SESSION["admin"]) { ?>
			<div class="login-mobile-btn" onclick="signOut()"></div>
		<?php } else { ?>
			<div class="login-mobile-btn" onclick="trigger()"></div>
		<?php } ?>
		<div class="burger-menu"><span class="sus "></span><span class="sus "></span><span class="sus "></span></div>
		<nav>
			<ul class="menus nohighlights noselect ">
				<li class="menu-items">
					<button type="button" aria-haspopup="menu" aria-expanded="false">
						<a class="active" aria-current="page">Home</a>
						<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
							<path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"></path>
						</svg>
					</button>
					<ul class="dropdown  ">
						<li class="menu-items"><a class="" href="/about">About MIT</a></li>
						<li class="menu-items"><a class="" href="https://www.annauniv.edu/">AU Home</a></li>
					</ul>
				</li>
				<li class="menu-items">
					<button type="button" aria-haspopup="menu" aria-expanded="false">
						<a class="">Departments</a>
						<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
							<path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"></path>
						</svg>
					</button>
					<ul class="dropdown">
						<li class="menu-items"><a class="" href="/departments/undefined"></a></li>
						<!-- <li class="menu-items">
							<button type="button" aria-haspopup="menu" aria-expanded="false">
								<a class="" href="/departments/aero/">Aeronautical Engineering</a>
								<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
									<path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
								</svg>
							</button>
							<ul class="dropdown dropdown-submenu ">
								<li class="menu-items"><a class="" href="/departments/aero/undefined"></a></li>
								<li class="menu-items">
									<button type="button" aria-haspopup="menu" aria-expanded="false">
										<a class="" href="/departments/aero/research/">Research</a>
										<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
											<path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
										</svg>
									</button>
									<ul class="dropdown dropdown-submenu ">
										<li class="menu-items"><a class="" href="/departments/aero/research/undefined"></a></li>
										<li class="menu-items"><a class="" href="/departments/aero/research/publications">Publications</a></li>
									</ul>
								</li>
							</ul>
						</li> -->
						<li class="menu-items"><a class="" href="https://mitindia.edu/en/aero-home">Aeronautical Engineering</a></li>
						<li class="menu-items"><a class="" href="https://mitindia.edu/en/auto-home">Automobile Engineering</a></li>
						<li class="menu-items"><a class="" href="https://mitindia.edu/en/ece-home">Electronics Engineering</a></li>
						<li class="menu-items"><a class="" href="https://mitindia.edu/en/instrumentation-home">Instrumentation Engineering</a></li>
						<li class="menu-items"><a class="" href="https://mitindia.edu/en/pt-home">Production Technology</a></li>
						<li class="menu-items"><a class="" href="https://mitindia.edu/en/rpt-home">Rubber and Plastics Technology</a></li>
						<li class="menu-items"><a class="" href="http://www.it.mitindia.edu/">Information Technology</a></li>
						<li class="menu-items"><a class="" href="http://www.ct.mitindia.edu/dct/#/home">Computer Technology</a></li>
						<li class="menu-items"><a class="" href="http://www.dash.mitindia.edu/">Applied Sciences and Humanities</a></li>
					</ul>
				</li>
				<li class="menu-items">
					<button type="button" aria-haspopup="menu" aria-expanded="false">
						<a class="">Administration</a>
						<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
							<path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"></path>
						</svg>
					</button>
					<ul class="dropdown  ">
						<li class="menu-items"><a class="" href="/administration/undefined"></a></li>
						<li class="menu-items"><a class="" href="https://annauniv.irins.org/profile/43400">Dean</a></li>
						<li class="menu-items"><a class="" href="/administration/officestaff">Office Staff</a></li>
					</ul>
				</li>
				<li class="menu-items">
					<button type="button" aria-haspopup="menu" aria-expanded="false">
						<a class="">Centres</a>
						<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
							<path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"></path>
						</svg>
					</button>
					<ul class="dropdown  ">
						<li class="menu-items"><a class="" href="https://www.au-kbc.org/">AU-KBC Research Centre</a></li>
						<li class="menu-items"><a class="" href="http://www.casr.mitindia.edu/">Centre for Aerospace Research</a></li>
						<li class="menu-items"><a class="" href="http://www.ciot.mitindia.edu/">Centre for IoT</a></li>
						<li class="menu-items"><a class="" href="https://mitindia.edu/en/research-centres/mit_scoe">SCoE</a></li>
						<li class="menu-items"><a class="" href="https://mitindia.edu/en/research-centres/ceat_mit">CEAT</a></li>
						<li class="menu-items"><a class="" href="https://cra.mitindia.edu/">CRA</a></li>
					</ul>
				</li>
				<li class="menu-items">
					<button type="button" aria-haspopup="menu" aria-expanded="false">
						<a class="">Facilities</a>
						<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
							<path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"></path>
						</svg>
					</button>
					<ul class="dropdown  ">
						<li class="menu-items"><a class="" href="https://cc.mitindia.edu/">Computer Centre</a></li>
						<li class="menu-items"><a class="" href="http://www.placement.mitindia.edu/">Placements</a></li>
						<li class="menu-items"><a class="" href="/network">Network</a></li>
						<li class="menu-items"><a class="" href="/telephone">Telephone</a></li>
						<li class="menu-items"><a class="" href="http://www.health-centre.mitindia.edu/health_centre/">Health Centre</a></li>
						<li class="menu-items"><a class="" href="https://library.annauniv.edu/mit_index.php">Library</a></li>
						<li class="menu-items"><a class="" href="https://www.hostel.mitindia.edu/">Hostel</a></li>
					</ul>
				</li>
				<!-- <li class="menu-items"><a class="" href="/about">About Us</a></li> -->
				<li class="menu-items"><a class="" href="/scholarships">Scholarships</a></li>
				<!-- <li class="menu-items"><a class="" href="/Staff/:id">Test</a></li> -->
				<li class="menu-items"><a class="" href="/events">Events</a></li>
			</ul>
		</nav>
		<?php 
		if (isset($_SESSION["admin"]) && $_SESSION["admin"]) { ?>
			<div class="login-container"><button class="login-button" onclick="signOut()">Sign Out</button></div>
		<?php } else { ?>
			<div class="login-container"><button class="login-button" onclick="trigger()">Sign In</button></div>
		<?php } ?>
	</div>
	<div class="header-bottom  slide-up" id="Slider">
		<div class="login-wrap">
			<div>
				<form action="src/apiservices/login.php" method="post">
					<input type="text" class="text-input" name="email" placeholder="Enter your email" value="" />
					<input type="password" name="password" placeholder="Password" value="" />
					<button type="submit">Sign In</button>
				</form>
			</div>
		</div>
	</div>	
</header>
<script>
	function showModal() {
		var modalContainer = document.querySelector('.modal-container');
		modalContainer.classList.remove('hidden');
	}

	document.addEventListener('DOMContentLoaded', function() {
		var menuItems = document.querySelectorAll('.menu-items');

		menuItems.forEach(function(menuItem) {
			var button = menuItem.querySelector('button');
			var dropdown = menuItem.querySelector('.dropdown');

			if (button && dropdown) {
				button.addEventListener('click', function() {
					var expanded = button.getAttribute('aria-expanded') === 'true' || false;
					if (expanded) {
						// Close the dropdown
						dropdown.classList.remove('show');
						button.setAttribute('aria-expanded', 'false');
					} else {
						// Close all other dropdowns
						closeAllDropdowns();
						// Open the clicked dropdown
						dropdown.classList.add('show');
						button.setAttribute('aria-expanded', 'true');
					}
				});

				menuItem.addEventListener('mouseleave', function() {
					dropdown.classList.remove('show');
					button.setAttribute('aria-expanded', 'false');
				});
			}
		});

		function closeAllDropdowns() {
			var allDropdowns = document.querySelectorAll('.dropdown');
			allDropdowns.forEach(function(dropdown) {
				dropdown.classList.remove('show');
				var button = dropdown.closest('.menu-items').querySelector('button');
				if (button) {
					button.setAttribute('aria-expanded', 'false');
				}
			});
		}

		var burgerMenu = document.querySelector('.burger-menu');
		var ulMenu = document.querySelector('.menus');

		burgerMenu.addEventListener('click', function() {
			var children = burgerMenu.children;
			children[0].classList.toggle('top');
			children[1].classList.toggle('mid');
			children[2].classList.toggle('bottom');
			ulMenu.classList.toggle('open');
		});
	});

	trigger = function() {
		Slider.classList.toggle("slide-down")
	};

	function signOut() {
    // Send an AJAX request to the server
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "/src/apiservices/logout.php", true);
    xhr.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            window.location.href = "/";
        }
    };
    xhr.send();
}
</script>