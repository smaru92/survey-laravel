	<header class="topbar">
		<nav class="navbar top-navbar navbar-expand-md navbar-light">
			<!-- ============================================================== -->
			<!-- Logo -->
			<!-- ============================================================== -->
			<div class="navbar-header">
				<a class="navbar-brand" href="/">
					<!-- Logo icon -->
					<b>
						<!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
						<!-- Dark Logo icon -->
						<img src="{{ asset('assets/images/pc_logo-3.png') }}" alt="homepage" class="dark-logo" />
						<!-- Light Logo icon -->
						<img src="{{ asset('assets/images/pc_logo-3.png') }}" alt="homepage" class="light-logo" />
					</b>
					<!--End Logo icon -->
				</a>
			</div>
				<!-- ============================================================== -->
				<!-- End Logo -->
				<!-- ============================================================== -->
				<div class="navbar-collapse">
					<!-- ============================================================== -->
					<!-- User profile and search -->
					<!-- ============================================================== -->
					<ul class="navbar-nav my-lg-0">                        
						<!-- ============================================================== -->
						<!-- Profile -->
						<!-- ============================================================== -->
						<li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" 
                                href="../index.php" data-toggle="dropdown" 
                                aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('assets/images/users/1.jpg') }}" alt="user" class="" /> {{ Auth::user()->name }}
                                <span class="hidden-md-down">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                            </a>
							<div class="dropdown-menu dropdown-menu-right animated flipInY">
								<ul class="dropdown-user">
									<li>
										<div class="dw-user-box">
                                            <div class="u-img">
                                                <img src="{{ asset('assets/images/users/1.jpg') }}" alt='user'>
											</div>
											<div class="u-text">
												<h4>
                                                    {{ Auth::user()->name }}
												</h4>
                                                <p class="text-muted">{{ Auth::user()->email }}</p>
                                                내 정보수정
											</div>
										</div>
									</li>
									<li role="separator" class="divider"></li>
									<li><i class="ti-user"></i> 내 프로필</li>
									<li role="separator" class="divider"></li>
									<li><i class="ti-settings"></i> 계정 권한 확인</li>
									<li role="separator" class="divider"></li>
									<li><i class="fa fa-power-off"></i> <a href="/logout">로그아웃</a></li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</header>