<section class="header" >
	<div class="banner">
		<nav id="banner-navbar" 
				style="display: flex;" 
				class="banner-top navbar navbar-default ">
			<div class="container">
				<div>
					<div class="navbar-header">
						<a class="navbar-brand" href="/" >
							<h3>
								<span id="img-mobile-logo">
									<img src="/images/logo.png" 
										height="30" 
										width="30" 
										alt="Hamburger menu" />
								</span>
								<img id="imgLogo" 
									class="navbar-hide" 
									src="/images/logo.png" 
									height="50" 
									width="50" 
									alt="logo" />
								<span id="pea">Cottage Finder</span>
							</h3>
						</a>
					</div>
					
					<div class="navbar-header navbar-hide navbar-header-right">
						<a class="navbar-brand" href="/" >
							<span id="time"></span>
						</a>
					</div>
				</div>				
				<nav class="navbar navbar-hide"></nav>
				
				<nav class="navbar navbar-hide" id="banner-bottom">
				<hr />
					<div class="fw header-navigation nav navbar-nav">
						<ul class="left header-navigation nav navbar-nav">
							<li><a href="/" id="navbar-link-index">
								Home
							</a></li>
							<li><a href="/home/search" id="navbar-link-index">
								Search
							</a></li>
						</ul>
						<ul class="right header-navigation nav navbar-nav">
							<?php 
								if (isset($_SESSION["user"])) {
									?><li><a href="/profile/signout" id="navbar-link-index">
										Signout
									</a></li><?php
								}
								else {
									?>
										<li><a href="/profile/login" id="navbar-link-index">
											Login
										</a></li>
										<li><a href="/profile/signup" id="navbar-link-index">
											Signup
										</a></li>
									<?php
								}
							?>								
						</ul>
					</div>
				</nav>
			</div>
			<div id="navbar-burger" class="navbar-header navbar-burger">
				<span class="burger-bar1" ></span>
				<span class="burger-bar2" ></span>
				<span class="burger-bar3" ></span>
			</div>
		</div>
	</div>
</section>