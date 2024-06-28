<!-- app-Header -->
<div class="app-header header">
	<div class="container-fluid main-container">
		<div class="d-flex">
			<div class="app-sidebar__toggle d-flex align-items-center" data-bs-toggle="sidebar">
				<a class="open-toggle" href="javascript:void(0);">
					<svg xmlns="http://www.w3.org/2000/svg" class="feather feather-align-left header-icon" width="24" height="24" viewBox="0 0 24 24">
						<path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path>
					</svg>
				</a>
			</div>
			<div class="logo-horizontal">
				<a href="#">
					<img src="{{asset('admin/assets/logo.png')}}" class="header-brand-img desktop-lgo" alt="Azea logo">
					<img src="{{asset('admin/assets/logo.png')}}" class="header-brand-img dark-logo" alt="Azea logo">
				</a>
			</div>
			<!-- LOGO -->
			<div class="mt-1 d-md-block d-none">
				<div class="form-inline">
					<div class="search-element">

					</div>
				</div>
			</div><!-- SEARCH -->
			<div class="d-flex order-lg-2 ms-auto main-header-end">
				<button class="navbar-toggler navresponsive-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="true" aria-label="Toggle navigation">
					<i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
				</button>
				<div class="navbar navbar-expand-lg navbar-collapse responsive-navbar p-0">
					<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
						<div class="d-flex order-lg-2">
							<!-- SEARCH -->
							<div class="dropdown profile-dropdown d-flex">
								<a href="javascript:void(0);" class="nav-link pe-0 leading-none" data-bs-toggle="dropdown">
									<span class="header-avatar1">
										<i class="fa fa-user" aria-hidden="true"></i> Admin Profile
									</span>
								</a>
								<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow animated">
									<div class="text-center">
										<div class="text-center user pb-0 font-weight-bold">Admin
										</div>
										<div class="dropdown-divider"></div>
									</div>

									<a class="dropdown-item d-flex" href="">
										<svg class="header-icon me-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
											<path d="M0 0h24v24H0V0z" fill="none"></path>
											<path d="M19.43 12.98c.04-.32.07-.64.07-.98 0-.34-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.09-.16-.26-.25-.44-.25-.06 0-.12.01-.17.03l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.06-.02-.12-.03-.18-.03-.17 0-.34.09-.43.25l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98 0 .33.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.09.16.26.25.44.25.06 0 .12-.01.17-.03l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.06.02.12.03.18.03.17 0 .34-.09.43-.25l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zm-1.98-1.71c.04.31.05.52.05.73 0 .21-.02.43-.05.73l-.14 1.13.89.7 1.08.84-.7 1.21-1.27-.51-1.04-.42-.9.68c-.43.32-.84.56-1.25.73l-1.06.43-.16 1.13-.2 1.35h-1.4l-.19-1.35-.16-1.13-1.06-.43c-.43-.18-.83-.41-1.23-.71l-.91-.7-1.06.43-1.27.51-.7-1.21 1.08-.84.89-.7-.14-1.13c-.03-.31-.05-.54-.05-.74s.02-.43.05-.73l.14-1.13-.89-.7-1.08-.84.7-1.21 1.27.51 1.04.42.9-.68c.43-.32.84-.56 1.25-.73l1.06-.43.16-1.13.2-1.35h1.39l.19 1.35.16 1.13 1.06.43c.43.18.83.41 1.23.71l.91.7 1.06-.43 1.27-.51.7 1.21-1.07.85-.89.7.14 1.13zM12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z">
											</path>
										</svg>
										<div class="fs-13">Settings</div>
									</a>
									<a class="dropdown-item d-flex" href="{{route('logout')}}">
										<svg class="header-icon me-2" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24">
											<g>
												<rect fill="none" height="24" width="24"></rect>
											</g>
											<g>
												<path d="M11,7L9.6,8.4l2.6,2.6H2v2h10.2l-2.6,2.6L11,17l5-5L11,7z M20,19h-8v2h8c1.1,0,2-0.9,2-2V5c0-1.1-0.9-2-2-2h-8v2h8V19z">
												</path>
											</g>
										</svg>
										<div class="fs-13">Sign Out</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /app-Header -->
<div class="sticky">
	<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
	<aside class="app-sidebar">
		<div class="app-sidebar__logo">
			<a class="header-brand" href="#">
				<img src="{{asset('admin/assets/images/users/logo.png')}}" class="header-brand-img desktop-lgo" alt="Azea logo">
			</a>
		</div>
		<div class="main-sidemenu">
			<div class="slide-left disabled" id="slide-left">
				<svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
					<path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
				</svg>
			</div>
			<ul class="side-menu app-sidebar3">
				<li class="slide">
					<a class="side-menu__item" href="{{url('dashboard')}}">
						<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
							<path d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586 6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z" />
						</svg>
						<span class="side-menu__label">Dashboard</span></a>
				</li>
				<li class="slide">
					<a class="side-menu__item" href="{{route('form.index')}}">
						<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
							<path d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586 6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z" />
						</svg>
						<span class="side-menu__label">form</span></a>
				</li>

			</ul>
			<div class="slide-right" id="slide-right">
				<svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
					<path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
				</svg>
			</div>
		</div>
	</aside>
</div>