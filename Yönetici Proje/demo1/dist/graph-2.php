<?php 
include('php/settings.php');
if (!isset($_SESSION['login'])) {
	header('Location: index.php');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base />
		<title>Grafik 2</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<style >
		.kt_button_class{
				padding: .5rem !important;
				font-size: 12px !important;
			}
			.loader {
				width:100%;
				height:100%;
				margin-top: 10%;
				display: flex;
				justify-content: center;
				align-items: center;
			}
			.typewriter {
  --blue: #5C86FF;
  --blue-dark: #275EFE;
  --key: #fff;
  --paper: #EEF0FD;
  --text: #D3D4EC;
  --tool: #FBC56C;
  --duration: 3s;
  margin-left: auto;
  margin-right: auto;
  -webkit-animation: bounce05 var(--duration) linear infinite;
  animation: bounce05 var(--duration) linear infinite;
}

.typewriter .slide {
  width: 92px;
  height: 20px;
  border-radius: 3px;
  margin-left: 14px;
  transform: translateX(14px);
  background: linear-gradient(var(--blue), var(--blue-dark));
  -webkit-animation: slide05 var(--duration) ease infinite;
  animation: slide05 var(--duration) ease infinite;
}

.typewriter .slide:before, .typewriter .slide:after,
.typewriter .slide i:before {
  content: "";
  position: absolute;
  background: var(--tool);
}

.typewriter .slide:before {
  width: 2px;
  height: 8px;
  top: 6px;
  left: 100%;
}

.typewriter .slide:after {
  left: 94px;
  top: 3px;
  height: 14px;
  width: 6px;
  border-radius: 3px;
}

.typewriter .slide i {
  display: block;
  position: absolute;
  right: 100%;
  width: 6px;
  height: 4px;
  top: 4px;
  background: var(--tool);
}

.typewriter .slide i:before {
  right: 100%;
  top: -2px;
  width: 4px;
  border-radius: 2px;
  height: 14px;
}

.typewriter .paper {
  position: absolute;
  left: 24px;
  top: -26px;
  width: 40px;
  height: 46px;
  border-radius: 5px;
  background: var(--paper);
  transform: translateY(46px);
  -webkit-animation: paper05 var(--duration) linear infinite;
  animation: paper05 var(--duration) linear infinite;
}

.typewriter .paper:before {
  content: "";
  position: absolute;
  left: 6px;
  right: 6px;
  top: 7px;
  border-radius: 2px;
  height: 4px;
  transform: scaleY(0.8);
  background: var(--text);
  box-shadow: 0 12px 0 var(--text), 0 24px 0 var(--text), 0 36px 0 var(--text);
}

.typewriter .keyboard {
  width: 120px;
  height: 56px;
  margin-top: -10px;
  z-index: 1;
  position: relative;
}

.typewriter .keyboard:before, .typewriter .keyboard:after {
  content: "";
  position: absolute;
}

.typewriter .keyboard:before {
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  border-radius: 7px;
  background: linear-gradient(135deg, var(--blue), var(--blue-dark));
  transform: perspective(10px) rotateX(2deg);
  transform-origin: 50% 100%;
}

.typewriter .keyboard:after {
  left: 2px;
  top: 25px;
  width: 11px;
  height: 4px;
  border-radius: 2px;
  box-shadow: 15px 0 0 var(--key), 30px 0 0 var(--key), 45px 0 0 var(--key), 60px 0 0 var(--key), 75px 0 0 var(--key), 90px 0 0 var(--key), 22px 10px 0 var(--key), 37px 10px 0 var(--key), 52px 10px 0 var(--key), 60px 10px 0 var(--key), 68px 10px 0 var(--key), 83px 10px 0 var(--key);
  -webkit-animation: keyboard05 var(--duration) linear infinite;
  animation: keyboard05 var(--duration) linear infinite;
}

@keyframes bounce05 {
  85%, 92%, 100% {
    transform: translateY(0);
  }

  89% {
    transform: translateY(-4px);
  }

  95% {
    transform: translateY(2px);
  }
}

@keyframes slide05 {
  5% {
    transform: translateX(14px);
  }

  15%, 30% {
    transform: translateX(6px);
  }

  40%, 55% {
    transform: translateX(0);
  }

  65%, 70% {
    transform: translateX(-4px);
  }

  80%, 89% {
    transform: translateX(-12px);
  }

  100% {
    transform: translateX(14px);
  }
}

@keyframes paper05 {
  5% {
    transform: translateY(46px);
  }

  20%, 30% {
    transform: translateY(34px);
  }

  40%, 55% {
    transform: translateY(22px);
  }

  65%, 70% {
    transform: translateY(10px);
  }

  80%, 85% {
    transform: translateY(0);
  }

  92%, 100% {
    transform: translateY(46px);
  }
}

@keyframes keyboard05 {
  5%, 12%, 21%, 30%, 39%, 48%, 57%, 66%, 75%, 84% {
    box-shadow: 15px 0 0 var(--key), 30px 0 0 var(--key), 45px 0 0 var(--key), 60px 0 0 var(--key), 75px 0 0 var(--key), 90px 0 0 var(--key), 22px 10px 0 var(--key), 37px 10px 0 var(--key), 52px 10px 0 var(--key), 60px 10px 0 var(--key), 68px 10px 0 var(--key), 83px 10px 0 var(--key);
  }

  9% {
    box-shadow: 15px 2px 0 var(--key), 30px 0 0 var(--key), 45px 0 0 var(--key), 60px 0 0 var(--key), 75px 0 0 var(--key), 90px 0 0 var(--key), 22px 10px 0 var(--key), 37px 10px 0 var(--key), 52px 10px 0 var(--key), 60px 10px 0 var(--key), 68px 10px 0 var(--key), 83px 10px 0 var(--key);
  }

  18% {
    box-shadow: 15px 0 0 var(--key), 30px 0 0 var(--key), 45px 0 0 var(--key), 60px 2px 0 var(--key), 75px 0 0 var(--key), 90px 0 0 var(--key), 22px 10px 0 var(--key), 37px 10px 0 var(--key), 52px 10px 0 var(--key), 60px 10px 0 var(--key), 68px 10px 0 var(--key), 83px 10px 0 var(--key);
  }

  27% {
    box-shadow: 15px 0 0 var(--key), 30px 0 0 var(--key), 45px 0 0 var(--key), 60px 0 0 var(--key), 75px 0 0 var(--key), 90px 0 0 var(--key), 22px 12px 0 var(--key), 37px 10px 0 var(--key), 52px 10px 0 var(--key), 60px 10px 0 var(--key), 68px 10px 0 var(--key), 83px 10px 0 var(--key);
  }

  36% {
    box-shadow: 15px 0 0 var(--key), 30px 0 0 var(--key), 45px 0 0 var(--key), 60px 0 0 var(--key), 75px 0 0 var(--key), 90px 0 0 var(--key), 22px 10px 0 var(--key), 37px 10px 0 var(--key), 52px 12px 0 var(--key), 60px 12px 0 var(--key), 68px 12px 0 var(--key), 83px 10px 0 var(--key);
  }

  45% {
    box-shadow: 15px 0 0 var(--key), 30px 0 0 var(--key), 45px 0 0 var(--key), 60px 0 0 var(--key), 75px 0 0 var(--key), 90px 2px 0 var(--key), 22px 10px 0 var(--key), 37px 10px 0 var(--key), 52px 10px 0 var(--key), 60px 10px 0 var(--key), 68px 10px 0 var(--key), 83px 10px 0 var(--key);
  }

  54% {
    box-shadow: 15px 0 0 var(--key), 30px 2px 0 var(--key), 45px 0 0 var(--key), 60px 0 0 var(--key), 75px 0 0 var(--key), 90px 0 0 var(--key), 22px 10px 0 var(--key), 37px 10px 0 var(--key), 52px 10px 0 var(--key), 60px 10px 0 var(--key), 68px 10px 0 var(--key), 83px 10px 0 var(--key);
  }

  63% {
    box-shadow: 15px 0 0 var(--key), 30px 0 0 var(--key), 45px 0 0 var(--key), 60px 0 0 var(--key), 75px 0 0 var(--key), 90px 0 0 var(--key), 22px 10px 0 var(--key), 37px 10px 0 var(--key), 52px 10px 0 var(--key), 60px 10px 0 var(--key), 68px 10px 0 var(--key), 83px 12px 0 var(--key);
  }

  72% {
    box-shadow: 15px 0 0 var(--key), 30px 0 0 var(--key), 45px 2px 0 var(--key), 60px 0 0 var(--key), 75px 0 0 var(--key), 90px 0 0 var(--key), 22px 10px 0 var(--key), 37px 10px 0 var(--key), 52px 10px 0 var(--key), 60px 10px 0 var(--key), 68px 10px 0 var(--key), 83px 10px 0 var(--key);
  }

  81% {
    box-shadow: 15px 0 0 var(--key), 30px 0 0 var(--key), 45px 0 0 var(--key), 60px 0 0 var(--key), 75px 0 0 var(--key), 90px 0 0 var(--key), 22px 10px 0 var(--key), 37px 12px 0 var(--key), 52px 10px 0 var(--key), 60px 10px 0 var(--key), 68px 10px 0 var(--key), 83px 10px 0 var(--key);
  }
}

#response {
	font-size: 16px;
	font-weight: 500;
	line-height: 26px;
}
.viz-portfolio-total-value {
  font-family: helvetica, arial, sans-serif; 
  margin: 0 auto;
  font-size: 10px;
  width: 100%;
  height: 100%;
}
#chartdiv {
  width: 100%;
  height: 500px;
}
			
@media print { 
	.avoid-break {
        page-break-inside: avoid;
        page-break-before: auto; /* Gerekirse bir önceki sayfadan taşmasını sağlar */
        page-break-after: auto;  /* Gerekirse bir sonraki sayfaya geçişi ayarlar */
    }
.col-print-1 {width:8%;  float:left;}
.col-print-2 {width:16%; float:left;}
.col-print-3 {width:25%; float:left;}
.col-print-4 {width:33%; float:left;}
.col-print-5 {width:42%; float:left;}
.col-print-6 {width:50%; float:left;}
.col-print-7 {width:58%; float:left;}
.col-print-8 {width:66%; float:left;}
.col-print-9 {width:75%; float:left;}
.col-print-10{width:83%; float:left;}
.col-print-11{width:92%; float:left;}
.col-print-12{width:100%; float:left;}
#kt_app_header {
	display: none;
}
#graph-card {
	float: left;
	width: 33% !important;
}
.card {
	margin-bottom: 10px !important;
}
.print {
	display: none !important;
}
.breadcrumb {
	display: none;
}
 #pie {
	margin-right: 5px;
 }

}
		</style>
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				<!--begin::Header-->
				<div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: true, lg: true}" data-kt-sticky-name="app-header-minimize" data-kt-sticky-offset="{default: '200px', lg: '0'}" data-kt-sticky-animation="false">
					<!--begin::Header container-->
					<div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
						<!--begin::Sidebar mobile toggle-->
						<div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
							<div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
								<i class="ki-duotone ki-abstract-14 fs-2 fs-md-1">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</div>
						</div>
						<!--end::Sidebar mobile toggle-->
						<!--begin::Mobile logo-->
						<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
							<a href="graph-1.php" class="d-lg-none">
								<img alt="Logo" src="assets/media/logos/default-small.svg" class="h-30px" />
							</a>
						</div>
						<!--end::Mobile logo-->
						<!--begin::Header wrapper-->
						<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
							<!--begin::Menu wrapper-->
							<div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
								<!--begin::Menu-->
								
								<!--end::Menu-->
							</div>
							<!--end::Menu wrapper-->
							<!--begin::Navbar-->
							<div class="app-navbar flex-shrink-0">
								<!--begin::Search-->
							
							
								<div class="app-navbar-item ms-1 ms-md-4" id="kt_header_user_menu_toggle">
									<!--begin::Menu wrapper-->
									<div class="cursor-pointer symbol symbol-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
										<img src="assets/user-image/<?=$login->image?>" class="rounded-3" alt="user" />
									</div>
									<!--begin::User account menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<div class="menu-content d-flex align-items-center px-3">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px me-5">
													<img alt="Logo" src="assets/user-image/<?=$login->image?>" />
												</div>
												<!--end::Avatar-->
												<!--begin::Username-->
												<div class="d-flex flex-column">
													<div class="fw-bold d-flex align-items-center fs-5"><?=$login->name?></div>
													<a href="#" class="fw-semibold text-muted text-hover-primary fs-7"><?=$login->mail?></a>
												</div>
												<!--end::Username-->
											</div>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu separator-->
										
									
										<!--begin::Menu item-->
										
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-5 my-1">
											<a href="settings.php" class="menu-link px-5">Hesap Ayarları</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-5">
											<a href="php/logout.php" class="menu-link px-5">Çıkış Yap</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::User account menu-->
									<!--end::Menu wrapper-->
								</div>
								<!--end::User menu-->
							
								<!--begin::Aside toggle-->
								<!--end::Header menu toggle-->
							</div>
							<!--end::Navbar-->
						</div>
						<!--end::Header wrapper-->
					</div>
					<!--end::Header container-->
				</div>
				<!--end::Header-->
				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					<!--begin::Sidebar-->
					<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
						<!--begin::Logo-->
						<div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
							<!--begin::Logo image-->
							<a href="graph-1.php">
								<img alt="Logo" src="assets/media/logos/default-dark.svg" class="h-60px app-sidebar-logo-default" />
								<img alt="Logo" src="assets/media/logos/default-small.svg" class="h-20px app-sidebar-logo-minimize" />
							</a>
							<!--end::Logo image-->
							<!--begin::Sidebar toggle-->
							<!--begin::Minimized sidebar setup:
            if (isset($_COOKIE["sidebar_minimize_state"]) && $_COOKIE["sidebar_minimize_state"] === "on") {
                1. "src/js/layout/sidebar.js" adds "sidebar_minimize_state" cookie value to save the sidebar minimize state.
                2. Set data-kt-app-sidebar-minimize="on" attribute for body tag.
                3. Set data-kt-toggle-state="active" attribute to the toggle element with "kt_app_sidebar_toggle" id.
                4. Add "active" class to to sidebar toggle element with "kt_app_sidebar_toggle" id.
            }
        -->
							<div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary h-30px w-30px position-absolute top-50 start-100 translate-middle rotate" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">
								<i class="ki-duotone ki-black-left-line fs-3 rotate-180">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</div>
							<!--end::Sidebar toggle-->
						</div>
						<!--end::Logo-->
						<!--begin::sidebar menu-->
						<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
							<!--begin::Menu wrapper-->
							<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
								<!--begin::Scroll wrapper-->
								<div id="kt_app_sidebar_menu_scroll" class="scroll-y my-5 mx-3" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
									<!--begin::Menu-->
									<div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
										<!--begin:Menu item-->
										
											<!--begin:Menu link-->
											
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<?=$menu?>
										
											
									

										<!--end:Menu item-->
									</div>
									<!--end:: MENÜ BİTİŞ BİTİŞ enu-->
								</div>
								<!--end::Scroll wrapper-->
							</div>
							<!--end::Menu wrapper-->
						</div>
						<!--end::sidebar menu-->
						<!--begin::Footer-->
						<div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
							<a href="https://preview.keenthemes.com/html/metronic/docs" class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click" title="200+ in-house components and 3rd-party plugins">
								<span class="btn-label">Docs & Components</span>
								<i class="ki-duotone ki-document btn-icon fs-2 m-0">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</a>
						</div>
						<!--end::Footer-->
					</div>
					<!--end::Sidebar-->
					<!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Rapor Grafikleri</h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="graph-1.php" class="text-muted text-hover-primary">Anasayfa</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">Grafikler</li>
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page title-->
									
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Content-->
							<?php
							$stmt = $con->prepare('SELECT SUM(urun_adet) as toplam FROM urun ');
							if($stmt->execute())
							{
								$urun_result = $stmt->get_result();
								$urun_adet = $urun_result->fetch_object();
							}							
							?>
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
									<!--begin::Row-->
									<div class="row g-5 g-xl-10 mb-xl-10">
										<div class="col-md-4 col-lg-4 col-xl-4 col-xxl-4 mb-md-8 mb-xl-10 col-print-4">
										
											<!--begin::Statistics Widget 5-->
											<a href="products.php" class="card bg-dark hoverable card-xl-stretch mb-xl-8">
												<!--begin::Body-->
												<div class="card-body">
												<i class="fa-regular fa-box fa-xl" style="font-size:24px;color:#fff"></i>
													<div class="text-gray-100 fw-bold fs-2 mb-2 mt-5"><?=$urun_adet->toplam?></div>
													<div class="fw-semibold text-gray-100">Toplam Stok Sayısı</div>
												</div>
												<!--end::Body-->
											</a>
											<!--end::Statistics Widget 5-->
									
										</div>			

										<?php
										$stmt = $con->prepare('SELECT COUNT(*) as toplam from user');
										if($stmt->execute())	
										{
											$user_result = $stmt->get_result();
											$user_adet = $user_result->fetch_object();	
										}
										
										?>
										<div class="col-md-4 col-lg-4 col-xl-4 col-xxl-4 mb-md-8 mb-xl-10 col-print-4">
										
										<!--begin::Statistics Widget 5-->
										<a href="users.php" class="card bg-warning hoverable card-xl-stretch mb-xl-8">
											<!--begin::Body-->
											<div class="card-body">
											<i class="fa-regular fa-user "  style="font-size:24px;color:#fff"></i>
												<div class="text-gray-100 fw-bold fs-2 mb-2 mt-5"><?=$user_adet->toplam?></div>
												<div class="fw-semibold text-gray-100">Toplam Kullanıcı</div>
											</div>
											<!--end::Body-->
										</a>
										<!--end::Statistics Widget 5-->
								
									</div>	

									<?php
										$stmt = $con->prepare('SELECT COUNT(*) as toplam FROM satis');
										if($stmt->execute())
										{
											$satis_result = $stmt->get_result();
											$satis_adet = $satis_result->fetch_object();
										}
									?>
									<div class="col-md-4 col-lg-4 col-xl-4 col-xxl-4 mb-md-8 mb-xl-10 col-print-4">
										
										<!--begin::Statistics Widget 5-->
										<a href="#" class="card bg-primary hoverable card-xl-stretch mb-xl-8">
											<!--begin::Body-->
											<div class="card-body">
											<i class="fa-regular fa-tag"  style="font-size:24px;color:#fff"></i>
												<div class="text-gray-100 fw-bold fs-2 mb-2 mt-5"><?=$satis_adet->toplam?></div>
												<div class="fw-semibold text-gray-100">Toplam Yapılan Satışlar</div>
											</div>
											<!--end::Body-->
										</a>
										<!--end::Statistics Widget 5-->
								
									</div>	
									<script>
									

									let product = [];
									let color = [];
									let ctg  = [];
									let urls = [];
									
									</script>
									<?php
										$max = 0; 
										$stmt = $con->prepare("select * from satis");
										$toplam = 0;
										$record = 0;
										if($stmt->execute())
										{
											$result = $stmt->get_result();
											while($row = $result->fetch_object()){
												
													$product = $con->prepare("SELECT * FROM urun where urun_no = ?");
													$product->bind_param("s",$row->urun_no);
													if($product->execute())
													{
														$product_result = $product->get_result();
														$product_data = $product_result->fetch_object();
													}
												if($row->adet > $max){
													$max = $row->adet;
												}
												$colorIndex = $record % $numberOfColors;
												$toplam+=$row->adet;	
												$encrypted_id = NULL;
												$encrypted_product = NULL;
												$encrypted_id = urlencode(kodla($row->id));
												$encrypted_product = urlencode(kodla($row->urun_no));
												?>

											<script>
												product.push(<?=$row->adet?>);
												color.push("<?=$colorPalette[$colorIndex]?>");
												ctg.push("<?=$row->urun_no?>");
												urls.push("sales.php?id=<?=$encrypted_id?>&product=<?=$encrypted_product?>")
											</script>
										
										<?php 	
										$record++;	}
										}

										
										$stmt = $con->prepare('SELECT * FROM urun ORDER BY urun_adet ASC');
										if($stmt->execute()){
											$result = $stmt->get_result();
											while(	$urun = $result->fetch_object()){
												$encrypted_id = NULL;
												$encrypted_id = urlencode(kodla($urun->id));
											$veriler[] = array(
												"value" => $urun->urun_adet,
												"category" => $urun->urun_ad,
												"id" => $encrypted_id
											);
											$json_veriler = json_encode($veriler);
											echo "<script>var veriler = {$json_veriler};</script>";
										}
										}
									?>
									<div class="row gy-5  g-xl-10">
										<div class="col-xxl-6 mb-6 mb-xl-10 avoid-break">
											<!--begin::Chart widget 27-->
											<div class="card card-flush h-xl-100">
												<!--begin::Header-->
												<div class="card-header py-7">
													<!--begin::Statistics-->
													<div class="m-0">
														<!--begin::Heading-->
														<div class="d-flex align-items-center mb-2">
															<!--begin::Title-->
															<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2"><?=number_format($toplam,0,',','.')?></span>
															<!--end::Title-->
															<!--begin::Label-->
															<span class="badge badge-light-danger fs-base">
															<i class="ki-outline ki-arrow-up fs-5 text-danger ms-n1"></i>8.02%</span>
															<!--end::Label-->
														</div>
														<!--end::Heading-->
														<!--begin::Description-->
														<span class="fs-6 fw-semibold text-gray-400">Satış Grafiği </span>
														<!--end::Description-->
													</div>
													<div class="card-toolbar print" style="float:right;position:absolute;right:10px;top:20px;">
																
																<button class="btn btn-light-warning p-3 d-flex justify-content-center align-items-center kt_button_class" style="margin-right:10px" data-table="satis" data-name="adet" data-time="6"  data-bs-toggle="modal" data-bs-target="#kt_modal_1"><i class="fa-solid fa-microchip-ai " style="font-size:20px"></i> 6 Ay</button>
																<button class="btn btn-light-danger  p-3 d-flex justify-content-center align-items-center kt_button_class" style="margin-right:10px" data-table="satis" data-name="adet" data-time="12"   data-bs-toggle="modal" data-bs-target="#kt_modal_1"><i class="fa-solid fa-microchip-ai " style="font-size:20px"></i> 1 Yıl</button>
																<a href="sales.php" type="button" class="btn btn-light-success p-3" ><i class="fa-duotone fa-arrow-right fa-lg" style="font-size:12px;"></i></a>
																</div>
													<!--end::Statistics-->
													<!--begin::Toolbar-->
													
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-0 pb-1">
													<div id="kt_charts_widget_27" class="min-h-auto"></div>
												</div>
												<!--end::Body-->
											</div>
											<!--end::Chart widget 27-->
										</div>
										<div class="col-xl-6 avoid-break">
											<!--begin::Chart widget 17-->
											<div class="card card-flush h-xl-100">
												<!--begin::Header-->
												<div class="card-header pt-3">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-dark">Ürün İstatistikleri</span>
														<span class="text-gray-400 pt-2 fw-semibold fs-6">Ürün Stok Dağılımı</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar print" style="float:right;position:absolute;right:10px;top:20px;">
																
																<button class="btn btn-light-warning p-3 d-flex justify-content-center align-items-center kt_button_class" style="margin-right:10px" data-table="urun" data-name="adet" data-time="6"  data-bs-toggle="modal" data-bs-target="#kt_modal_1"><i class="fa-solid fa-microchip-ai " style="font-size:20px"></i> 6 Ay</button>
																<button class="btn btn-light-danger  p-3 d-flex justify-content-center align-items-center kt_button_class" style="margin-right:10px" data-table="urun" data-name="adet" data-time="12"   data-bs-toggle="modal" data-bs-target="#kt_modal_1"><i class="fa-solid fa-microchip-ai " style="font-size:20px"></i> 1 Yıl</button>
																<a href="products.php" type="button" class="btn btn-light-success p-3" ><i class="fa-duotone fa-arrow-right fa-lg" style="font-size:12px;"></i></a>
																</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-5">
													<!--begin::Chart container-->
													<div id="kt_charts_widget_17_chart" class="w-100 h-400px"></div>
													<!--end::Chart container-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Chart widget 17-->
										</div>
										</div>

										<div class="row gy-5 g-xl-10">
										<!--begin::Col-->
										<div class="col-xl-4 mb-xl-10">
											<!--begin::List widget 16-->
											<div class="card card-flush h-xl-100">
												<!--begin::Header-->
												<div class="card-header pt-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">Delivery Tracking</span>
														<span class="text-gray-400 mt-1 fw-semibold fs-6">56 deliveries in progress</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<a href="#" class="btn btn-sm btn-light" data-bs-toggle='tooltip' data-bs-dismiss='click' data-bs-custom-class="tooltip-inverse" title="Delivery App is coming soon">View All</a>
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-4 px-0">
													<!--begin::Nav-->
													<ul class="nav nav-pills nav-pills-custom item position-relative mx-9 mb-9">
														<!--begin::Item-->
														<li class="nav-item col-4 mx-0 p-0">
															<!--begin::Link-->
															<a class="nav-link active d-flex justify-content-center w-100 border-0 h-100" data-bs-toggle="pill" href="#kt_list_widget_16_tab_1">
																<!--begin::Subtitle-->
																<span class="nav-text text-gray-800 fw-bold fs-6 mb-3">New</span>
																<!--end::Subtitle-->
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
																<!--end::Bullet-->
															</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
														<!--begin::Item-->
														<li class="nav-item col-4 mx-0 px-0">
															<!--begin::Link-->
															<a class="nav-link d-flex justify-content-center w-100 border-0 h-100" data-bs-toggle="pill" href="#kt_list_widget_16_tab_2">
																<!--begin::Subtitle-->
																<span class="nav-text text-gray-800 fw-bold fs-6 mb-3">Preparing</span>
																<!--end::Subtitle-->
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
																<!--end::Bullet-->
															</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
														<!--begin::Item-->
														<li class="nav-item col-4 mx-0 px-0">
															<!--begin::Link-->
															<a class="nav-link d-flex justify-content-center w-100 border-0 h-100" data-bs-toggle="pill" href="#kt_list_widget_16_tab_3">
																<!--begin::Subtitle-->
																<span class="nav-text text-gray-800 fw-bold fs-6 mb-3">Shipping</span>
																<!--end::Subtitle-->
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
																<!--end::Bullet-->
															</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
														<!--begin::Bullet-->
														<span class="position-absolute z-index-1 bottom-0 w-100 h-4px bg-light rounded"></span>
														<!--end::Bullet-->
													</ul>
													<!--end::Nav-->
													<!--begin::Tab Content-->
													<div class="tab-content px-9 hover-scroll-overlay-y pe-7 me-3 mb-2" style="height: 454px">
														<!--begin::Tap pane-->
														<div class="tab-pane fade show active" id="kt_list_widget_16_tab_1">
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Timeline-->
																<div class="timeline ms-n1">
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center mb-4">
																		<!--begin::Timeline line-->
																		<div class="timeline-line w-20px mt-12 mb-n14"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon pt-1" style="margin-left: 0.7px">
																			<i class="ki-outline ki-cd fs-2 text-success"></i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Brooklyn Simmons</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-400">6391 Elgin St. Celina, Delaware 10299</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center">
																		<!--begin::Timeline line-->
																		<div class="timeline-line w-20px"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon pt-1" style="margin-left: 0.5px">
																			<i class="ki-outline ki-geolocation fs-2 text-info"></i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Ralph Edwards</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-400">2464 Royal Ln. Mesa, New Jersey 45463</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																</div>
																<!--end::Timeline-->
															</div>
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed mt-5 mb-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Timeline-->
																<div class="timeline ms-n1">
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center mb-4">
																		<!--begin::Timeline line-->
																		<div class="timeline-line w-20px mt-12 mb-n14"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon pt-1" style="margin-left: 0.7px">
																			<i class="ki-outline ki-cd fs-2 text-success"></i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Cameron Williamson</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-400">3891 Ranchview Dr. Richardson, California 62639</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center">
																		<!--begin::Timeline line-->
																		<div class="timeline-line w-20px"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon pt-1" style="margin-left: 0.5px">
																			<i class="ki-outline ki-geolocation fs-2 text-info"></i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Kristin Watson</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-400">8502 Preston Rd. Inglewood, Maine 98380</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																</div>
																<!--end::Timeline-->
															</div>
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed mt-5 mb-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Timeline-->
																<div class="timeline ms-n1">
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center mb-4">
																		<!--begin::Timeline line-->
																		<div class="timeline-line w-20px mt-12 mb-n14"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon pt-1" style="margin-left: 0.7px">
																			<i class="ki-outline ki-cd fs-2 text-success"></i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Albert Flores</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-400">3517 W. Gray St. Utica, Pennsylvania 57867</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center">
																		<!--begin::Timeline line-->
																		<div class="timeline-line w-20px"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon pt-1" style="margin-left: 0.5px">
																			<i class="ki-outline ki-geolocation fs-2 text-info"></i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Jessie Clarcson</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-400">Total 2,356 Items in the Stock</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																</div>
																<!--end::Timeline-->
															</div>
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed mt-5 mb-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Timeline-->
																<div class="timeline ms-n1">
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center mb-4">
																		<!--begin::Timeline line-->
																		<div class="timeline-line w-20px mt-12 mb-n14"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon pt-1" style="margin-left: 0.7px">
																			<i class="ki-outline ki-cd fs-2 text-success"></i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Cameron Williamson</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-400">3891 Ranchview Dr. Richardson, California 62639</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center">
																		<!--begin::Timeline line-->
																		<div class="timeline-line w-20px"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon pt-1" style="margin-left: 0.5px">
																			<i class="ki-outline ki-geolocation fs-2 text-info"></i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Kristin Watson</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-400">8502 Preston Rd. Inglewood, Maine 98380</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																</div>
																<!--end::Timeline-->
															</div>
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed mt-5 mb-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Timeline-->
																<div class="timeline ms-n1">
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center mb-4">
																		<!--begin::Timeline line-->
																		<div class="timeline-line w-20px mt-12 mb-n14"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon pt-1" style="margin-left: 0.7px">
																			<i class="ki-outline ki-cd fs-2 text-success"></i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Brooklyn Simmons</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-400">6391 Elgin St. Celina, Delaware 10299</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center">
																		<!--begin::Timeline line-->
																		<div class="timeline-line w-20px"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon pt-1" style="margin-left: 0.5px">
																			<i class="ki-outline ki-geolocation fs-2 text-info"></i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Ralph Edwards</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-400">2464 Royal Ln. Mesa, New Jersey 45463</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																</div>
																<!--end::Timeline-->
															</div>
															<!--end::Item-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_list_widget_16_tab_2">
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Timeline-->
																<div class="timeline ms-n1">
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center mb-4">
																		<!--begin::Timeline line-->
																		<div class="timeline-line w-20px mt-12 mb-n14"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon pt-1" style="margin-left: 0.7px">
																			<i class="ki-outline ki-cd fs-2 text-success"></i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Cameron Williamson</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-400">3891 Ranchview Dr. Richardson, California 62639</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center">
																		<!--begin::Timeline line-->
																		<div class="timeline-line w-20px"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon pt-1" style="margin-left: 0.5px">
																			<i class="ki-outline ki-geolocation fs-2 text-info"></i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Kristin Watson</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-400">8502 Preston Rd. Inglewood, Maine 98380</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																</div>
																<!--end::Timeline-->
															</div>
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed mt-5 mb-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Timeline-->
																<div class="timeline ms-n1">
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center mb-4">
																		<!--begin::Timeline line-->
																		<div class="timeline-line w-20px mt-12 mb-n14"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon pt-1" style="margin-left: 0.7px">
																			<i class="ki-outline ki-cd fs-2 text-success"></i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Brooklyn Simmons</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-400">6391 Elgin St. Celina, Delaware 10299</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center">
																		<!--begin::Timeline line-->
																		<div class="timeline-line w-20px"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon pt-1" style="margin-left: 0.5px">
																			<i class="ki-outline ki-geolocation fs-2 text-info"></i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Ralph Edwards</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-400">2464 Royal Ln. Mesa, New Jersey 45463</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																</div>
																<!--end::Timeline-->
															</div>
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed mt-5 mb-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Timeline-->
																<div class="timeline ms-n1">
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center mb-4">
																		<!--begin::Timeline line-->
																		<div class="timeline-line w-20px mt-12 mb-n14"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon pt-1" style="margin-left: 0.7px">
																			<i class="ki-outline ki-cd fs-2 text-success"></i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Cameron Williamson</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-400">3891 Ranchview Dr. Richardson, California 62639</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center">
																		<!--begin::Timeline line-->
																		<div class="timeline-line w-20px"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon pt-1" style="margin-left: 0.5px">
																			<i class="ki-outline ki-geolocation fs-2 text-info"></i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Kristin Watson</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-400">8502 Preston Rd. Inglewood, Maine 98380</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																</div>
																<!--end::Timeline-->
															</div>
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed mt-5 mb-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Timeline-->
																<div class="timeline ms-n1">
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center mb-4">
																		<!--begin::Timeline line-->
																		<div class="timeline-line w-20px mt-12 mb-n14"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon pt-1" style="margin-left: 0.7px">
																			<i class="ki-outline ki-cd fs-2 text-success"></i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Albert Flores</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-400">3517 W. Gray St. Utica, Pennsylvania 57867</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center">
																		<!--begin::Timeline line-->
																		<div class="timeline-line w-20px"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon pt-1" style="margin-left: 0.5px">
																			<i class="ki-outline ki-geolocation fs-2 text-info"></i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Jessie Clarcson</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-400">Total 2,356 Items in the Stock</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																</div>
																<!--end::Timeline-->
															</div>
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed mt-5 mb-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Timeline-->
																<div class="timeline ms-n1">
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center mb-4">
																		<!--begin::Timeline line-->
																		<div class="timeline-line w-20px mt-12 mb-n14"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon pt-1" style="margin-left: 0.7px">
																			<i class="ki-outline ki-cd fs-2 text-success"></i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Albert Flores</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-400">3517 W. Gray St. Utica, Pennsylvania 57867</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center">
																		<!--begin::Timeline line-->
																		<div class="timeline-line w-20px"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon pt-1" style="margin-left: 0.5px">
																			<i class="ki-outline ki-geolocation fs-2 text-info"></i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Jessie Clarcson</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-400">Total 2,356 Items in the Stock</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																</div>
																<!--end::Timeline-->
															</div>
															<!--end::Item-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_list_widget_16_tab_3">
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Timeline-->
																<div class="timeline ms-n1">
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center mb-4">
																		<!--begin::Timeline line-->
																		<div class="timeline-line w-20px mt-12 mb-n14"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon pt-1" style="margin-left: 0.7px">
																			<i class="ki-outline ki-cd fs-2 text-success"></i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Albert Flores</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-400">3517 W. Gray St. Utica, Pennsylvania 57867</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center">
																		<!--begin::Timeline line-->
																		<div class="timeline-line w-20px"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon pt-1" style="margin-left: 0.5px">
																			<i class="ki-outline ki-geolocation fs-2 text-info"></i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Jessie Clarcson</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-400">Total 2,356 Items in the Stock</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																</div>
																<!--end::Timeline-->
															</div>
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed mt-5 mb-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Timeline-->
																<div class="timeline ms-n1">
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center mb-4">
																		<!--begin::Timeline line-->
																		<div class="timeline-line w-20px mt-12 mb-n14"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon pt-1" style="margin-left: 0.7px">
																			<i class="ki-outline ki-cd fs-2 text-success"></i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Brooklyn Simmons</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-400">6391 Elgin St. Celina, Delaware 10299</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center">
																		<!--begin::Timeline line-->
																		<div class="timeline-line w-20px"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon pt-1" style="margin-left: 0.5px">
																			<i class="ki-outline ki-geolocation fs-2 text-info"></i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Ralph Edwards</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-400">2464 Royal Ln. Mesa, New Jersey 45463</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																</div>
																<!--end::Timeline-->
															</div>
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed mt-5 mb-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Timeline-->
																<div class="timeline ms-n1">
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center mb-4">
																		<!--begin::Timeline line-->
																		<div class="timeline-line w-20px mt-12 mb-n14"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon pt-1" style="margin-left: 0.7px">
																			<i class="ki-outline ki-cd fs-2 text-success"></i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Brooklyn Simmons</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-400">6391 Elgin St. Celina, Delaware 10299</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center">
																		<!--begin::Timeline line-->
																		<div class="timeline-line w-20px"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon pt-1" style="margin-left: 0.5px">
																			<i class="ki-outline ki-geolocation fs-2 text-info"></i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Ralph Edwards</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-400">2464 Royal Ln. Mesa, New Jersey 45463</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																</div>
																<!--end::Timeline-->
															</div>
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed mt-5 mb-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Timeline-->
																<div class="timeline ms-n1">
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center mb-4">
																		<!--begin::Timeline line-->
																		<div class="timeline-line w-20px mt-12 mb-n14"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon pt-1" style="margin-left: 0.7px">
																			<i class="ki-outline ki-cd fs-2 text-success"></i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Cameron Williamson</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-400">3891 Ranchview Dr. Richardson, California 62639</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center">
																		<!--begin::Timeline line-->
																		<div class="timeline-line w-20px"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon pt-1" style="margin-left: 0.5px">
																			<i class="ki-outline ki-geolocation fs-2 text-info"></i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Kristin Watson</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-400">8502 Preston Rd. Inglewood, Maine 98380</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																</div>
																<!--end::Timeline-->
															</div>
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed mt-5 mb-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Timeline-->
																<div class="timeline ms-n1">
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center mb-4">
																		<!--begin::Timeline line-->
																		<div class="timeline-line w-20px mt-12 mb-n14"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon pt-1" style="margin-left: 0.7px">
																			<i class="ki-outline ki-cd fs-2 text-success"></i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Cameron Williamson</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-400">3891 Ranchview Dr. Richardson, California 62639</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center">
																		<!--begin::Timeline line-->
																		<div class="timeline-line w-20px"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon pt-1" style="margin-left: 0.5px">
																			<i class="ki-outline ki-geolocation fs-2 text-info"></i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Kristin Watson</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-400">8502 Preston Rd. Inglewood, Maine 98380</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																</div>
																<!--end::Timeline-->
															</div>
															<!--end::Item-->
														</div>
														<!--end::Tap pane-->
													</div>
													<!--end::Tab Content-->
												</div>
												<!--end: Card Body-->
											</div>
											<!--end::List widget 16-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xl-8 mb-5 mb-xl-10">
											<!--begin::Chart widget 32-->
											<div class="card card-flush h-xl-100">
												<!--begin::Header-->
												<div class="card-header pt-7 mb-3">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">Deliveries by Category</span>
														<span class="text-gray-400 mt-1 fw-semibold fs-6">Total 424,567 deliveries</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
														<div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4">
															<!--begin::Display range-->
															<div class="text-gray-600 fw-bold">Loading date range...</div>
															<!--end::Display range-->
															<i class="ki-outline ki-calendar-8 fs-1 ms-2 me-0"></i>
														</div>
														<!--end::Daterangepicker-->
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body d-flex flex-column justify-content-between pb-5 px-0">
													<!--begin::Nav-->
													<ul class="nav nav-pills nav-pills-custom mb-3 mx-9">
														<!--begin::Item-->
														<li class="nav-item mb-3 me-3 me-lg-6">
															<!--begin::Link-->
															<a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 active" data-bs-toggle="pill" id="kt_charts_widget_32_tab_1" href="#kt_charts_widget_32_tab_content_1">
																<!--begin::Icon-->
																<div class="nav-icon mb-3">
																	<i class="ki-outline ki-truck fs-1 p-0"></i>
																</div>
																<!--end::Icon-->
																<!--begin::Title-->
																<span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Van</span>
																<!--end::Title-->
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
																<!--end::Bullet-->
															</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
														<!--begin::Item-->
														<li class="nav-item mb-3 me-3 me-lg-6">
															<!--begin::Link-->
															<a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" data-bs-toggle="pill" id="kt_charts_widget_32_tab_2" href="#kt_charts_widget_32_tab_content_2">
																<!--begin::Icon-->
																<div class="nav-icon mb-3">
																	<i class="ki-outline ki-bus fs-1 p-0"></i>
																</div>
																<!--end::Icon-->
																<!--begin::Title-->
																<span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Train</span>
																<!--end::Title-->
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
																<!--end::Bullet-->
															</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
														<!--begin::Item-->
														<li class="nav-item mb-3 me-3 me-lg-6">
															<!--begin::Link-->
															<a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" data-bs-toggle="pill" id="kt_charts_widget_32_tab_3" href="#kt_charts_widget_32_tab_content_3">
																<!--begin::Icon-->
																<div class="nav-icon mb-3">
																	<i class="ki-outline ki-car fs-1 p-0"></i>
																</div>
																<!--end::Icon-->
																<!--begin::Title-->
																<span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Car</span>
																<!--end::Title-->
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
																<!--end::Bullet-->
															</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
													</ul>
													<!--end::Nav-->
													<!--begin::Tab Content-->
													<div class="tab-content ps-4 pe-6">
														<!--begin::Tap pane-->
														<div class="tab-pane fade active show" id="kt_charts_widget_32_tab_content_1">
															<!--begin::Chart-->
															<div id="kt_charts_widget_32_chart_1" class="min-h-auto" style="height: 375px"></div>
															<!--end::Chart-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_charts_widget_32_tab_content_2">
															<!--begin::Chart-->
															<div id="kt_charts_widget_32_chart_2" class="min-h-auto" style="height: 375px"></div>
															<!--end::Chart-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_charts_widget_32_tab_content_3">
															<!--begin::Chart-->
															<div id="kt_charts_widget_32_chart_3" class="min-h-auto" style="height: 375px"></div>
															<!--end::Chart-->
														</div>
														<!--end::Tap pane-->
													</div>
													<!--end::Tab Content-->
												</div>
												<!--end: Card Body-->
											</div>
											<!--end::Chart widget 32-->
										</div>
										<!--end::Col-->

										
										<!--end::Header-->
										<!--begin::Body-->
										
										<!--begin::Body-->
									</div>
									
									
									
									
									<!--end::Row-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
						<!--begin::Footer-->
						
						<!--end::Footer-->
					</div>
					<!--end:::Main-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::App-->
	
	
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<i class="ki-duotone ki-arrow-up">
				<span class="path1"></span>
				<span class="path2"></span>
			</i>
		</div>
	
		<div class="modal fade" tabindex="-1" id="kt_modal_1">
    		<div class="modal-dialog">
							<div class="modal-content">
							<div class="modal-header">
								<h3 class="modal-title">Ai Tahmin</h3>

								<!--begin::Close-->
								<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
									<i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
								</div>
								<!--end::Close-->
							</div>

							<div class="modal-body">
							<div class="loader"><div class="typewriter ">
					<div class="slide"><i></i></div>
					<div class="paper"></div>
					<div class="keyboard"></div>
				</div></div>
			
		
                <pre id="response" class="modal-body" style="width:100%;height:100%;white-space: pre-wrap;word-wrap: break-word;overflow-wrap: break-word;font-family: Inter, Helvetica, sans-serif; "></pre>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Kapat</button>
    
            </div>
        </div>
		<script>
					// Tüm butonları seç
var buttons = document.querySelectorAll(".kt_button_class");

// Her butona tıklama olay dinleyicisi ekle
buttons.forEach(function(button) {
  button.addEventListener("click", function(event) {
	var loaders = document.getElementsByClassName('loader');
    // Tıklanan butonu al

    // #response içeriğini temizle
    $('#response').empty();

    // .loader div'inin display özelliğini block yap
    $('.loader').css('display', 'flex');
    var clickedButton = event.target;

    // Butona ait data-table ve data-time özniteliklerini al
    var dataTable = clickedButton.getAttribute("data-table");
    var dataTime = clickedButton.getAttribute("data-time");
	var dataName = clickedButton.getAttribute("data-name");
    var dataType = "button";

    // AJAX isteği gönder
    $.ajax({
      url: 'gpt.php', // PHP dosyanızın adı
      type: 'POST',
      data: { table: dataTable, dataTime: dataTime, dataType: dataType,dataName: dataName },
      success: function(response) {
        $('#response').html(response);
        // İndikatörü devre dışı bırak
        $('.loader').css('display', 'none');
    
      },
      error: function(error) {
        $('#response').html('Bir hata oluştu.');
        $('.loader').css('display', 'none');
      
      }
    });

  
  });
});

															</script>
	
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<script src="assets/plugins/custom/vis-timeline/vis-timeline.bundle.js"></script>
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<script src="assets/plugins/custom/vis-timeline/vis-timeline.bundle.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="assets/js/widgets.bundle.js"></script>
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="assets/js/custom/utilities/modals/users-search.js"></script>
		<!--end::Custom Javascript-->
		<script>
		var KTChartsWidget27 = function() {
	var e = {
			self: null,
			rendered: !1
		},
		t = function(e) {
			var t = document.getElementById("kt_charts_widget_27");
			if (t) {
				var a = KTUtil.getCssVariableValue("--bs-gray-800"),
					l = KTUtil.getCssVariableValue("--bs-border-dashed-color"),
					r = {
						series: [{
							name: "Sessions",
							data: product 
						}],
						chart: {
							fontFamily: "inherit",
							type: "bar",
							height: 350,
							toolbar: {
								show: !1
							}, events: {
                dataPointSelection: function(event, chartContext, config) {
                    // Tıklanan veri noktası indexini ve seriyi al
                    var seriesIndex = config.seriesIndex;
                    var dataPointIndex = config.dataPointIndex;

              

                    // İlgili sayfaya yönlendir
                    window.location.href = urls[dataPointIndex];
                }
            }
						},
						plotOptions: {
							bar: {
								borderRadius: 8,
								horizontal: !0,
								distributed: !0,
								barHeight: 50,
								dataLabels: {
									position: "bottom"
								}
							}
						},
						dataLabels: {
							enabled: !0,
							textAnchor: "start",
							offsetX: 0,
							formatter: function(e, t) {
								e = e;
								return wNumb({
									thousand: "."
								}).to(e)
							},
							style: {
								fontSize: "14px",
								fontWeight: "600",
								align: "left"
							}
						},
						legend: {
							show: !1
						},
						colors: color,
						xaxis: {
							categories: ctg,
							labels: {
								formatter: function(e) {
									return e 
								},
								style: {
									colors: a,
									fontSize: "14px",
									fontWeight: "600",
									align: "left"
								}
							},
							axisBorder: {
								show: !1
							}
						},
						yaxis: {
							labels: {
								formatter: function(e) {
									return Number.isInteger(e) ? e + " - " + parseInt(100 * e / 18).toString() + "%" : e
								},
								style: {
									colors: a,
									fontSize: "14px",
									fontWeight: "600"
								},
								offsetY: 2,
								align: "left"
							}
						},
						grid: {
							borderColor: l,
							xaxis: {
								lines: {
									show: !0
								}
							},
							yaxis: {
								lines: {
									show: !1
								}
							},
							strokeDashArray: 4
						},
						tooltip: {
							style: {
								fontSize: "12px"
							},
							y: {
								formatter: function(e) {
									return e
								}
							}
						}
					};
				e.self = new ApexCharts(t, r), setTimeout((function() {
					e.self.render(), e.rendered = !0
				}), 200)
			}
		};
	return {
		init: function() {
			t(e), KTThemeMode.on("kt.thememode.change", (function() {
				e.rendered && e.self.destroy(), t(e)
			}))
		}
	}
}();
"undefined" != typeof module && (module.exports = KTChartsWidget27), KTUtil.onDOMContentLoaded((function() {
	KTChartsWidget27.init()
}));

		</script>

		<script>
		
var KTChartsWidget17 = {
    init: function() {
        ! function() {
            if ("undefined" != typeof am5) {
                var e = document.getElementById("kt_charts_widget_17_chart");
                if (e) {
                    var t, a = function() {
                        (t = am5.Root.new(e)).setThemes([am5themes_Animated.new(t)]);
                        var chart = am5percent.PieChart.new(t, {
                            startAngle: 180,
                            endAngle: 360,
                            layout: t.verticalLayout,
                            innerRadius: am5.percent(50)
                        });
                        t.container.children.push(chart);

                        var series = am5percent.PieSeries.new(t, {
                            startAngle: 180,
                            endAngle: 360,
                            valueField: "value",
                            categoryField: "category",
                            alignLabels: !1
                        });
                        chart.series.push(series);

                        series.labels.template.setAll({
                            fontWeight: "400",
                            fontSize: 13,
                            fill: am5.color(KTUtil.getCssVariableValue("--bs-gray-500"))
                        });

                        series.states.create("hidden", {
                            startAngle: 180,
                            endAngle: 180
                        });

                        series.slices.template.setAll({
                            cornerRadius: 5
                        });

                        series.ticks.template.setAll({
                            forceHidden: !0
                        });

                        // Verileri doldur
                        series.data.setAll(veriler);
				
						series.slices.template.events.on("click", function(ev) {
							alert("Tıklandı");
							var id = ev.target.dataItem.dataContext.id; // Ürün kategorisi
							// Ürün sayfasını açmak için yapılacak işlem
							window.location.href = "products.php?id=" + id; // Örneğin, /urun/urun_no şeklinde bir URL yapısı kullanılabilir
						});
                        chart.appear(1e3, 100);
						
                    };

                    am5.ready((function() {
                        a()
                    }));

                    KTThemeMode.on("kt.thememode.change", (function() {
                        t.dispose(), a()
                    }));
                }
            }
        }()
    }
};

// Eğer modül varsa dışa aktar
"undefined" != typeof module && (module.exports = KTChartsWidget17);

// Sayfa yüklendiğinde başlat
KTUtil.onDOMContentLoaded((function() {
    KTChartsWidget17.init();
}));

</script>
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>