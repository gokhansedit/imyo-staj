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
			@media print {
				#kt_app_header {
					display: none !important;
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
				
				<!--end::Header-->
				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					<!--begin::Sidebar-->
					
				
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
										<div class="col-xxl-6 mb-6 mb-xl-10">
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
													<!--end::Statistics-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<!--begin::Menu-->
														<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
															<i class="ki-outline ki-dots-square fs-1 text-gray-400 me-n1"></i>
														</button>
														<!--begin::Menu 2-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu separator-->
															<div class="separator mb-3 opacity-75"></div>
															<!--end::Menu separator-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">New Ticket</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">New Customer</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
																<!--begin::Menu item-->
																<a href="#" class="menu-link px-3">
																	<span class="menu-title">New Group</span>
																	<span class="menu-arrow"></span>
																</a>
																<!--end::Menu item-->
																<!--begin::Menu sub-->
																<div class="menu-sub menu-sub-dropdown w-175px py-4">
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Admin Group</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Staff Group</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Member Group</a>
																	</div>
																	<!--end::Menu item-->
																</div>
																<!--end::Menu sub-->
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">New Contact</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu separator-->
															<div class="separator mt-3 opacity-75"></div>
															<!--end::Menu separator-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<div class="menu-content px-3 py-3">
																	<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
																</div>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu 2-->
														<!--end::Menu-->
													</div>
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
										<div class="col-xl-6">
											<!--begin::Chart widget 17-->
											<div class="card card-flush h-xl-100">
												<!--begin::Header-->
												<div class="card-header pt-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-dark">Ürün İstatistikleri</span>
														<span class="text-gray-400 pt-2 fw-semibold fs-6">Ürün Stok Dağılımı</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<!--begin::Menu-->
														<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
															<i class="ki-outline ki-dots-square fs-1 text-gray-400 me-n1"></i>
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

										<div class="card mb-5 mb-xl-8">
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold fs-3 mb-1">Recent Orders</span>
												<span class="text-muted mt-1 fw-semibold fs-7">Over 500 orders</span>
											</h3>
											<div class="card-toolbar">
												<!--begin::Menu-->
												<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
													<i class="ki-outline ki-category fs-6"></i>
												</button>
												<!--begin::Menu 2-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mb-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">New Ticket</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">New Customer</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
														<!--begin::Menu item-->
														<a href="#" class="menu-link px-3">
															<span class="menu-title">New Group</span>
															<span class="menu-arrow"></span>
														</a>
														<!--end::Menu item-->
														<!--begin::Menu sub-->
														<div class="menu-sub menu-sub-dropdown w-175px py-4">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Admin Group</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Staff Group</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Member Group</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu sub-->
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">New Contact</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mt-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content px-3 py-3">
															<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
														</div>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu 2-->
												<!--end::Menu-->
											</div>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body py-3">
											<!--begin::Table container-->
											<div class="table-responsive">
												<!--begin::Table-->
												<table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
													<!--begin::Table head-->
													<thead>
														<tr class="fw-bold text-muted">
															<th class="w-25px">
																<div class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="1" data-kt-check="true" data-kt-check-target=".widget-13-check" />
																</div>
															</th>
															<th class="min-w-150px">Order Id</th>
															<th class="min-w-140px">Country</th>
															<th class="min-w-120px">Date</th>
															<th class="min-w-120px">Company</th>
															<th class="min-w-120px">Total</th>
															<th class="min-w-120px">Status</th>
															<th class="min-w-100px text-end">Actions</th>
														</tr>
													</thead>
													<!--end::Table head-->
													<!--begin::Table body-->
													<tbody>
														<tr>
															<td>
																<div class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input widget-13-check" type="checkbox" value="1" />
																</div>
															</td>
															<td>
																<a href="#" class="text-dark fw-bold text-hover-primary fs-6">56037-XDER</a>
															</td>
															<td>
																<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Brasil</a>
																<span class="text-muted fw-semibold text-muted d-block fs-7">Code: PH</span>
															</td>
															<td>
																<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">05/28/2020</a>
																<span class="text-muted fw-semibold text-muted d-block fs-7">Code: Paid</span>
															</td>
															<td>
																<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Intertico</a>
																<span class="text-muted fw-semibold text-muted d-block fs-7">Web, UI/UX Design</span>
															</td>
															<td class="text-dark fw-bold text-hover-primary fs-6">$3560</td>
															<td>
																<span class="badge badge-light-success">Approved</span>
															</td>
															<td class="text-end">
																<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																	<i class="ki-outline ki-switch fs-2"></i>
																</a>
																<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																	<i class="ki-outline ki-pencil fs-2"></i>
																</a>
																<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
																	<i class="ki-outline ki-trash fs-2"></i>
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input widget-13-check" type="checkbox" value="1" />
																</div>
															</td>
															<td>
																<a href="#" class="text-dark fw-bold text-hover-primary fs-6">05822-FXSP</a>
															</td>
															<td>
																<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Belarus</a>
																<span class="text-muted fw-semibold text-muted d-block fs-7">Code: BY</span>
															</td>
															<td>
																<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">04/18/2021</a>
																<span class="text-muted fw-semibold text-muted d-block fs-7">Code: Paid</span>
															</td>
															<td>
																<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Agoda</a>
																<span class="text-muted fw-semibold text-muted d-block fs-7">Houses & Hotels</span>
															</td>
															<td class="text-dark fw-bold text-hover-primary fs-6">$4850</td>
															<td>
																<span class="badge badge-light-warning">In Progress</span>
															</td>
															<td class="text-end">
																<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																	<i class="ki-outline ki-switch fs-2"></i>
																</a>
																<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																	<i class="ki-outline ki-pencil fs-2"></i>
																</a>
																<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
																	<i class="ki-outline ki-trash fs-2"></i>
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input widget-13-check" type="checkbox" value="1" />
																</div>
															</td>
															<td>
																<a href="#" class="text-dark fw-bold text-hover-primary fs-6">4472-QREX</a>
															</td>
															<td>
																<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Phillipines</a>
																<span class="text-muted fw-semibold text-muted d-block fs-7">Code: BH</span>
															</td>
															<td>
																<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">07/23/2019</a>
																<span class="text-muted fw-semibold text-muted d-block fs-7">Code: Paid</span>
															</td>
															<td>
																<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">RoadGee</a>
																<span class="text-muted fw-semibold text-muted d-block fs-7">Transportation</span>
															</td>
															<td class="text-dark fw-bold text-hover-primary fs-6">$8376</td>
															<td>
																<span class="badge badge-light-danger">Success</span>
															</td>
															<td class="text-end">
																<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																	<i class="ki-outline ki-switch fs-2"></i>
																</a>
																<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																	<i class="ki-outline ki-pencil fs-2"></i>
																</a>
																<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
																	<i class="ki-outline ki-trash fs-2"></i>
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input widget-13-check" type="checkbox" value="1" />
																</div>
															</td>
															<td>
																<a href="#" class="text-dark fw-bold text-hover-primary fs-6">00347-BCLQ</a>
															</td>
															<td>
																<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Argentina</a>
																<span class="text-muted fw-semibold text-muted d-block fs-7">Code: BR</span>
															</td>
															<td>
																<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">12/21/2021</a>
																<span class="text-muted fw-semibold text-muted d-block fs-7">Code: Paid</span>
															</td>
															<td>
																<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">The Hill</a>
																<span class="text-muted fw-semibold text-muted d-block fs-7">Insurance</span>
															</td>
															<td class="text-dark fw-bold text-hover-primary fs-6">$9486</td>
															<td>
																<span class="badge badge-light-info">Rejected</span>
															</td>
															<td class="text-end">
																<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																	<i class="ki-outline ki-switch fs-2"></i>
																</a>
																<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																	<i class="ki-outline ki-pencil fs-2"></i>
																</a>
																<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
																	<i class="ki-outline ki-trash fs-2"></i>
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input widget-13-check" type="checkbox" value="1" />
																</div>
															</td>
															<td>
																<a href="#" class="text-dark fw-bold text-hover-primary fs-6">59486-XDER</a>
															</td>
															<td>
																<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Agoda</a>
																<span class="text-muted fw-semibold text-muted d-block fs-7">Code: BT</span>
															</td>
															<td>
																<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">05/28/2020</a>
																<span class="text-muted fw-semibold text-muted d-block fs-7">Code: Paid</span>
															</td>
															<td>
																<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Phillipines</a>
																<span class="text-muted fw-semibold text-muted d-block fs-7">Transportation</span>
															</td>
															<td class="text-dark fw-bold text-hover-primary fs-6">$8476</td>
															<td>
																<span class="badge badge-light-primary">Approved</span>
															</td>
															<td class="text-end">
																<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																	<i class="ki-outline ki-switch fs-2"></i>
																</a>
																<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																	<i class="ki-outline ki-pencil fs-2"></i>
																</a>
																<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
																	<i class="ki-outline ki-trash fs-2"></i>
																</a>
															</td>
														</tr>
													</tbody>
													<!--end::Table body-->
												</table>
												<!--end::Table-->
											</div>
											<!--end::Table container-->
										</div>
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