<?php 
include('../php/settings.php');
if (!isset($_SESSION['login'])) {
	$pageName = $_SERVER['REQUEST_URI'];
	header('Location: ../index.php?redirect='.$pageName);
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="../"/>
		<title>Grafik 3</title>
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
				
				<!--end::Header-->
				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					
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
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
									<!--begin::Row-->
									<div class="row g-5 g-xl-10 mb-xl-10">
										<div class="col-md-4 col-lg-4 col-xl-4 col-xxl-4 mb-md-8 mb-xl-10">
										
											
											<!--begin::Card widget 3-->
											<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #F1416C;background-image:url('assets/media/svg/shapes/wave-bg-red.svg')">
												<!--begin::Header-->
												<div class="card-header pt-5 mb-3">
													<!--begin::Icon-->
													<div class="d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #F1416C">
														<i class="ki-outline ki-call text-white fs-2qx lh-0"></i>
													</div>
													<!--end::Icon-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body d-flex align-items-end mb-3">
													<!--begin::Info-->
													<div class="d-flex align-items-center">
														<span class="fs-4hx text-white fw-bold me-6">1.2k</span>
														<div class="fw-bold fs-6 text-white">
															<span class="d-block">Inbound</span>
															<span class="">Calls</span>
														</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::Card body-->
												<!--begin::Card footer-->
												<div class="card-footer" style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
													<!--begin::Progress-->
													<div class="fw-bold text-white py-2">
														<span class="fs-1 d-block">935</span>
														<span class="opacity-50">Problems Solved</span>
													</div>
													<!--end::Progress-->
												</div>
												<!--end::Card footer-->
											</div>
											<!--end::Card widget 3-->
										
									
										</div>			
										<div class="col-md-4 col-lg-4 col-xl-4 col-xxl-4 mb-md-8 mb-xl-10">
										
											
										<!--begin::Card widget 3-->
										<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #7239EA;background-image:url('assets/media/svg/shapes/wave-bg-purple.svg')">
											<!--begin::Header-->
											<div class="card-header pt-5 mb-3">
												<!--begin::Icon-->
												<div class="d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #7239EA">
													<i class="ki-outline ki-call text-white fs-2qx lh-0"></i>
												</div>
												<!--end::Icon-->
											</div>
											<!--end::Header-->
											<!--begin::Card body-->
											<div class="card-body d-flex align-items-end mb-3">
												<!--begin::Info-->
												<div class="d-flex align-items-center">
													<span class="fs-4hx text-white fw-bold me-6">1.2k</span>
													<div class="fw-bold fs-6 text-white">
														<span class="d-block">Inbound</span>
														<span class="">Calls</span>
													</div>
												</div>
												<!--end::Info-->
											</div>
											<!--end::Card body-->
											<!--begin::Card footer-->
											<div class="card-footer" style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
												<!--begin::Progress-->
												<div class="fw-bold text-white py-2">
													<span class="fs-1 d-block">935</span>
													<span class="opacity-50">Problems Solved</span>
												</div>
												<!--end::Progress-->
											</div>
											<!--end::Card footer-->
										</div>
										<!--end::Card widget 3-->
									
								
									</div>		

									<div class="col-md-4 col-lg-4 col-xl-4 col-xxl-4 mb-md-8 mb-xl-10">
										
											
										<!--begin::Card widget 3-->
										<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #F1416C;background-image:url('assets/media/svg/shapes/wave-bg-red.svg')">
											<!--begin::Header-->
											<div class="card-header pt-5 mb-3">
												<!--begin::Icon-->
												<div class="d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #F1416C">
													<i class="ki-outline ki-call text-white fs-2qx lh-0"></i>
												</div>
												<!--end::Icon-->
											</div>
											<!--end::Header-->
											<!--begin::Card body-->
											<div class="card-body d-flex align-items-end mb-3">
												<!--begin::Info-->
												<div class="d-flex align-items-center">
													<span class="fs-4hx text-white fw-bold me-6">1.2k</span>
													<div class="fw-bold fs-6 text-white">
														<span class="d-block">Inbound</span>
														<span class="">Calls</span>
													</div>
												</div>
												<!--end::Info-->
											</div>
											<!--end::Card body-->
											<!--begin::Card footer-->
											<div class="card-footer" style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
												<!--begin::Progress-->
												<div class="fw-bold text-white py-2">
													<span class="fs-1 d-block">935</span>
													<span class="opacity-50">Problems Solved</span>
												</div>
												<!--end::Progress-->
											</div>
											<!--end::Card footer-->
										</div>
										<!--end::Card widget 3-->
									
								
									</div>	
									
									<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
										<!--begin::Col-->
										<div class="col-xxl-8">
											<!--begin::Chart widget 22-->
											<div class="card h-xl-100">
												<!--begin::Header-->
												<div class="card-header position-relative py-0 border-bottom-2">
													<!--begin::Nav-->
													<ul class="nav nav-stretch nav-pills nav-pills-custom d-flex mt-3">
														<!--begin::Item-->
														<li class="nav-item p-0 ms-0 me-8">
															<!--begin::Link-->
															<a class="nav-link btn btn-color-muted active px-0" data-bs-toggle="tab" id="kt_chart_widgets_22_tab_1" href="#kt_chart_widgets_22_tab_content_1">
																<!--begin::Subtitle-->
																<span class="nav-text fw-semibold fs-4 mb-3">Overview</span>
																<!--end::Subtitle-->
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute z-index-2 w-100 h-2px top-100 bottom-n100 bg-primary rounded"></span>
																<!--end::Bullet-->
															</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
														<!--begin::Item-->
														<li class="nav-item p-0 ms-0">
															<!--begin::Link-->
															<a class="nav-link btn btn-color-muted px-0" data-bs-toggle="tab" id="kt_chart_widgets_22_tab_2" href="#kt_chart_widgets_22_tab_content_2">
																<!--begin::Subtitle-->
																<span class="nav-text fw-semibold fs-4 mb-3">Performance</span>
																<!--end::Subtitle-->
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute z-index-2 w-100 h-2px top-100 bottom-n100 bg-primary rounded"></span>
																<!--end::Bullet-->
															</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
													</ul>
													<!--end::Nav-->
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
												<div class="card-body pb-3">
													<!--begin::Tab Content-->
													<div class="tab-content">
														<!--begin::Tap pane-->
														<div class="tab-pane fade show active" id="kt_chart_widgets_22_tab_content_1">
															<!--begin::Wrapper-->
															<div class="d-flex flex-wrap flex-md-nowrap">
																<!--begin::Items-->
																<div class="me-md-5 w-100">
																	<!--begin::Item-->
																	<div class="d-flex border border-gray-300 border-dashed rounded p-6 mb-6">
																		<!--begin::Block-->
																		<div class="d-flex align-items-center flex-grow-1 me-2 me-sm-5">
																			<!--begin::Symbol-->
																			<div class="symbol symbol-50px me-4">
																				<span class="symbol-label">
																					<i class="ki-outline ki-timer fs-2qx text-primary"></i>
																				</span>
																			</div>
																			<!--end::Symbol-->
																			<!--begin::Section-->
																			<div class="me-2">
																				<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Attendance</a>
																				<span class="text-gray-400 fw-bold d-block fs-7">Great, you always attending class. keep it up</span>
																			</div>
																			<!--end::Section-->
																		</div>
																		<!--end::Block-->
																		<!--begin::Info-->
																		<div class="d-flex align-items-center">
																			<span class="text-dark fw-bolder fs-2x">73</span>
																			<span class="fw-semibold fs-2 text-gray-600 mx-1 pt-1">/</span>
																			<span class="text-gray-600 fw-semibold fs-2 me-3 pt-2">76</span>
																			<span class="badge badge-lg badge-light-success align-self-center px-2">95%</span>
																		</div>
																		<!--end::Info-->
																	</div>
																	<!--end::Item-->
																	<!--begin::Item-->
																	<div class="d-flex border border-gray-300 border-dashed rounded p-6 mb-6">
																		<!--begin::Block-->
																		<div class="d-flex align-items-center flex-grow-1 me-2 me-sm-5">
																			<!--begin::Symbol-->
																			<div class="symbol symbol-50px me-4">
																				<span class="symbol-label">
																					<i class="ki-outline ki-element-11 fs-2qx text-primary"></i>
																				</span>
																			</div>
																			<!--end::Symbol-->
																			<!--begin::Section-->
																			<div class="me-2">
																				<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Homeworks</a>
																				<span class="text-gray-400 fw-bold d-block fs-7">Don’t forget to turn in your task</span>
																			</div>
																			<!--end::Section-->
																		</div>
																		<!--end::Block-->
																		<!--begin::Info-->
																		<div class="d-flex align-items-center">
																			<span class="text-dark fw-bolder fs-2x">207</span>
																			<span class="fw-semibold fs-2 text-gray-600 mx-1 pt-1">/</span>
																			<span class="text-gray-600 fw-semibold fs-2 me-3 pt-2">214</span>
																			<span class="badge badge-lg badge-light-success align-self-center px-2">92%</span>
																		</div>
																		<!--end::Info-->
																	</div>
																	<!--end::Item-->
																	<!--begin::Item-->
																	<div class="d-flex border border-gray-300 border-dashed rounded p-6 mb-6">
																		<!--begin::Block-->
																		<div class="d-flex align-items-center flex-grow-1 me-2 me-sm-5">
																			<!--begin::Symbol-->
																			<div class="symbol symbol-50px me-4">
																				<span class="symbol-label">
																					<i class="ki-outline ki-abstract-24 fs-2qx text-primary"></i>
																				</span>
																			</div>
																			<!--end::Symbol-->
																			<!--begin::Section-->
																			<div class="me-2">
																				<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Tests</a>
																				<span class="text-gray-400 fw-bold d-block fs-7">You take 12 subjects at this semester</span>
																			</div>
																			<!--end::Section-->
																		</div>
																		<!--end::Block-->
																		<!--begin::Info-->
																		<div class="d-flex align-items-center">
																			<span class="text-dark fw-bolder fs-2x">27</span>
																			<span class="fw-semibold fs-2 text-gray-600 mx-1 pt-1">/</span>
																			<span class="text-gray-600 fw-semibold fs-2 me-3 pt-2">38</span>
																			<span class="badge badge-lg badge-light-warning align-self-center px-2">80%</span>
																		</div>
																		<!--end::Info-->
																	</div>
																	<!--end::Item-->
																</div>
																<!--end::Items-->
																<!--begin::Container-->
																<div class="d-flex justify-content-between flex-column w-225px w-md-600px mx-auto mx-md-0 pt-3 pb-10">
																	<!--begin::Title-->
																	<div class="fs-4 fw-bold text-gray-900 text-center mb-5">Session Attendance
																	<br />for Current Academic Year</div>
																	<!--end::Title-->
																	<!--begin::Chart-->
																	<div id="kt_chart_widgets_22_chart_1" class="mx-auto mb-4"></div>
																	<!--end::Chart-->
																	<!--begin::Labels-->
																	<div class="mx-auto">
																		<!--begin::Label-->
																		<div class="d-flex align-items-center mb-2">
																			<!--begin::Bullet-->
																			<div class="bullet bullet-dot w-8px h-7px bg-success me-2"></div>
																			<!--end::Bullet-->
																			<!--begin::Label-->
																			<div class="fs-8 fw-semibold text-muted">Precent(133)</div>
																			<!--end::Label-->
																		</div>
																		<!--end::Label-->
																		<!--begin::Label-->
																		<div class="d-flex align-items-center mb-2">
																			<!--begin::Bullet-->
																			<div class="bullet bullet-dot w-8px h-7px bg-primary me-2"></div>
																			<!--end::Bullet-->
																			<!--begin::Label-->
																			<div class="fs-8 fw-semibold text-muted">Illness(9)</div>
																			<!--end::Label-->
																		</div>
																		<!--end::Label-->
																		<!--begin::Label-->
																		<div class="d-flex align-items-center mb-2">
																			<!--begin::Bullet-->
																			<div class="bullet bullet-dot w-8px h-7px bg-info me-2"></div>
																			<!--end::Bullet-->
																			<!--begin::Label-->
																			<div class="fs-8 fw-semibold text-muted">Late(2)</div>
																			<!--end::Label-->
																		</div>
																		<!--end::Label-->
																		<!--begin::Label-->
																		<div class="d-flex align-items-center mb-2">
																			<!--begin::Bullet-->
																			<div class="bullet bullet-dot w-8px h-7px bg-danger me-2"></div>
																			<!--end::Bullet-->
																			<!--begin::Label-->
																			<div class="fs-8 fw-semibold text-muted">Absent(3)</div>
																			<!--end::Label-->
																		</div>
																		<!--end::Label-->
																	</div>
																	<!--end::Labels-->
																</div>
																<!--end::Container-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_chart_widgets_22_tab_content_2">
															<!--begin::Wrapper-->
															<div class="d-flex flex-wrap flex-md-nowrap">
																<!--begin::Items-->
																<div class="me-md-5 w-100">
																	<!--begin::Item-->
																	<div class="d-flex border border-gray-300 border-dashed rounded p-6 mb-6">
																		<!--begin::Block-->
																		<div class="d-flex align-items-center flex-grow-1 me-2 me-sm-5">
																			<!--begin::Symbol-->
																			<div class="symbol symbol-50px me-4">
																				<span class="symbol-label">
																					<i class="ki-outline ki-element-11 fs-2qx text-primary"></i>
																				</span>
																			</div>
																			<!--end::Symbol-->
																			<!--begin::Section-->
																			<div class="me-2">
																				<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Homeworks</a>
																				<span class="text-gray-400 fw-bold d-block fs-7">Don’t forget to turn in your task</span>
																			</div>
																			<!--end::Section-->
																		</div>
																		<!--end::Block-->
																		<!--begin::Info-->
																		<div class="d-flex align-items-center">
																			<span class="text-dark fw-bolder fs-2x">423</span>
																			<span class="fw-semibold fs-2 text-gray-600 mx-1 pt-1">/</span>
																			<span class="text-gray-600 fw-semibold fs-2 me-3 pt-2">154</span>
																			<span class="badge badge-lg badge-light-danger align-self-center px-2">74%</span>
																		</div>
																		<!--end::Info-->
																	</div>
																	<!--end::Item-->
																	<!--begin::Item-->
																	<div class="d-flex border border-gray-300 border-dashed rounded p-6 mb-6">
																		<!--begin::Block-->
																		<div class="d-flex align-items-center flex-grow-1 me-2 me-sm-5">
																			<!--begin::Symbol-->
																			<div class="symbol symbol-50px me-4">
																				<span class="symbol-label">
																					<i class="ki-outline ki-abstract-24 fs-2qx text-primary"></i>
																				</span>
																			</div>
																			<!--end::Symbol-->
																			<!--begin::Section-->
																			<div class="me-2">
																				<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Tests</a>
																				<span class="text-gray-400 fw-bold d-block fs-7">You take 12 subjects at this semester</span>
																			</div>
																			<!--end::Section-->
																		</div>
																		<!--end::Block-->
																		<!--begin::Info-->
																		<div class="d-flex align-items-center">
																			<span class="text-dark fw-bolder fs-2x">43</span>
																			<span class="fw-semibold fs-2 text-gray-600 mx-1 pt-1">/</span>
																			<span class="text-gray-600 fw-semibold fs-2 me-3 pt-2">53</span>
																			<span class="badge badge-lg badge-light-info align-self-center px-2">65%</span>
																		</div>
																		<!--end::Info-->
																	</div>
																	<!--end::Item-->
																	<!--begin::Item-->
																	<div class="d-flex border border-gray-300 border-dashed rounded p-6 mb-6">
																		<!--begin::Block-->
																		<div class="d-flex align-items-center flex-grow-1 me-2 me-sm-5">
																			<!--begin::Symbol-->
																			<div class="symbol symbol-50px me-4">
																				<span class="symbol-label">
																					<i class="ki-outline ki-timer fs-2qx text-primary"></i>
																				</span>
																			</div>
																			<!--end::Symbol-->
																			<!--begin::Section-->
																			<div class="me-2">
																				<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Attendance</a>
																				<span class="text-gray-400 fw-bold d-block fs-7">Great, you always attending class. keep it up</span>
																			</div>
																			<!--end::Section-->
																		</div>
																		<!--end::Block-->
																		<!--begin::Info-->
																		<div class="d-flex align-items-center">
																			<span class="text-dark fw-bolder fs-2x">53</span>
																			<span class="fw-semibold fs-2 text-gray-600 mx-1 pt-1">/</span>
																			<span class="text-gray-600 fw-semibold fs-2 me-3 pt-2">94</span>
																			<span class="badge badge-lg badge-light-primary align-self-center px-2">87%</span>
																		</div>
																		<!--end::Info-->
																	</div>
																	<!--end::Item-->
																</div>
																<!--end::Items-->
																<!--begin::Container-->
																<div class="d-flex justify-content-between flex-column w-225px w-md-600px mx-auto mx-md-0 pt-3 pb-10">
																	<!--begin::Title-->
																	<div class="fs-4 fw-bold text-gray-900 text-center mb-5">Session Attendance
																	<br />for Current Academic Year</div>
																	<!--end::Title-->
																	<!--begin::Chart-->
																	<div id="kt_chart_widgets_22_chart_2" class="mx-auto mb-4"></div>
																	<!--end::Chart-->
																	<!--begin::Labels-->
																	<div class="mx-auto">
																		<!--begin::Label-->
																		<div class="d-flex align-items-center mb-2">
																			<!--begin::Bullet-->
																			<div class="bullet bullet-dot w-8px h-7px bg-success me-2"></div>
																			<!--end::Bullet-->
																			<!--begin::Label-->
																			<div class="fs-8 fw-semibold text-muted">Precent(133)</div>
																			<!--end::Label-->
																		</div>
																		<!--end::Label-->
																		<!--begin::Label-->
																		<div class="d-flex align-items-center mb-2">
																			<!--begin::Bullet-->
																			<div class="bullet bullet-dot w-8px h-7px bg-primary me-2"></div>
																			<!--end::Bullet-->
																			<!--begin::Label-->
																			<div class="fs-8 fw-semibold text-muted">Illness(9)</div>
																			<!--end::Label-->
																		</div>
																		<!--end::Label-->
																		<!--begin::Label-->
																		<div class="d-flex align-items-center mb-2">
																			<!--begin::Bullet-->
																			<div class="bullet bullet-dot w-8px h-7px bg-info me-2"></div>
																			<!--end::Bullet-->
																			<!--begin::Label-->
																			<div class="fs-8 fw-semibold text-muted">Late(2)</div>
																			<!--end::Label-->
																		</div>
																		<!--end::Label-->
																		<!--begin::Label-->
																		<div class="d-flex align-items-center mb-2">
																			<!--begin::Bullet-->
																			<div class="bullet bullet-dot w-8px h-7px bg-danger me-2"></div>
																			<!--end::Bullet-->
																			<!--begin::Label-->
																			<div class="fs-8 fw-semibold text-muted">Absent(3)</div>
																			<!--end::Label-->
																		</div>
																		<!--end::Label-->
																	</div>
																	<!--end::Labels-->
																</div>
																<!--end::Container-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Tap pane-->
													</div>
													<!--end::Tab Content-->
												</div>
												<!--end: Card Body-->
											</div>
											<!--end::Chart widget 22-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xxl-4">
											<!--begin::Slider Widget 3-->
											<div id="kt_sliders_widget_3_slider" class="card card-flush carousel slide h-xl-100" data-bs-ride="carousel" data-bs-interval="5000">
												<!--begin::Header-->
												<div class="card-header pt-5 mb-5">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-dark">Academic Performance</span>
														<span class="text-gray-400 mt-1 fw-semibold fs-7">Avg. 72% completed lessons</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<div class="d-flex justify-content-end">
															<a href="#kt_sliders_widget_3_slider" class="carousel-control-prev position-relative me-5 active" role="button" data-bs-slide="prev">
																<i class="ki-outline ki-left-square fs-2x text-gray-400"></i>
															</a>
															<a href="#kt_sliders_widget_3_slider" class="carousel-control-next position-relative me-1" role="button" data-bs-slide="next">
																<i class="ki-outline ki-right-square fs-2x text-gray-400"></i>
															</a>
														</div>
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body p-0">
													<!--begin::Carousel-->
													<div class="carousel-inner">
														<!--begin::Item-->
														<div class="carousel-item active show">
															<!--begin::Title-->
															<span class="text-gray-800 fw-bold fs-4 mb-3 px-8">Chemistry</span>
															<!--end::Title-->
															<!--begin::Statistics-->
															<div class="d-flex align-items-center w-100 px-8">
																<!--begin::Number-->
																<span class="fs-2qx text-gray-800 fw-bold">6</span>
																<!--end::Number-->
																<!--begin::Progress-->
																<div class="progress h-6px w-100 mx-3 bg-light-primary">
																	<div class="progress-bar bg-primary" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
																<!--end::Progress-->
																<!--begin::Value-->
																<span class="text-gray-400 fw-bold fs-4">62%</span>
																<!--end::Value-->
															</div>
															<!--end::Statistics-->
															<!--begin::Chart-->
															<div id="kt_sliders_widget_3_chart_1" class="min-h-auto ps-4 pe-6" style="height: 330px"></div>
															<!--end::Chart-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="carousel-item">
															<!--begin::Title-->
															<span class="text-gray-800 fw-bold fs-4 mb-3 px-8">Mathematics</span>
															<!--end::Title-->
															<!--begin::Statistics-->
															<div class="d-flex align-items-center w-100 px-8">
																<!--begin::Number-->
																<span class="fs-2qx text-gray-800 fw-bold">4</span>
																<!--end::Number-->
																<!--begin::Progress-->
																<div class="progress h-6px w-100 mx-3 bg-light-danger">
																	<div class="progress-bar bg-danger" role="progressbar" style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
																<!--end::Progress-->
																<!--begin::Value-->
																<span class="text-gray-400 fw-bold fs-4">73%</span>
																<!--end::Value-->
															</div>
															<!--end::Statistics-->
															<!--begin::Chart-->
															<div id="kt_sliders_widget_3_chart_2" class="min-h-auto ps-4 pe-6" style="height: 330px"></div>
															<!--end::Chart-->
														</div>
														<!--end::Item-->
													</div>
													<!--end::Carousel-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Slider Widget 3-->
										</div>
										<!--end::Col-->
									</div>
									<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
										<div class="col-xl-4">
											<!--begin::Mixed Widget 3-->
											<div class="card card-xl-stretch mb-xl-8">
												<!--begin::Beader-->
												<div class="card-header border-0 py-5">
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold fs-3 mb-1">Sales Overview</span>
														<span class="text-muted fw-semibold fs-7">Recent sales statistics</span>
													</h3>
													<div class="card-toolbar">
														<!--begin::Menu-->
														<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
															<i class="ki-outline ki-category fs-6"></i>
														</button>
														<!--begin::Menu 1-->
														<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b77c127aeed">
															<!--begin::Header-->
															<div class="px-7 py-5">
																<div class="fs-5 text-dark fw-bold">Filter Options</div>
															</div>
															<!--end::Header-->
															<!--begin::Menu separator-->
															<div class="separator border-gray-200"></div>
															<!--end::Menu separator-->
															<!--begin::Form-->
															<div class="px-7 py-5">
																<!--begin::Input group-->
																<div class="mb-10">
																	<!--begin::Label-->
																	<label class="form-label fw-semibold">Status:</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<div>
																		<select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_64b77c127aeed" data-allow-clear="true">
																			<option></option>
																			<option value="1">Approved</option>
																			<option value="2">Pending</option>
																			<option value="2">In Process</option>
																			<option value="2">Rejected</option>
																		</select>
																	</div>
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="mb-10">
																	<!--begin::Label-->
																	<label class="form-label fw-semibold">Member Type:</label>
																	<!--end::Label-->
																	<!--begin::Options-->
																	<div class="d-flex">
																		<!--begin::Options-->
																		<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
																			<input class="form-check-input" type="checkbox" value="1" />
																			<span class="form-check-label">Author</span>
																		</label>
																		<!--end::Options-->
																		<!--begin::Options-->
																		<label class="form-check form-check-sm form-check-custom form-check-solid">
																			<input class="form-check-input" type="checkbox" value="2" checked="checked" />
																			<span class="form-check-label">Customer</span>
																		</label>
																		<!--end::Options-->
																	</div>
																	<!--end::Options-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="mb-10">
																	<!--begin::Label-->
																	<label class="form-label fw-semibold">Notifications:</label>
																	<!--end::Label-->
																	<!--begin::Switch-->
																	<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																		<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
																		<label class="form-check-label">Enabled</label>
																	</div>
																	<!--end::Switch-->
																</div>
																<!--end::Input group-->
																<!--begin::Actions-->
																<div class="d-flex justify-content-end">
																	<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
																	<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
																</div>
																<!--end::Actions-->
															</div>
															<!--end::Form-->
														</div>
														<!--end::Menu 1-->
														<!--end::Menu-->
													</div>
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body p-0 d-flex flex-column">
													<!--begin::Stats-->
													<div class="card-p pt-5 bg-body flex-grow-1">
														<!--begin::Row-->
														<div class="row g-0">
															<!--begin::Col-->
															<div class="col mr-8">
																<!--begin::Label-->
																<div class="fs-7 text-muted fw-bold">Average Sale</div>
																<!--end::Label-->
																<!--begin::Stat-->
																<div class="d-flex align-items-center">
																	<div class="fs-4 fw-bold">$650</div>
																	<i class="ki-outline ki-arrow-up fs-5 text-success ms-1"></i>
																</div>
																<!--end::Stat-->
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col">
																<!--begin::Label-->
																<div class="fs-7 text-muted fw-bold">Commission</div>
																<!--end::Label-->
																<!--begin::Stat-->
																<div class="fs-4 fw-bold">$233,600</div>
																<!--end::Stat-->
															</div>
															<!--end::Col-->
														</div>
														<!--end::Row-->
														<!--begin::Row-->
														<div class="row g-0 mt-8">
															<!--begin::Col-->
															<div class="col mr-8">
																<!--begin::Label-->
																<div class="fs-7 text-muted fw-bold">Annual Taxes 2019</div>
																<!--end::Label-->
																<!--begin::Stat-->
																<div class="fs-4 fw-bold">$29,004</div>
																<!--end::Stat-->
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col">
																<!--begin::Label-->
																<div class="fs-7 text-muted fw-bold">Annual Income</div>
																<!--end::Label-->
																<!--begin::Stat-->
																<div class="d-flex align-items-center">
																	<div class="fs-4 fw-bold">$1,480,00</div>
																	<i class="ki-outline ki-arrow-down fs-5 text-danger ms-1"></i>
																</div>
																<!--end::Stat-->
															</div>
															<!--end::Col-->
														</div>
														<!--end::Row-->
													</div>
													<!--end::Stats-->
													<!--begin::Chart-->
													<div class="mixed-widget-3-chart card-rounded-bottom" data-kt-chart-color="primary" style="height: 150px"></div>
													<!--end::Chart-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Mixed Widget 3-->
										</div>
										<div class="col-xl-4">
											<!--begin::Mixed Widget 4-->
											<div class="card card-xl-stretch mb-xl-8">
												<!--begin::Beader-->
												<div class="card-header border-0 py-5">
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold fs-3 mb-1">Action Needed</span>
														<span class="text-muted fw-semibold fs-7">Complete your profile setup</span>
													</h3>
													<div class="card-toolbar">
														<!--begin::Menu-->
														<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
															<i class="ki-outline ki-category fs-6"></i>
														</button>
														<!--begin::Menu 1-->
														<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b77c127af7b">
															<!--begin::Header-->
															<div class="px-7 py-5">
																<div class="fs-5 text-dark fw-bold">Filter Options</div>
															</div>
															<!--end::Header-->
															<!--begin::Menu separator-->
															<div class="separator border-gray-200"></div>
															<!--end::Menu separator-->
															<!--begin::Form-->
															<div class="px-7 py-5">
																<!--begin::Input group-->
																<div class="mb-10">
																	<!--begin::Label-->
																	<label class="form-label fw-semibold">Status:</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<div>
																		<select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_64b77c127af7b" data-allow-clear="true">
																			<option></option>
																			<option value="1">Approved</option>
																			<option value="2">Pending</option>
																			<option value="2">In Process</option>
																			<option value="2">Rejected</option>
																		</select>
																	</div>
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="mb-10">
																	<!--begin::Label-->
																	<label class="form-label fw-semibold">Member Type:</label>
																	<!--end::Label-->
																	<!--begin::Options-->
																	<div class="d-flex">
																		<!--begin::Options-->
																		<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
																			<input class="form-check-input" type="checkbox" value="1" />
																			<span class="form-check-label">Author</span>
																		</label>
																		<!--end::Options-->
																		<!--begin::Options-->
																		<label class="form-check form-check-sm form-check-custom form-check-solid">
																			<input class="form-check-input" type="checkbox" value="2" checked="checked" />
																			<span class="form-check-label">Customer</span>
																		</label>
																		<!--end::Options-->
																	</div>
																	<!--end::Options-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="mb-10">
																	<!--begin::Label-->
																	<label class="form-label fw-semibold">Notifications:</label>
																	<!--end::Label-->
																	<!--begin::Switch-->
																	<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																		<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
																		<label class="form-check-label">Enabled</label>
																	</div>
																	<!--end::Switch-->
																</div>
																<!--end::Input group-->
																<!--begin::Actions-->
																<div class="d-flex justify-content-end">
																	<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
																	<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
																</div>
																<!--end::Actions-->
															</div>
															<!--end::Form-->
														</div>
														<!--end::Menu 1-->
														<!--end::Menu-->
													</div>
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body d-flex flex-column">
													<div class="flex-grow-1">
														<div class="mixed-widget-4-chart" data-kt-chart-color="primary" style="height: 200px"></div>
													</div>
													<div class="pt-5">
														<p class="text-center fs-6 pb-5">
														<span class="badge badge-light-danger fs-8">Notes:</span>&nbsp; Current sprint requires stakeholders
														<br />to approve newly amended policies</p>
														<a href="#" class="btn btn-primary w-100 py-3">Take Action</a>
													</div>
												</div>
												<!--end::Body-->
											</div>
											<!--end::Mixed Widget 4-->
										</div>
										<div class="col-xl-4">
											<!--begin::Mixed Widget 17-->
											<div class="card card-xl-stretch mb-xl-8">
												<!--begin::Body-->
												<div class="card-body pt-5">
													<!--begin::Heading-->
													<div class="d-flex flex-stack">
														<!--begin::Title-->
														<h4 class="fw-bold text-gray-800 m-0">User Base</h4>
														<!--end::Title-->
														<!--begin::Menu-->
														<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
															<i class="ki-outline ki-category fs-6"></i>
														</button>
														<!--begin::Menu 3-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
															<!--begin::Heading-->
															<div class="menu-item px-3">
																<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
															</div>
															<!--end::Heading-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Create Invoice</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link flex-stack px-3">Create Payment
																<span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
																	<i class="ki-outline ki-information fs-6"></i>
																</span></a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Generate Bill</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
																<a href="#" class="menu-link px-3">
																	<span class="menu-title">Subscription</span>
																	<span class="menu-arrow"></span>
																</a>
																<!--begin::Menu sub-->
																<div class="menu-sub menu-sub-dropdown w-175px py-4">
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Plans</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Billing</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Statements</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu separator-->
																	<div class="separator my-2"></div>
																	<!--end::Menu separator-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<div class="menu-content px-3">
																			<!--begin::Switch-->
																			<label class="form-check form-switch form-check-custom form-check-solid">
																				<!--begin::Input-->
																				<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																				<!--end::Input-->
																				<!--end::Label-->
																				<span class="form-check-label text-muted fs-6">Recuring</span>
																				<!--end::Label-->
																			</label>
																			<!--end::Switch-->
																		</div>
																	</div>
																	<!--end::Menu item-->
																</div>
																<!--end::Menu sub-->
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3 my-1">
																<a href="#" class="menu-link px-3">Settings</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu 3-->
														<!--end::Menu-->
													</div>
													<!--end::Heading-->
													<!--begin::Chart-->
													<div class="d-flex flex-center w-100">
														<div class="mixed-widget-17-chart" data-kt-chart-color="primary" style="height: 300px"></div>
													</div>
													<!--end::Chart-->
													<!--begin::Content-->
													<div class="text-center w-100 position-relative z-index-1" style="margin-top: -130px">
														<!--begin::Text-->
														<p class="fw-semibold fs-4 text-gray-400 mb-6">Long before you sit down to put the
														<br />make sure you breathe</p>
														<!--end::Text-->
														<!--begin::Action-->
														<div class="mb-9 mb-xxl-1">
															<a href='#' class="btn btn-danger fw-semibold" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Increase Users</a>
														</div>
														<!--ed::Action-->
													</div>
													<!--end::Content-->
												</div>
												<!--end::Body-->
												<!--begin::Footer-->
												<div class="card-footer d-flex flex-center py-5">
													<!--begin::Item-->
													<div class="d-flex align-items-center flex-shrink-0 me-7 me-lg-12">
														<!--begin::Bullet-->
														<span class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
														<!--end::Bullet-->
														<!--begin::Label-->
														<span class="fw-semibold text-gray-400 fs-6">Amount X</span>
														<!--end::Label-->
													</div>
													<!--ed::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center flex-shrink-0">
														<!--begin::Bullet-->
														<span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
														<!--end::Bullet-->
														<!--begin::Label-->
														<span class="fw-semibold text-gray-400 fs-6">Amount Y</span>
														<!--end::Label-->
													</div>
													<!--ed::Item-->
												</div>
												<!--ed::Info-->
											</div>
											<!--end::Mixed Widget 17-->
										</div>
										</div>

										
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
		
		
		
		
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<i class="ki-duotone ki-arrow-up">
				<span class="path1"></span>
				<span class="path2"></span>
			</i>
		</div>
		<!--end::Scrolltop-->
		
		
		
		
		
		<!--end::Modal - Invite Friend-->
		<!--end::Modals-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<script src="assets/plugins/custom/vis-timeline/vis-timeline.bundle.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="assets/js/widgets.bundle.js"></script>
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="assets/js/custom/utilities/modals/users-search.js"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>