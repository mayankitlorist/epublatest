<header id="videohead-pro" class="sticky-header">
			<div id="video-logo-background" style="display:block">
				<button class="w3-button w3-teal w3-xlarge openbar" onclick="w3_open()">☰</button>
				<span><a href="{{url('Dashboard_Home')}}"><img src="{{url('images/bookinglogo.png')}}" width="100px" height="50px" alt="Logo"></a></span>
			</div>
		
			<div id="video-search-header">
				<div id="search-icon-more"></div>
				<input type="text" placeholder="Search for Books or Authors" aria-label="Search">
				<div id="video-search-header-filtering">
					<form id="video-search-header-filtering-padding">
						<div class="row">
							<div class="col-sm extra-padding">
								<h5>Genres:</h5>
								<select class="custom-select">
									<option selected>All Genres</option>
									<option value="1">History</option>
									<option value="2">Science</option>
									<option value="3">Social Studies</option>
									<option value="4">General Knowledge</option>
									<option value="5">Literature</option>
								</select>
								<div class="dotted-dividers-pro"></div>
							</div>
						
						</div>
						<div id="video-search-header-buttons">
							<a href="#!" class="btn btn-green-pro">Filter Search</a>
							<a href="#!" class="btn">Reset</a>
						</div>
					</form>
				</div>
			</div>

			<div id="mobile-bars-icon-pro" class="noselect"><i class="fas fa-bars"></i></div>


			<div id="header-user-profile">
				<div id="header-user-profile-click" class="noselect">
					<!-- <img src="{{url('public/images/demo/user-profile.jpg')}}" alt="Suzie"> -->
					<div id="header-username">{{$userdata->name}}</div><i class="fas fa-angle-down"></i>
				</div><!-- close #header-user-profile-click -->
				<div id="header-user-profile-menu">
					<ul>
						<li><a href=""><span class="icon-User"></span>My Profile</a></li>
						<li><a href="{{url('logout')}}"><span class="icon-Power-3"></span>Log Out</a></li>
					</ul>
				</div><!-- close #header-user-profile-menu -->
			</div><!-- close #header-user-profile -->

			<!-- <div id="header-user-notification">
				<div id="header-user-notification-click" class="noselect">
					<i class="far fa-bell"></i>
					<span class="user-notification-count">3</span>
				</div>
                <div id="header-user-notification-menu">
					<h3>Notifications</h3>
					<div id="header-notification-menu-padding">
						<ul id="header-user-notification-list">
							<li><a href="#!"><img src="{{url('public/images/demo/user-profile-2.jpg')}}" alt="Profile">Lorem ipsum dolor sit amet, consec tetur adipiscing elit. <div class="header-user-notify-time">21 hours ago</div></a></li>
							<li><a href="#!"><img src="{{url('public/images/demo/user-profile-3.jpg')}}" alt="Profile">Donec vitae lacus id arcu molestie mollis. <div class="header-user-notify-time">3 days ago</div></a></li>
							<li><a href="#!"><img src="{{url('images/demo/user-profile-4.jpg')}}" alt="Profile">Aenean vitae lectus non purus facilisis imperdiet. <div class="header-user-notify-time">5 days ago</div></a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div> -->


            <nav id="sidebar-nav">
			<button onclick="w3_close()" class="btn btn-primary w3-bar-item w3-large cross "> &times;</button>
                <ul id="vertical-sidebar-nav" class="sf-menu">
                        <li class="current-menu-item">
                            <a href="{{url('Home')}}">
                                <span><i class="fa fa-home" aria-hidden="true"></i></span>
                                Home
                            </a>
                        <li>
                        
                        <li>
                            <a href="{{url('Upcoming_Books')}}">
                                <span><i class="fa fa-book" aria-hidden="true"></i></span>
                                New Arrivals
                            </a>
                        </li>
                        <li>
                            <a href="{{url('History')}}">
                                <span><i class="fa fa-history" aria-hidden="true"></i></span>
                                History
                            </a>
                        </li>
                        <li>
                            <a href="{{url('Setting')}}">
                            <span><i class="fa fa-cog" aria-hidden="true"></i></span>
                                Setting
                            </a>
                        </li>

                </ul>
                <div class="clearfix"></div>
            </nav>
		</header>

