<header id="navbar-spy" class="header header-1 header-transparent header-bordered header-fixed">
    <nav id="primary-menu" class="navbar navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="logo" href="{{ route('index') }}">
                    <img class="logo-light" src="{{ asset('assets') }}/images/logo/hadees.jpg" alt="League Logo" width="60px" height="60px">
                    <img class="logo-dark" src="{{ asset('assets') }}/images/logo/hadees.jpg" alt="League Logo" width="60px" height="60px">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-right" id="navbar-collapse-1">
                <ul class="nav navbar-nav nav-pos-right navbar-left">

                    <!-- Home Menu -->
                    <li class="active">
                        <a href="{{ route('index') }}">home</a>
                    </li>
                    <!-- li end -->
                    <!-- Pages Menu -->
                    <li><a href="{{ route('about-us') }}">about us</a></li>
                    <li><a href="{{ route('videos.index') }}">Videos</a></li>
                    <li><a href="{{ route('blogs.index') }}">Blogs</a></li>
                    <li><a href="{{ route('contact-us') }}">Contac Us</a></li>

                    <!-- li end -->
                    <!-- Features Menu-->
                    {{-- <li class="has-dropdown">
		<a href="pages.blogs" data-toggle="dropdown" class="dropdown-toggle menu-item">Videos</a>
		<ul class="dropdown-menu">
			<li class="dropdown-submenu">
				<a href="pages.blogs" data-toggle="dropdown" class="dropdown-toggle">Author</a>
				<ul class="dropdown-menu">
					<li>
						<a href="footer-1.html#footer">Video 1</a>
					</li>
					<li>
						<a href="footer-2.html#footer">Video 2</a>
					</li>
					<li>
						<a href="footer-3.html#footer">Video 3</a>
					</li>
					<li>
						<a href="footer-4.html#footer">Video 4</a>
					</li>
					<li>
						<a href="footer-5.html#footer">Video 5</a>
					</li>
				</ul>
			</li>
			<li class="dropdown-submenu">
				<a href="pages.blogs" data-toggle="dropdown" class="dropdown-toggle">Book</a>
				<ul class="dropdown-menu">
					<li>
						<a href="footer-1.html#footer">Video 1</a>
					</li>
					<li>
						<a href="footer-2.html#footer">Video 2</a>
					</li>
					<li>
						<a href="footer-3.html#footer">Video 3</a>
					</li>
					<li>
						<a href="footer-4.html#footer">Video 4</a>
					</li>
					<li>
						<a href="footer-5.html#footer">Video 5</a>
					</li>
				</ul>
			</li>
			<li class="dropdown-submenu">
				<a href="pages.blogs" data-toggle="dropdown" class="dropdown-toggle">Topic</a>
				<ul class="dropdown-menu">
					<li>
						<a href="footer-1.html#footer">Video 1</a>
					</li>
					<li>
						<a href="footer-2.html#footer">Video 2</a>
					</li>
					<li>
						<a href="footer-3.html#footer">Video 3</a>
					</li>
					<li>
						<a href="footer-4.html#footer">Video 4</a>
					</li>
					<li>
						<a href="footer-5.html#footer">Video 5</a>
					</li>
				</ul>
			</li>

		</ul>
	</li> --}}
                    <!-- Blog Menu-->



                    <!-- li end -->

                </ul>

                <!-- Module Search -->
                <div class="module module-search pull-left">
                    <div class="module-icon search-icon">
                        <i class="fa fa-search"></i>
                        <span class="title">search</span>
                    </div>
                    <div class="module-content module-fullscreen module--search-box">
                        <div class="pos-vertical-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                                        <form class="form-search">
                                            <input type="text" class="form-control"
                                                placeholder="Type Search Words Then Enter">
                                            <button class="btn" type="button"><i class="fa fa-search"></i></button>
                                        </form><!-- .form-search end -->
                                    </div><!-- .col-md-8 end -->
                                </div><!-- .row end -->
                            </div><!-- .container end -->
                        </div>
                        <a class="module-cancel" href="#"><i class="fa fa-close"></i></a>
                    </div>
                </div><!-- .module-search end -->
                <!-- Module Side NAV -->
                <div class="module module-side-nav pull-left">
                    <div class="module-icon side-nav-icon">
                        <i class="fa fa-bars"></i>
                        <span class="title">Side Navigation</span>
                    </div>
                    <div class="module-content module-hamburger">
                        <div class="hamburger-panel bg-overlay bg-overlay-dark2">
                            <div class="bg-section">
                                <img src="{{ asset('assets') }}/images/background/hamburger.jpg" alt="Background" />
                            </div>
                            <div>
                                <a class="logo" href="index-2.html">
                                    <img src="{{ asset('assets') }}/images/logo/logo-light.png" alt="League Logo">
                                </a>
                            </div>
                            <ul class="list-unstyled list-links">
                                <li><a class="active" href="#">Home</a>
                                </li>
                                <li><a href="#">Pages</a>
                                </li>
                                <li><a href="#">Blog</a>
                                </li>
                                <li><a href="#">Portfolio</a>
                                </li>
                                <li><a href="#">Shop</a>
                                </li>
                                <li><a href="#">feature</a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                            <div class="social-share">
                                <a class="share-facebook" href="#"><i class="fa fa-facebook"></i></a>
                                <a class="share-twitter" href="#"><i class="fa fa-twitter"></i></a>
                                <a class="share-google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                                <a class="share-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                            <div class="clearfix"></div>
                            <div class="copywright">
                                <span>&copy; 2017 League, With Love by</span> <a
                                    href="http://themeforest.net/user/7oroof/portfolio?ref=zytheme">7oroof.com</a>
                            </div>
                            <a class="module-cancel" href="#"><i class="fa fa-close"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

</header>
