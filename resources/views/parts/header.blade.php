
        	<header id="header">
				<div class="container">
					<div class="logo">
						<a href="index.html">
							<img alt="ProspectBD" width="230" height="54" data-sticky-width="82" data-sticky-height="40" src="{{ asset("/img/prospectbd.png") }}">
						</a>
					</div>
					<div class="search">
						<form id="searchForm" action="page-search-results.html" method="get">
							<div class="input-group">
								<input type="text" class="form-control search" name="q" id="q" placeholder="Search..." required>
								<span class="input-group-btn">
									<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</form>
					</div>
					<ul class="social-icons">
						<li class="facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook">Facebook</a></li>
						<li class="twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter">Twitter</a></li>
						<li class="linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin">Linkedin</a></li>
					</ul>
					<nav>
						<ul class="nav nav-pills nav-top">
							<li>
								<a href="about-us.html"><i class="fa fa-angle-right"></i>About Us</a>
							</li>
							<li>
								<a href="contact-us.html"><i class="fa fa-angle-right"></i>Contact Us</a>
							</li>
							<li class="phone">
								<span><i class="fa fa-phone"></i>(123) 456-7890</span>
							</li>
						</ul>
					</nav>
					<button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse">
						<i class="fa fa-bars"></i>
					</button>
				</div>
				<div class="navbar-collapse nav-main-collapse collapse">
					<div class="container">
						<nav class="nav-main mega-menu">
							<ul class="nav nav-pills nav-main" id="mainMenu">
								<li class="dropdown active">
									<a class="dropdown-toggle" href="{{ url('/') }}">
										Home
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="dropdown-menu">
										<li><a href="index.html">Home - Default</a></li>
										<li><a href="index-1.html">Home - Corporate <span class="tip">hot</span></a></li>
										<li><a href="index-2.html">Home - Color</a></li>
										<li><a href="index-3.html">Home - Light</a></li>
										<li><a href="index-4.html">Home - Video</a></li>
										<li><a href="index-5.html">Home - Video - Light</a></li>
										<li><a href="index-one-page.html">One Page Website</a></li>
										<li class="dropdown-submenu">
											<a href="#">Sliders</a>
											<ul class="dropdown-menu">
												<li><a href="index.html">Revolution Slider</a></li>
												<li><a href="index-slider-2.html">Nivo Slider</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li>
									<a href="shortcodes.html">Shortcodes</a>
								</li>
								<li class="dropdown">
									<a class="dropdown-toggle" href="#">
										About Us
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="dropdown-menu">
										<li><a href="about-us.html">About Us</a></li>
										<li><a href="about-us-basic.html">About Us - Basic</a></li>
										<li><a href="about-me.html">About Me</a></li>
									</ul>
								</li>
								<li class="dropdown mega-menu-item mega-menu-fullwidth">
									<a class="dropdown-toggle" href="#">
										Features
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="dropdown-menu">
										<li>
											<div class="mega-menu-content">
												<div class="row">
													<div class="col-md-3">
														<ul class="sub-menu">
															<li>
																<span class="mega-menu-sub-title">Main Features</span>
																<ul class="sub-menu">
																	<li><a href="feature-pricing-tables.html">Pricing Tables</a></li>
																	<li><a href="feature-icons.html">Icons</a></li>
																	<li><a href="feature-animations.html">Animations</a></li>
																	<li><a href="feature-typography.html">Typography</a></li>
																	<li><a href="feature-grid-system.html">Grid System</a></li>
																</ul>
															</li>
														</ul>
													</div>
													<div class="col-md-3">
														<ul class="sub-menu">
															<li>
																<span class="mega-menu-sub-title">Headers</span>
																<ul class="sub-menu">
																	<li><a href="headers-overview.html">Overview</a></li>
																	<li><a href="index-header-2.html">Header 2</a></li>
																	<li><a href="index-header-3.html">Header 3</a></li>
																	<li><a href="index-header-4.html">Header 4</a></li>
																	<li><a href="index-header-5.html">Header 5</a></li>
																	<li><a href="index-header-6.html">Header 6</a></li>
																	<li><a href="index-header-7.html">Header 7 - Below Slider</a></li>
																	<li><a href="index-header-8.html">Header 8 - Full Video</a></li>
																	<li><a href="index-header-9.html">Header 9 - Narrow</a></li>
																	<li><a href="index-header-10.html">Header 10 - Always Sticky</a></li>
																	<li><a href="index-header-11.html">Header 11 - Transparent</a></li>
																	<li><a href="index-header-12.html">Header 12 - Semi Transparent</a></li>
																	<li><a href="index-header-13.html">Header 13 - Semi Transparent - Light</a></li>
																	<li><a href="index-header-14.html">Header 14 - Full-Width</a></li>
																</ul>
															</li>
														</ul>
													</div>
													<div class="col-md-3">
														<ul class="sub-menu">
															<li>
																<span class="mega-menu-sub-title">Header Account</span>
																<ul class="sub-menu">
																	<li><a href="index-header-signin.html">Header - Sign In / Sign Up</a></li>
																	<li><a href="index-header-logged.html">Header - Logged</a></li>
																</ul>
																<span class="mega-menu-sub-title">Footers</span>
																<ul class="sub-menu">
																	<li><a href="index.html#footer">Footer 1</a></li>
																	<li><a href="index-footer-2.html#footer">Footer 2</a></li>
																	<li><a href="index-footer-3.html#footer">Footer 3</a></li>
																	<li><a href="index-footer-4.html#footer">Footer 4</a></li>
																	<li><a href="index-footer-5.html#footer">Footer 5 - Light</a></li>
																	<li><a href="index-footer-6.html#footer">Footer 6 - Light Narrow</a></li>
																	<li><a href="index-footer-7.html#footer">Footer 7 - Color</a></li>
																</ul>
															</li>
														</ul>
													</div>
													<div class="col-md-3">
														<ul class="sub-menu">
															<li>
																<span class="mega-menu-sub-title">Admin Extension <em class="not-included">(Not Included)</em></span>
																<ul class="sub-menu">
																	<li><a href="feature-admin-forms-basic.html">Forms Basic</a></li>
																	<li><a href="feature-admin-forms-advanced.html">Forms Advanced</a></li>
																	<li><a href="feature-admin-forms-wizard.html">Forms Wizard</a></li>
																	<li><a href="feature-admin-forms-code-editor.html">Code Editor</a></li>
																	<li><a href="feature-admin-tables-advanced.html">Tables Advanced</a></li>
																	<li><a href="feature-admin-tables-responsive.html">Tables Responsive</a></li>
																	<li><a href="feature-admin-tables-editable.html">Tables Editable</a></li>
																	<li><a href="feature-admin-tables-ajax.html">Tables Ajax</a></li>
																	<li><a href="feature-admin-charts.html">Charts</a></li>
																</ul>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li class="dropdown">
									<a class="dropdown-toggle" href="#">
										Portfolio
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="dropdown-menu">
										<li><a href="portfolio-4-columns.html">4 Columns</a></li>
										<li><a href="portfolio-3-columns.html">3 Columns</a></li>
										<li><a href="portfolio-2-columns.html">2 Columns</a></li>
										<li><a href="portfolio-lightbox.html">Portfolio Lightbox</a></li>
										<li><a href="portfolio-timeline.html">Portfolio Timeline</a></li>
										<li><a href="portfolio-full-width.html">Portfolio Full Width</a></li>
										<li><a href="portfolio-single-project.html">Single Project</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a class="dropdown-toggle" href="#">
										Pages
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="dropdown-menu">
										<li class="dropdown-submenu">
											<a href="#">Shop</a>
											<ul class="dropdown-menu">
												<li><a href="shop-full-width.html">Shop - Full Width</a></li>
												<li><a href="shop-sidebar.html">Shop - Sidebar</a></li>
												<li><a href="shop-product-full-width.html">Shop - Product Full Width</a></li>
												<li><a href="shop-product-sidebar.html">Shop - Product Sidebar</a></li>
												<li><a href="shop-cart.html">Shop - Cart</a></li>
												<li><a href="shop-login.html">Shop - Login</a></li>
												<li><a href="shop-checkout.html">Shop - Checkout</a></li>
											</ul>
										</li>
										<li class="dropdown-submenu">
											<a href="#">Blog</a>
											<ul class="dropdown-menu">
												<li><a href="blog-full-width.html">Blog Full Width</a></li>
												<li><a href="blog-large-image.html">Blog Large Image</a></li>
												<li><a href="blog-medium-image.html">Blog Medium Image</a></li>
												<li><a href="blog-timeline.html">Blog Timeline</a></li>
												<li><a href="blog-post.html">Single Post</a></li>
											</ul>
										</li>
										<li class="dropdown-submenu">
											<a href="#">Layouts</a>
											<ul class="dropdown-menu">
												<li><a href="page-full-width.html">Full width</a></li>
												<li><a href="page-left-sidebar.html">Left sidebar</a></li>
												<li><a href="page-right-sidebar.html">Right sidebar</a></li>
											</ul>
										</li>
										<li class="dropdown-submenu">
											<a href="#">Extra</a>
											<ul class="dropdown-menu">
												<li><a href="page-404.html">404 Error</a></li>
												<li><a href="page-coming-soon.html">Coming Soon</a></li>
												<li><a href="page-maintenance-mode.html">Maintenance Mode</a></li>
												<li><a href="sitemap.html">Sitemap</a></li>
											</ul>
										</li>
										<li><a href="page-custom-header.html">Custom Header</a></li>
										<li><a href="page-team.html">Team</a></li>
										<li><a href="page-services.html">Services</a></li>
										<li><a href="page-careers.html">Careers</a></li>
										<li><a href="page-our-office.html">Our Office</a></li>
										<li><a href="page-faq.html">FAQ</a></li>
										<li><a href="page-login.html">Login / Register</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a class="dropdown-toggle" href="#">
										Contact Us
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="dropdown-menu">
										<li><a href="contact-us.html">Contact Us - Basic</a></li>
										<li><a href="contact-us-advanced.php">Contact Us - Advanced</a></li>
									</ul>
								</li>


                                 @auth
                                 <li class="dropdown mega-menu-item mega-menu-signin signin logged" id="headerAccount">
									<a class="dropdown-toggle" href="page-login.html">
										<i class="fa fa-user"></i>  {{ Auth::user()->name ?? "Login"}}
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="dropdown-menu">
										<li>
											<div class="mega-menu-content">
												<div class="row">
													<div class="col-md-8">
														<div class="user-avatar">
															<div class="img-thumbnail">
																<img src="public/img/clients/client-1.jpg" alt="">
															</div>
															<p><strong> {{ Auth::user()->name ?? "Login"}}</strong><span>CEO & Founder - Okler</span></p>
														</div>
													</div>
													<div class="col-md-4">
														<ul class="list-account-options">
															<li>
																<a href="#">My Account</a>
															</li>
															<li>
																<form method="POST" action="{{ route('logout') }}">
                                                                    @csrf
                                                                    @method("POST")

                                                                    <a  href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                                                        {{ __('Log Out') }}
                                                                    </a>
                                                                </form>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
                                 @endauth

                                @guest
                                <li class="dropdown mega-menu-item mega-menu-signin signin" id="headerAccount">
                                    <a class="dropdown-toggle" href="page-login.html">
                                        <i class="fa fa-user"></i> Sign In
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-md-12">

                                                        <div class="signin-form">

                                                            <span class="mega-menu-sub-title">Sign In</span>

                                                            <form method="POST" action="{{ route('login') }}">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="col-md-12">
                                                                            <label>Username or E-mail Address</label>
                                                                            <input type="text" value="" name="email" class="form-control input-lg">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="col-md-12">
                                                                            <a class="pull-right" id="headerRecover" href="#">(Lost Password?)</a>
                                                                            <label>Password</label>
                                                                            <input name="password" type="password" value="" class="form-control input-lg">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <span class="remember-box checkbox">
                                                                            <label for="remember">
                                                                                <input type="checkbox" id="remember" name="remember">Remember Me
                                                                            </label>
                                                                        </span>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="submit" value="Login" class="btn btn-primary pull-right push-bottom" data-loading-text="Loading...">
                                                                    </div>
                                                                </div>
                                                            </form>

                                                            <p class="sign-up-info">Don't have an account yet? <a href="#" id="headerSignUp">Sign Up</a></p>

                                                        </div>
<style>
   .Popup-class {
/* margin-top: 0px; */
    }
</style>
                                                        <div class="signup-form">
                                                            <span class="mega-menu-sub-title">Create Account</span>


                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="col-md-12">
                                                                            <label>E-mail Address</label>
                                                                            <input id="cEmail" type="email" name="email" class="form-control input-lg">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="col-md-6">
                                                                            <label>Name</label>
                                                                            <input id="cName" type="text" name="name" class="form-control input-lg">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label>Password</label>
                                                                            <input id="cPassword" type="password" name="password" class="form-control input-lg">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <input type="button" id="createAccBtn" class="btn btn-primary pull-right push-bottom" value="Create Account" data-loading-text="Loading...">
                                                                    </div>
                                                                </div>

@push("js")
<script>
$("#createAccBtn").click(function (e) {
    // e.stopImmediatePropagation();
    // return false;

    const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
                })
    let name = $("#cName").val();
    let email = $("#cEmail").val();
    let pass = $("#cPassword").val();
    $.ajax({
        headers : {
            'X-CSRF-Token' : '{{ csrf_token() }}'
        },
        type: "POST",
        url: "{{ route("user_store") }}",
        data: {
            name : name,
            email : email,
            password : pass
        },
        success: function (response) {
            if(response == 1)
            {
                Toast.fire({
                icon: 'success',
                title: 'Signed in successfully'
                });
                location.reload();
            }
        },
        error: function(err) {
            let margin = 0;
                // $.each(err.responseJSON.errors, function(key, value) {
                    // var editCSS = document.createElement('style')
                    // editCSS.innerHTML = ".Popup-class {margin-top: "+margin+"px;}";
                    // margin = margin + 70;
                    // document.body.appendChild(editCSS);
                Toast.fire({
                icon: 'error',
                customClass: {
                    popup: 'Popup-class'
                    }
                ,
                title: '\
                <span style="font-size:13px !important">'+ err.responseJSON.errors.email     +'</span> <br>\
                <span style="font-size:13px !important">'+ err.responseJSON.errors.name   +'</span> <br>\
                <span style="font-size:13px !important">'+ err.responseJSON.errors.password+'</span>\
                '
                })
                    // });
                }
    });


});
</script>
@endpush
                                                            <p class="log-in-info">Already have an account? <a href="#" id="headerSignIn">Log In</a></p>
                                                        </div>

                                                        <div class="recover-form">
                                                            <span class="mega-menu-sub-title">Reset My Password</span>
                                                            <p>Complete the form below to receive an email with the authorization code needed to reset your password.</p>

                                                            <form action="" id="" method="post">
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="col-md-12">
                                                                            <label>E-mail Address</label>
                                                                            <input type="text" value="" class="form-control input-lg">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <input type="submit" value="Submit" class="btn btn-primary pull-right push-bottom" data-loading-text="Loading...">
                                                                    </div>
                                                                </div>
                                                            </form>

                                                            <p class="log-in-info">Already have an account? <a href="#" id="headerRecoverCancel">Log In</a></p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                @endguest

									</ul>
								</li>


							</ul>
						</nav>
					</div>
				</div>
			</header>
