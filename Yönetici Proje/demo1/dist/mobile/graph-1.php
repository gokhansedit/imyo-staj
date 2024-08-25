<?php 
include('../php/settings.php');
if (!isset($_SESSION['login'])) {
	$pageName = $_SERVER['REQUEST_URI'];
	header('Location: ../index.php?redirect='.$pageName);
	exit;
}
?>
<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic
Product Version: 8.2.0
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="../"/>
		<title>Grafik 1</title>
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
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
		<script src='assets/js/amcharts5/percent.js'></script>
			<script src='assets/js/amcharts5/themes/Animated.js'></script>
			<script src='assets/js/amcharts5/xy.js'></script>
		<style>
			.kt_button_class{
				padding: .5rem !important;
				font-size: 12px !important;
			}
			.loader {
				width:100%;
				height:100%;
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
												<a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Anasayfa</a>
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
									<!--begin::Actions-->
								
									<!--end::Actions-->
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
									<!--begin::Row-->
									
									

									<div class="row g-5 g-xl-10 mb-10 mb-xl-2">
										<div class="col-md-4 col-lg-4 col-xl-4 col-xxl-4 mb-md-8 mb-xl-10" id="graph-card">
											<!--begin::Statistics Widget 5-->
											<a href="income.php" class="card bg-body hoverable card-xl-stretch mb-xl-8">
												<!--begin::Body-->
												<div class="card-body">
													<i class="ki-outline ki-chart-simple text-primary fs-2x ms-n1"></i>
											<?php 
											$stmt = $con->prepare("Select SUM(gelirTutar) as toplam from gelir");
											if($stmt->execute())
											{
											$result = $stmt->get_result();
											$data =  $result->fetch_object();
											$gelir = number_format($data->toplam, 2, ',', '.');
										}
											?>
													<div class="text-gray-900 fw-bold fs-2 mb-2 mt-5"><?=$gelir?> ₺</div>
													<div class="fw-semibold text-gray-700">Gelir</div>
												</div>
												<!--end::Body-->
											</a>
											<!--end::Statistics Widget 5-->
										</div>			<div class="col-md-4 col-lg-4 col-xl-4 col-xxl-4 mb-md-8 mb-xl-10" id="graph-card">
											<!--begin::Statistics Widget 5-->
											<a href="calisan.php" class="card bg-body hoverable card-xl-stretch mb-xl-8">
												<!--begin::Body-->
												<div class="card-body">
													<i class="ki-outline ki-people text-primary fs-2x ms-n1"></i>
								<?php 
								$stmt = $con->prepare("Select COUNT(*) as toplam from calisan");
								if($stmt->execute())
								{
									$result = $stmt->get_result();
									$calisanData = $result->fetch_object();
								}
								?>
													<div class="text-gray-900 fw-bold fs-2 mb-2 mt-5"><?=$calisanData->toplam?></div>
													<div class="fw-semibold text-gray-700">Çalışan Sayısı</div>
												</div>
												<!--end::Body-->
											</a>
											<!--end::Statistics Widget 5-->
										</div>					<div class="col-md-4 col-lg-4 col-xl-4 col-xxl-4 mb-md-8 mb-xl-10" id="graph-card">
											<!--begin::Statistics Widget 5-->
											<a href="orders.php" class="card bg-body hoverable card-xl-stretch mb-xl-8">
												<!--begin::Body-->
											<?php
												$stmt = $con->prepare("SELECT COUNT(*) as toplam FROM siparisler where durum=0");
												$stmt->execute();
												$result = $stmt->get_result();
												$data = $result->fetch_object();
											?>
												<div class="card-body">
												<i class="fa-light fa-truck-clock" style="font-size:20px;color: rgb(62, 151, 255)"></i>
													<div class="text-gray-900 fw-bold fs-2 mb-2 mt-5"><?=$data->toplam?></div>
													<div class="fw-semibold text-gray-400">Bekleyen Siparişler</div>
												</div>
												<!--end::Body-->
											</a>
											<!--end::Statistics Widget 5-->
										</div>
										
										</div>
										<div class="row g-5 g-xl-10 mb-xl-10">
										
										<!--begin::Col-->
										<div class="col-md-12 col-lg-5 col-xl-5 col-xxl-5 mb-md-8 mb-xl-10">
											<!--begin::Card widget 4-->
											<div class="row">
												
											<div class="card card-flush h-md-50 mb-112 h-lg-100 mb-10  mb-xl-12 col-print-8" id="pie">
												
												<!--begin::Header-->
												<div class="card-header py-7">
													<!--begin::Title-->
													<div class="card-title d-flex flex-column">
														<!--begin::Info-->
														<div class="d-flex align-items-center">
															<!--begin::Currency-->
															
															<!--end::Currency-->
															<!--begin::Amount-->
													<?php 
													$stmt = $con->prepare("Select SUM(adet) as toplam from satis ");
													if($stmt->execute())
													{
														$result = $stmt->get_result();
														$urun = $result->fetch_object();
														$urunAdet = number_format($urun->toplam,0,',','.') ;
													}
													?>
															<span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2"><?=$urunAdet?></span>
															<span class="fs-4 fw-semibold text-gray-600 me-1 align-self-start">Adet</span>
															<!--end::Amount-->
															<!--begin::Badge-->
															<div class="card-toolbar print" style="float:right;position:absolute;right:10px;top:20px;">
																
															<button class="btn btn-light-warning p-3 d-flex justify-content-center align-items-center kt_button_class" style="margin-right:10px" data-table="satis" data-time="6"  data-bs-toggle="modal" data-bs-target="#kt_modal_1"><i class="fa-solid fa-microchip-ai " style="font-size:20px"></i> 6 Ay</button>
															<button class="btn btn-light-danger p-3 d-flex justify-content-center align-items-center kt_button_class" style="margin-right:10px" data-table="satis" data-time="12"   data-bs-toggle="modal" data-bs-target="#kt_modal_1"><i class="fa-solid fa-microchip-ai " style="font-size:20px"></i> 1 Yıl</button>
															<a href="sales.php" type="button" class="btn btn-light-success p-3" ><i class="fa-duotone fa-arrow-right fa-lg" style="font-size:12px;"></i></a>
															</div>
															<!--end::Badge-->
														</div>
														
														<!--end::Info-->
														<!--begin::Subtitle-->
														<span class="text-gray-400 pt-1 fw-semibold fs-6">Ürün Satış Dağılımı</span>
														<!--end::Subtitle-->
													</div>
													<!--end::Title-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body pt-2 pb-4 d-flex align-items-center">
													<!--begin::Chart-->
													<div class="d-flex flex-center me-5 pt-2">
													<div class="viz-portfolio-total-value"></div>
													</div>
													<!--end::Chart-->
													<!--begin::Labels-->
													<div class="d-flex flex-column content-justify-center w-100">
														<!--begin::Label-->
												<script>var data = [];
														let ctg = [];
														let price = [];
														

													
												</script>
												<?php 
												$maxAdet = 0;
												$toplamFiyat = 0;
												$record = 0;
													$stmt = $con->prepare("Select * from satis ORDER BY adet DESC");
													if($stmt->execute())
													{
														$result = $stmt->get_result();
														while($row = $result->fetch_object())
														{
															$urun_cek = $con->prepare("SELECT * FROM urun where urun_no = ?");
															$urun_cek->bind_param("s", $row->urun_no);
															if( $urun_cek->execute() )
															{
																$urun_result = $urun_cek->get_result() ;
																$urun = $urun_result->fetch_object();
															}
															$colorIndex = $record % $numberOfColors;
															$max = $row->adet * $row->fiyat;
															if($max > $maxAdet)
															{
																$maxAdet = $max;
															}
															$toplamFiyat+=$row->adet*$row->fiyat;
															$encrypted_id = NULL;
															$encrypted_id = urlencode(kodla($urun->id));
														

												?>
													<script>
													data.push({
														"originator":"<?=$urun->urun_ad?>",
														"id":<?=$row->id?>,
														"balance":<?=$urun->urun_adet?>,
														"fake":300,
														"color": "<?=$colorPalette[$colorIndex]?>"
													
													});

													price.push("<?=$row->adet * $row->fiyat?>");
													ctg.push({label: '<?=$urun->urun_ad?>', url: 'product-edit.php?id=<?=$encrypted_id?>'});
												
													</script>
														<div class="d-flex fs-6 fw-semibold align-items-center">
															<!--begin::Bullet-->
															<div class="bullet w-14px h-10px rounded-2  me-3" style="background-color:<?=$colorPalette[$colorIndex]?>"></div>
															<!--end::Bullet-->
															<!--begin::Label-->
															<div class="text-gray-500 flex-grow-1 me-4"><a href="sales.php?id=<?=urlencode(kodla($row->id));?>&product=<?=urlencode(kodla($row->urun_no));?>" class="text-gray-800 text-hover-primary fw-bold"><?=$urun->urun_ad?></a></div>
															<!--end::Label-->
															<!--begin::Stats-->
															<div class="fw-bolder text-gray-700 text-xxl-end"><?=number_format($row->adet,0,',','.')?> Adet</div>
															<!--end::Stats-->
														</div>

												<?php 
												$record++;
																}
															}
												?>
											
												
														<!--end::Label-->
														<!--begin::Label-->
													
													</div>
													<!--end::Labels-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card widget 4-->
											<!--begin::Card widget 5-->
											<div class="card card-flush h-md-50 mb-10 mb-xl-12 col-print-4">
										
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<div class="card-title d-flex flex-column">
														<!--begin::Info-->
														<?php
														$tamamlanan = 0;
														$devam = 0;
														
														$stmt = $con->prepare('SELECT * FROM siparisler');
														$stmt->execute();
														$result = $stmt->get_result();
														while($row = $result->fetch_object())
														{
															if($row->durum == 0)
															{
																$devam++;
															}
															else {
																$tamamlanan++;
															}

														}
												
														$toplam  = $tamamlanan + $devam;  

														if($devam > 0 && $tamamlanan > 0)	
														{ 
														if($devam > $tamamlanan)
														{
															
															$c = $toplam / 100;  
															$yuzde = floor($tamamlanan / $c);
														}
													
													}
													else {
														$yuzde = 0;
													}
														
														?>
														<div class="d-flex align-items-center">
															<!--begin::Amount-->
															<span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2"><?=$toplam?></span>
															<span class="fs-4 fw-semibold text-gray-600 me-1 align-self-start">Adet</span>
															
															<!--end::Amount-->
														
														</div>
														<!--end::Info-->
														<!--begin::Subtitle-->
														<span class="text-gray-400 pt-1 fw-semibold fs-6">Sipariş İstatistikleri </span>
														
														<!--end::Subtitle-->
													</div>
													<div class="card-toolbar print" style="float:right;position:absolute;right:10px;top:20px;">
																
																<button class="btn btn-light-warning p-3 d-flex justify-content-center align-items-center kt_button_class" style="margin-right:10px" data-table="siparisler" data-time="6"  data-bs-toggle="modal" data-bs-target="#kt_modal_1"><i class="fa-solid fa-microchip-ai " style="font-size:20px"></i> 6 Ay</button>
																<button class="btn btn-light-danger p-3 d-flex justify-content-center align-items-center kt_button_class" style="margin-right:10px" data-table="siparisler" data-time="12"   data-bs-toggle="modal" data-bs-target="#kt_modal_1"><i class="fa-solid fa-microchip-ai " style="font-size:20px"></i> 1 Yıl</button>
																<a href="orders.php" type="button" class="btn btn-light-success p-3"><i class="fa-duotone fa-arrow-right fa-lg" style="font-size:12;"></i></a>
																</div>
													<!--end::Title-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body d-flex align-items-end pt-0">
													<!--begin::Progress-->
													<div class="d-flex align-items-center flex-column mt-3 w-100">
														<div class="d-flex justify-content-between w-100 mt-auto mb-2">
															<span class="fw-bolder fs-6 text-dark">Hedefe <?=($toplam-$tamamlanan)?> kaldı (<?=$tamamlanan?> Tamamlanan)</span>
															<span class="fw-bold fs-6 text-gray-400"><?=$yuzde?>%</span>
														</div>
														<div class="h-8px mx-3 w-100 bg-light-success rounded">
															<div class="bg-success rounded h-8px" role="progressbar" style="width: <?=$yuzde?>%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
													<!--end::Progress-->
												</div>
												<!--end::Card body-->
											
											</div>
											
											</div>
											<!--end::Card widget 5-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-lg-7 col-xl-7 col-xxl-7 mb-5 mb-xl-0 col-print-12">
									
											<!--begin::Chart widget 3-->
											<div class="card card-flush overflow-hidden ">
											
												<!--begin::Header-->
												<div class="card-header py-5">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-dark">Satış Gelirleri</span>
												
													</h3>
													<div class="card-toolbar print" style="float:right;position:absolute;right:10px;top:20px;">
																
															<button class="btn btn-light-warning p-2 d-flex justify-content-center align-items-center kt_button_class" style="margin-right:10px" data-table="satis" data-time="6"  data-bs-toggle="modal" data-bs-target="#kt_modal_1"><i class="fa-solid fa-microchip-ai " style="font-size:20px"></i> 6 Ay</button>
															<button class="btn btn-light-danger p-2 d-flex justify-content-center align-items-center kt_button_class" style="margin-right:10px" data-table="satis" data-time="12"   data-bs-toggle="modal" data-bs-target="#kt_modal_1"><i class="fa-solid fa-microchip-ai " style="font-size:20px"></i> 1 Yıl</button>
															<a href="sales.php" type="button" class="btn btn-light-success p-2"><i class="fa-duotone fa-arrow-right fa-lg" style="font-size:12px;"></i></a>
															</div>
													<!--end::Title-->
													<!--begin::Toolbar-->
													
													<!--end::Toolbar-->
												</div>
												
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
													<!--begin::Statistics-->
													<div class="px-9 mb-5">
														<!--begin::Statistics-->
														<div class="d-flex mb-2">
															<span class="fs-4 fw-semibold text-gray-400 me-1">₺</span>
															<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2"><?=number_format($toplamFiyat,0,",",".")?></span>
														</div>
														<!--end::Statistics-->
														<!--begin::Description-->
														<span class="fs-6 fw-semibold text-gray-400">Hedefe 28.171.000₺ Kaldı</span>
														<!--end::Description-->
													</div>
													<!--end::Statistics-->
													<!--begin::Chart-->
													<div id="kt_charts_widget_3" class="min-h-auto ps-4 pe-6" style="height: 300px"></div>
													<!--end::Chart-->
												</div>
												<!--end::Card body-->
											
											</div>
											<!--end::Chart widget 3-->
										
										</div>
										<!--end::Col-->
									</div>
									
									<div class="row gy-5 g-xl-10">
										<!--begin::Col-->
										<div class="col-xl-6 mb-xl-10 ">
											<!--begin::Table widget 2-->
											<div class="card h-md-100 h-xl-100">
												<!--begin::Header-->
												<div class="card-header align-items-center border-0">
													<!--begin::Title-->
													<h3 class="fw-bold text-gray-900 m-0">Önceki Siparişler</h3>
													<div class="card-toolbar">
														<a href="orders.php" class="btn btn-sm btn-light">Sipariş Detayları</a>
													</div>
													<!--end::Menu 2-->
													<!--end::Menu-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-2">
													<!--begin::Nav-->
													<ul class="nav nav-pills nav-pills-custom mb-3">
														<!--begin::Item-->
														<?php 
														$urun_no=1;
														$stmt = $con->prepare("SELECT * FROM urun");
														if($stmt->execute()){
															$result = $stmt->get_result();
															while($urun_list = $result->fetch_object()){
													
														
														?>
														<li class="nav-item mb-3 me-3 me-lg-6">
															<!--begin::Link-->
															<a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden <?php if($urun_no==1){echo"active";}?>  w-80px h-85px py-4" data-bs-toggle="pill" href="#urun-<?=$urun_no?>">
																<!--begin::Icon-->
																<div class="nav-icon">
																	<img alt="" src="assets/product-image/<?=$urun_list->image?>" class="" />
																</div>
																<!--end::Icon-->
																<!--begin::Subtitle-->
																<span class="nav-text text-gray-700 fw-bold fs-6 lh-1"><?=$urun_list->urun_ad?></span>
																<!--end::Subtitle-->
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
																<!--end::Bullet-->
															</a>
															<!--end::Link-->
														</li>

														<?php
																$urun_no++;
															}
														}
														
														?>
														<!--end::Item-->
														<!--begin::Item-->
														
														<!--end::Item-->
													</ul>
													<!--end::Nav-->
													<!--begin::Tab Content-->
													<div class="tab-content">
														<!--begin::Tap pane-->
														<?php 
														$urun_no=1;
														$stmt = $con->prepare("SELECT * FROM urun");
														if($stmt->execute()){
															$result = $stmt->get_result();
															while($urun_list = $result->fetch_object()){
																
														
														?>
														<div class="tab-pane fade show <?php if($urun_no==1){echo"active";}?>" id="urun-<?=$urun_no?>">
															<!--begin::Table container-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
																	<!--begin::Table head-->
																	<thead>
																		<tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
																			<th class="ps-0 w-50px">ÜRÜN</th>
																			<th class="min-w-125px"></th>
																			<th class="text-end min-w-100px">MÜŞTERİ</th>
																			<th class="pe-0 text-end min-w-100px">ADET</th>
																			<th class="pe-0 text-end min-w-100px">FİYAT</th>
																		</tr>
																	</thead>
																	<!--end::Table head-->
																	<!--begin::Table body-->
																	<tbody>
																	<?php
																	$order_cek = $con->prepare("SELECT * FROM siparisler WHERE urun_no='$urun_list->urun_no' ORDER BY create_time DESC" );
																	if($order_cek->execute()){
																		$order_result = $order_cek->get_result();
																		while($order = $order_result->fetch_object()){
																			$product_encrypted_id = urlencode(kodla($order->id));
																	?>
																		<tr>
																			<td>
																				<img src="assets/product-image/<?=$urun_list->image?>" class="w-50px ms-n1" alt="" />
																			</td>
																			<td class="ps-0">
																				<a href="order-edit.php?id=<?=$product_encrypted_id?>" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0"><?=$urun_list->urun_ad?></a>
																				<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Spş No: #<?=$order->siparis_no?></span>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end"><?=$order->musteri?></span>
																			</td>
																			<td class="text-end pe-0">
																				<span class="text-gray-800 fw-bold d-block fs-6"><?=$order->adet?></span>
																			</td>
																			<td class="text-end pe-0">
																				<span class="text-gray-800 fw-bold d-block fs-6"><?=number_format($order->ucret,0,',','.')?>₺</span>
																			</td>
																		</tr>
																	<?php
																	}
																}
																	?>
																		
																	</tbody>
																	<!--end::Table body-->
																</table>
																<!--end::Table-->
															</div>
															<!--end::Table container-->
														</div>

														<?php
														$urun_no++;
															}
														}
														?>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														
														<!--end::Tap pane-->
													</div>
													<!--end::Tab Content-->
												</div>
												<!--end: Card Body-->
											</div>
											<!--end::Table widget 2-->
											
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										
										<!--begin::Col-->
										<div class="col-lg-6 col-xl-6 col-xxl-6 mb-5 mb-xl-0">
											<!--begin::Timeline widget 3-->
											<div class="card h-md-100">
												<!--begin::Header-->
												<div class="card-header border-0 pt-5">
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-dark">Yaklaşan Toplantılar</span>
											
													</h3>
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<a href="meeting.php" class="btn btn-sm btn-light">Toplantı Sayfası</a>
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-7 px-0">
													<!--begin::Nav-->
													
													<!--end::Nav-->
													<!--begin::Tab Content (ishlamayabdi)-->
													<div class="tab-content mb-2 px-9">
														<!--begin::Tap pane-->
														
													
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade show active" >
																<?php
																$index = 0;
																$current_datetime = date('Y-m-d H:i:s');
																	$stmt = $con->prepare('SELECT * FROM toplanti where tarih >=  ?');
																	$stmt->bind_param('s', $current_datetime);
																	if($stmt->execute()){
																		$result = $stmt->get_result();
																		while($toplanti = $result->fetch_object()){
																			$encrypted_toplanti = urlencode(kodla($toplanti->id));
																			$color = $colors_library[$index];
																			$index++;
																			$date_format = new DateTime($toplanti->tarih);
																			$now = new DateTime();
																			$diff = $now->diff($date_format);
																		$kalanZaman =	$diff->days . " Gün " . $diff->h . " Saat " . $diff->i . " Dk. " . $diff->s . "Sn.";

																			// Yerel ayarları ve tarih formatını belirle
																			$formatter = new IntlDateFormatter(
																			   'tr_TR', // Türkçe yerel ayar
																			   IntlDateFormatter::FULL, // Tam tarih formatı
																			   IntlDateFormatter::SHORT, // Kısa saat formatı
																			   'Europe/Istanbul', // Saat dilimi
																			   IntlDateFormatter::GREGORIAN, // Takvim
																			   'd MMMM yyyy EEEE, HH:mm' // Özel format
																		   );
																		   $tarih = $formatter->format($date_format);
																?>
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center h-90px h-md-60px h-xl-60px mh-100 me-4 " style="background-color:<?=$color?>;h"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2"><?=$tarih?></div>
																	
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6"><?=$toplanti->baslik?></div>
																	<div class="text-gray-700 fw-semibold fs-6">Kalan Süre: <?=$kalanZaman?></div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="php/meeting-count.php?id=<?=$encrypted_toplanti?>&calisan_id=<?=$_SESSION['user_id']?>" class="btn btn-sm btn-light-primary" style="margin-right:18px;">Katıl</a>
																<a href="meeting-edit.php?id=<?=$encrypted_toplanti?>" class="btn btn-sm btn-light-success">İncele</a>
																<!--end::Action-->
															</div>
												
															
														

															<?php 
																}
															}
															?>
															<!--end::Wrapper-->
														</div>
													
													</div>
												
												</div>
												<!--end: Card Body-->
											</div>
											<!--end::Timeline widget 3-->
											<!--begin::Timeline widget 3-->
											
											<!--end::Timeline widget-3-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										
										<!--end::Col-->
									</div>
									
									<!--end::Row-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
					
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
    var dataType = "button";

    // AJAX isteği gönder
    $.ajax({
      url: 'gpt.php', // PHP dosyanızın adı
      type: 'POST',
      data: { table: dataTable, dataTime: dataTime, dataType: dataType },
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

		<!--end::Scrolltop-->
		<!--begin::Modals-->
		
		<!--begin::Modal - Invite Friends-->
		
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
		<script src="https://d3js.org/d3.v3.min.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/locales/de_DE.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/germanyLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/fonts/notosans-sc.js"></script>
		<script>
function type(d) {
    d.balance = +d.balance;
    return d;
}

function swapRealData(data) {
    for (var i = 0; i < data.length; i++) {
        data[i].fake = data[i].balance;
    }
    return data;
}

data = data.slice(0, 9);

// Cihaz genişliğine göre width ve height değerlerini belirleyin
var isMobile = window.innerWidth <= 768; // Örnek olarak, 768 pikselden küçük ekranlar mobil kabul edilir
var width = isMobile ? 110 : 150; // Mobil cihazlar için 150, diğerleri için 200
var height = isMobile ? 110 : 150;
var radius = Math.min(width, height) / 1.76;
window.onbeforeprint = function() {

	 width = 70;  // Mobil cihazlar için 150, diğerleri için 200
 height = 70;
 radius = Math.min(width, height) / 2;
}
var that = this,
    colorObj = [];

var color = d3.scale.ordinal()
    .domain(data.map(function(d) { return d.originator; }))
    .range(data.map(function(d) { return d.color; }));

var arc = d3.svg.arc().outerRadius(radius - 10).innerRadius(radius - 70);

var pie = d3.layout.pie().sort(d3.descending).value(function(d) {
    return d.fake;
});

var svg = d3.select("body").select(".viz-portfolio-total-value").append("svg")
    .attr("width", width)
    .attr("height", height)
    .append("g")
    .attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");

var g = svg.selectAll(".arc").data(pie(data)).enter().append("g").attr("class", "arc");

g.append("path").attr("d", arc).style("fill", function(d) {
    return color(d.data.color);
}).each(function(d) {
    this._current = d;
}); // store the initial values;

window.setTimeout(redrawChart, 500);

function arcTween(a) {
    var i = d3.interpolate(this._current, a);
    this._current = i(0);
    return function(t) {
        return arc(i(t));
    };
}

function redrawChart() {
    // Convert "fake" value to real value then animate updated chart 
    that.swapRealData(data);
    svg.selectAll("path").data(pie(data)).transition().duration(2000).attrTween("d", arcTween);
}
</script>



<script>
var KTChartsWidget3 = function() {
        var e = {
                self: null,
                rendered: !1
            },
            t = function(e) {
                var t = document.getElementById("kt_charts_widget_3");
                if (t) {
                    var a = parseInt(t.style.height),
                        l = '#6c757d',  // Default gray color
                        r = '#e4e6ef',  // Default border dashed color
                        o = '#28a745',  // Default success color
                        i = {
                            series: [{
                                name: "Sales",
                                data: price
                            }],
                            chart: {
                                fontFamily: "inherit",
                                type: "area",
                                height: a,
                                toolbar: {
                                    show: !1
                                }
                            },
                            plotOptions: {},
                            legend: {
                                show: !1
                            },
                            dataLabels: {
                                enabled: !1
                            },
                            fill: {
                                type: "gradient",
                                gradient: {
                                    shadeIntensity: 1,
                                    opacityFrom: .4,
                                    opacityTo: 0,
                                    stops: [0, 80, 100]
                                }
                            },
                            stroke: {
                                curve: "smooth",
                                show: !0,
                                width: 3,
                                colors: [o]
                            },
                            xaxis: {
                                categories: ctg.map(function(item) { return item.label; }),
                                axisBorder: {
                                    show: !1
                                },
                                axisTicks: {
                                    show: !1
                                },
                                tickAmount: 8,
                                labels: {
										rotate: 0,
										rotateAlways: !0,
										style: {
											colors: l,
											fontSize: "12px"
										},
										formatter: function(value, index) {
												var category = ctg[index];
												if (category && category.url) {
													return '<a href="' + category.url + '" target="_blank">' + value + '</a>';
												} else {
													return value; // Alternatif bir değer veya hata durumu yönetimi
												}
											},

									},
                                crosshairs: {
                                    position: "front",
                                    stroke: {
                                        color: o,
                                        width: 1,
                                        dashArray: 3
                                    }
                                },
                                tooltip: {
                                    enabled: !0,
                                    formatter: void 0,
                                    offsetY: 0,
                                    style: {
                                        fontSize: "12px"
                                    }
                                }
                            },
                            yaxis: {
                                tickAmount: 6,
                                max: <?=$maxAdet*1.1?>, // Örneğin, maxAdet * 1.1
                                min: 10,
                                labels: {
                                    style: {
                                        colors: l,
                                        fontSize: "12px"
                                    },
                                    formatter: function(e) {
                                        return new Intl.NumberFormat('tr-TR',{   minimumFractionDigits: 0,
											maximumFractionDigits: 0}).format(e) + " ₺"
                                    }
                                }
                            },
                            states: {
                                normal: {
                                    filter: {
                                        type: "none",
                                        value: 0
                                    }
                                },
                                hover: {
                                    filter: {
                                        type: "none",
                                        value: 0
                                    }
                                },
                                active: {
                                    allowMultipleDataPointsSelection: !1,
                                    filter: {
                                        type: "none",
                                        value: 0
                                    }
                                }
                            },
                            tooltip: {
                                style: {
                                    fontSize: "12px"
                                },
                                y: {
                                    formatter: function(e) {
                                        return new Intl.NumberFormat('tr-TR').format(e) + " ₺"
                                    }
                                }
                            },
                            colors: [o],
                            grid: {
                                borderColor: r,
                                strokeDashArray: 4,
                                yaxis: {
                                    lines: {
                                        show: !0
                                    }
                                }
                            },
                            markers: {
                                strokeColor: o,
                                strokeWidth: 3
                            }
                        };
                    e.self = new ApexCharts(t, i), setTimeout((function() {
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

    // Grafik bileşenini başlatma
    KTChartsWidget3.init();
</script>
												

		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>