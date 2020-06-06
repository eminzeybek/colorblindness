<?php include("admin/config.php");?>
<!DOCTYPE html>
<html lang="tr">
	<head>
		<?php include("inc/head.php"); ?>
	</head>
	<body>
		<div class="body">

			<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 120}">
				<div class="header-body">
					<?php include("inc/header_top.php"); ?>
					<?php include("inc/header_nav.php"); ?>
				</div>
			</header>
			<div role="main" class="main">
				<section class="section py-3">
					<div class="container">
						<div class="row">
							<div class="col-lg-3">
								<div class="row justify-content-center">
									<div class="col-6 col-md-5 col-lg-12 p-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
										<div class="image-frame">
											<div class="image-frame-wrapper">
												<a href="<?=$base?><?=$link["marin"]?>"><img src="<?=$base?>img/shop/product-bg-10.jpg" class="img-fluid" alt=""></a>
												<div class="image-frame-info image-frame-info-show flex-column align-items-center" style="background: rgb(0,0,0,0.4);">
												<a href="<?=$base?><?=$link["marin"]?>"><span class="text-color-light font-primary font-weight-bold text-3"><?=$lang["index"]["gulet"]?></span>
													<h2 class="text-color-light font-weight-bold text-5 line-height-1 mb-2"><?=$lang["index"]["yat"]?></h2></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-6 col-md-5 col-lg-12 p-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
										<div class="image-frame">
											<div class="image-frame-wrapper align-items-start">
												<a href="<?=$base?><?=$link["bireysel"]?>"><img src="<?=$base?>img/shop/product-bg-92.jpg" class="img-fluid" alt=""></a>
												<div class="image-frame-info image-frame-info-show flex-column align-items-center pt-4">
													<a href="<?=$base?><?=$link["bireysel"]?>">
														<h2 class="text-color-light text-center text-4 mb-4" style="color: white !important"><?=$lang["index"]["bireysel"]?><br> <strong><?=$lang["index"]["karavan"]?></strong></h2>
													</a>
												</div>
											</div>
										</div>
									</div>
									
								</div>
							</div>
							<div class="col-8 col-lg-6 p-1 z-index-1" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
								<div class="image-frame">
									<div class="image-frame-wrapper">
										<a href="<?=$base?><?=$link["vip"]?>"><img src="<?=$base?>img/shop/product-bg-8.jpg" class="img-fluid appear-animation" alt="" data-appear-animation="scaleOut" data-appear-animation-duration="8s"></a>
										<div class="image-frame-info image-frame-info-show flex-column align-items-start px-4 pt-md-4 mt-md-3" style="background: rgb(0,0,0,0.4);">
											<a href="<?=$base?><?=$link["vip"]?>"><h2 class="text-color-light font-weight-bold text-8 line-height-2 mb-2"><?=$lang["index"]["vip minibus"]?></h2>
											<span class="text-color-light font-primary text-3 mb-4"><?=$lang["index"]["mini otobüs"]?></strong></span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="row justify-content-center">
									<div class="col-6 col-md-5 col-lg-12 p-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
										<div class="image-frame">
											<div class="image-frame-wrapper align-items-start">
												<a href="<?=$base?><?=$link["offroad"]?>"><img src="<?=$base?>img/shop/product-bg-102.jpg" class="img-fluid" alt=""></a>
												<div class="image-frame-info image-frame-info-show flex-column align-items-center pt-4">
												<a href="<?=$base?><?=$link["offroad"]?>"><h2 class="text-color-light text-center text-4 mb-4" style="color: black !important"><?=$lang["index"]["offroad"]?><br> <strong><?=$lang["index"]["kamp"]?></strong></h2></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-6 col-md-5 col-lg-12 p-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
										<div class="image-frame">
											<div class="image-frame-wrapper">
												<a href="<?=$base?><?=$link["tirkamyon"]?>"><img src="<?=$base?>img/shop/product-bg-9.jpg" class="img-fluid" alt=""></a>
												<div class="image-frame-info image-frame-info-show flex-column align-items-center" style="background: rgb(0,0,0,0.4);">
												<a href="<?=$base?><?=$link["tirkamyon"]?>"><span class="text-color-light font-primary font-weight-bold text-3"><?=$lang["index"]["tır"]?></span>
													<h2 class="text-color-light font-weight-bold text-5 line-height-1 mb-2"><?=$lang["index"]["kamyon"]?></h2></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="section pt-3">
					<div class="container">

						<div class="row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
							<div class="col p-1">
								<div class="owl-carousel owl-theme nav-style-3" data-plugin-options="{'loop': true, 'autoplay': true, 'items': 4, 'nav': false, 'dots': false, 'margin': 8, 'autoplayHoverPause': true}">

									<?php
									$sql = $mysqli->query("SELECT * FROM urunler WHERE durum!='-1' AND anasayfa=1 ORDER BY sira ASC;");
									while($populer = $sql->fetch_array(MYSQLI_ASSOC)){
										
										$sql_bak = $mysqli->query("SELECT * FROM urunler_foto WHERE urun_uniq='".$populer["urun_uniq"]."' ORDER BY id ASC LIMIT 1 ");
	 									$son_bak = $sql_bak->fetch_array(MYSQLI_ASSOC);
										
										 if($_SESSION["dil"]=="en")
										 {
											 $sql_bak2 = $mysqli->query("SELECT * FROM kategori_en WHERE kategori_uniq='".$populer["kategori_uniq"]."'");
											  $son_bak2 = $sql_bak2->fetch_array(MYSQLI_ASSOC);
											 $kategori = $son_bak2["path"];
 
											 $pati = str_replace("lt-sogutucu-arac-buzdolabi","lt-cooler-car-refrigerator",$populer["path"]);
										 }else 
										 {
											 $sql_bak2 = $mysqli->query("SELECT * FROM kategori WHERE kategori_uniq='".$populer["kategori_uniq"]."'");
											 $son_bak2 = $sql_bak2->fetch_array(MYSQLI_ASSOC);
											 $kategori = $son_bak2["path"];
											 
											 $pati = $populer["path"];
										 }
										
										$sql3 = $mysqli->query("SELECT sum(fiyat) as ekfiyat FROM urunler_ozellik WHERE urun_uniq='".$populer["urun_uniq"]."' AND fiyat!=9");
										$ekfiyat = $sql3->fetch_array(MYSQLI_ASSOC);
										$ekfiyat = $ekfiyat["ekfiyat"];
									?>
									<div class="text-center">
										<div class="image-frame image-frame-style-1 image-frame-effect-2 mb-3">
											<span class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-wrapper-overlay-light image-frame-wrapper-align-end">
												<a href="<?=$base."".$link["kategorilink"]."".$kategori."/".$pati?>/">
													<img src="<?=$base.$son_bak["path"]?>" class="img-fluid" alt="">
												</a>
												<span class="image-frame-action">
													<a href="<?=$base."".$link["kategorilink"]."".$kategori."/".$pati?>/" class="btn btn-primary btn-rounded font-weight-semibold btn-v-3 btn-fs-2"><?=$lang["index"]["ürünü incele"]?></a>
												</span>
											</span>
										</div>
										<h3 class="text-color-default text-2 mb-0">
											<a href="<?=$base."".$link["kategorilink"]."".$kategori."/".$pati?>/">
												<!--dile göre ürün adı-->
												<?php if($_SESSION["dil"]=="en") { $ad = urunadi($populer["urun_ad"]); $birim = "$"; } else { $ad = $populer["urun_ad"]; $birim = "TL"; }?>
												<!--dile göre ürün adı-->
												<?=$ad?>
											</a>
										</h3>
										<?php if($populer["fiyat2"]!="0") {
										if($populer["kdv"]!=0)
										{
											if($_SESSION["dil"]=="en")
											{
												$fiyat_yaz = number_format((($populer["fiyat2"]+$ekfiyat)/6), 0, ',', '.')." $";
											}else
											{
												$fiyat_yaz = number_format((($populer["fiyat2"]+$ekfiyat)), 0, ',', '.')." TL";
											}
											

										}else if($populer["kdv"]==0)
										{
											$fiyat_yaz = number_format($populer["fiyat2"], 0, ',', '.')." €";
										}
										?>
										<span class="price font-primary text-4"><strong class="text-color-dark"><?=$fiyat_yaz?></strong></span>
										<?php } else { ?>
										<?php } ?>
									</div>

									<?php } ?>



								</div>
							</div>
						</div>
					</div>
				</section>
										
			
				<section id="aboutus" class="section pb-lg-0">
					<div class="container">
						<div class="row">
							<div class="col-md-5">
								<div class="overflow-hidden mb-3">
									<h2 class="word-rotator letters type font-weight-bold text-5 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">
										<span>Ninkasi </span> 
										<span class="word-rotator-words waiting">
											<b class="is-visible"><?=$lang["index"]["soğutucu"]?></b>
											<b><?=$lang["index"]["dondurucu"]?></b>
										</span>
										<span> <?=$lang["index"]["araç buzdolabı"]?></span>
									</h2>
								</div>
								<div class="overflow-hidden mb-3">
									<p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400"><?=$lang["index"]["altbaşlık 1"]?></p>
								</div>
								<div class="overflow-hidden mb-3">
									<p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="600"><?=$lang["index"]["açıklama 1"]?></p>
									<p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="600"><?=$lang["index"]["açıklama 2"]?></p>
								</div>
								<a href="<?=$base?><?=$link["kurumsal"]?>" class="btn btn-outline btn-rounded btn-primary btn-v-3 btn-h-4 font-weight-bold mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800"><?=$lang["menu"]["kurumsal"]?></a>
							</div>
							<div class="col-md-7">
								<img src="<?=$base?>img/other/desktop-concept-1.png" class="img-fluid concept-pos-1" alt="" />
							</div>
						</div>
					</div>
				</section>
				<section class="section bg-light-5">
					<div class="container">
						<div class="row mb-5">
							<div class="col">
								<div class="overflow-hidden mb-3">
									<h2 class="font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200"><?=$lang["index"]["yeni teknoloji"]?></h2>
								</div>
							</div>
						</div>
						<div class="row align-items-baseline mb-4 pb-2">
							<div class="col-sm-6 col-lg-3">
								<div class="icon-box icon-box-style-3 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
									<div class="icon-box-icon">
										<img style="width:100%" src="<?=$base?>img/b1.jpg" alt="" />
									</div>
									<div class="icon-box-info">
										<div class="icon-box-info-title">
											<span class="top-sub-title"><?=$lang["index"]["tropikal"]?></span>
											<h3 class="font-weight-bold text-4 mb-3"><?=$lang["index"]["tropikal başlık"]?></h3>
										</div>
										<p><?=$lang["index"]["tropikal alt"]?></p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="icon-box icon-box-style-3 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="100">
									<div class="icon-box-icon">
									<img style="width:100%" src="<?=$base?>img/b2.jpg" alt="" />
									</div>
									<div class="icon-box-info">
										<div class="icon-box-info-title">
											<span class="top-sub-title"><?=$lang["index"]["akü"]?></span>
											<h3 class="font-weight-bold text-4 mb-3"><?=$lang["index"]["akü başlık"]?></h3>
										</div>
										<p><?=$lang["index"]["akü alt"]?></p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="icon-box icon-box-style-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100">
									<div class="icon-box-icon">
									<img style="width:100%" src="<?=$base?>img/b3.jpg" alt="" />
									</div>
									<div class="icon-box-info">
										<div class="icon-box-info-title">
											<span class="top-sub-title"><?=$lang["index"]["buz"]?></span>
											<h3 class="font-weight-bold text-4 mb-3"><?=$lang["index"]["buz başlık"]?></h3>
										</div>
										<p><?=$lang["index"]["buz alt"]?></p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="icon-box icon-box-style-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
									<div class="icon-box-icon">
									<img style="width:100%" src="<?=$base?>img/b4.jpg" alt="" />
									</div>
									<div class="icon-box-info">
										<div class="icon-box-info-title">
											<span class="top-sub-title"><?=$lang["index"]["secop"]?></span>
											<h3 class="font-weight-bold text-4 mb-3"><?=$lang["index"]["secop başlık"]?></h3>
										</div>
										<p><?=$lang["index"]["secop alt"]?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section">
					<div class="container">
						<div class="row">
						<div class="col-10 col-md-5 mx-auto ml-md-auto appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
								<div class="particles d-flex align-items-center pr-0 pr-lg-3 pr-xl-5">
									<svg class="svg-particles d-none d-sm-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 493.72 405.79">
									    <g class="g-particles g-particles-group-1 appear-animation" data-appear-animation="expandParticles" data-appear-animation-delay="500">
									        <line class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10" x1="150.28" y1="108.35" x2="159.03" y2="102.1"/>
									        <line class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10" x1="325.51" y1="118.98" x2="334.26" y2="112.73"/>
									        <line class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10" x1="483.33" y1="94.52" x2="492.08" y2="88.27"/>
									        <line class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10" x1="321.14" y1="279.22" x2="329.89" y2="272.97"/>
									        <line class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10" x1="148.47" y1="279.22" x2="157.22" y2="272.97"/>
									        <line class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10" x1="11.14" y1="305.17" x2="19.89" y2="298.92"/>
									    </g>
									    <g class="g-particles g-particles-group-2 appear-animation" data-appear-animation="expandParticles" data-appear-animation-delay="800">
									        <path class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10" d="M51.78,105.64s-.37-12.75,5.25-3.5.38,7.13,0,7.13" transform="translate(-3.14 -1.85)"/>
									        <path class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10" d="M229.34,103.24s-.37-12.75,5.25-3.5.38,7.12,0,7.12" transform="translate(-3.14 -1.85)"/>
									        <path class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10" d="M401,103.24s-.37-12.75,5.25-3.5.38,7.12,0,7.12" transform="translate(-3.14 -1.85)"/>
									        <path class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10" d="M401,274.1s-.37-12.75,5.25-3.5.38,7.13,0,7.13" transform="translate(-3.14 -1.85)"/>
									        <path class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10" d="M227.33,276.14s-.37-12.75,5.25-3.5.38,7.13,0,7.13" transform="translate(-3.14 -1.85)"/>
									        <path class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10" d="M55.49,276.14s-.37-12.75,5.25-3.5.38,7.13,0,7.13" transform="translate(-3.14 -1.85)"/>
									        <path class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10" d="M97.76,41.59s-2.5,4.83,2.83,2.33.67,2.67.67,2.67" transform="translate(-3.14 -1.85)"/>
									        <path class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10" d="M448.14,22.85s-2.5,4.83,2.83,2.33.67,2.67.67,2.67" transform="translate(-3.14 -1.85)"/>
									        <path class="cls-1" fill="none" stroke="#969da0" stroke-miterlimit="10" d="M246,44.18s.1,5.85,4.41-.28,2.26,1.66,2.26,1.66" transform="translate(-3.14 -1.85)"/>
									    </g>
									    <g class="g-particles g-particles-group-3 appear-animation" data-appear-animation="expandParticles" data-appear-animation-delay="1100">
									        <circle class="cls-2" fill="#969da0" stroke="#969da0" cx="4.77" cy="151" r="1.14" transform="translate(-108.51 45.76) rotate(-45)"/>
									        <circle class="cls-2" fill="#969da0" stroke="#969da0" cx="149.72" cy="30.16" r="1.14" transform="translate(19.39 112.85) rotate(-45)"/>
									        <circle class="cls-2" fill="#969da0" stroke="#969da0" cx="304.7" cy="3.48" r="1.14" transform="translate(83.64 214.63) rotate(-45)"/>
									        <circle class="cls-2" fill="#969da0" stroke="#969da0" cx="495.22" cy="155.04" r="1.14" transform="translate(32.28 393.74) rotate(-45)"/>
									        <circle class="cls-2" fill="#969da0" stroke="#969da0" cx="315.2" cy="163.8" r="1.14" transform="translate(-26.64 269.01) rotate(-45)"/>
									        <circle class="cls-2" fill="#969da0" stroke="#969da0" cx="153.42" cy="344.7" r="1.14" transform="translate(-201.94 207.59) rotate(-45)"/>
									        <circle class="cls-2" fill="#969da0" stroke="#969da0" cx="249.61" cy="406" r="1.14" transform="translate(-217.11 293.57) rotate(-45)"/>
									        <circle class="cls-2" fill="#969da0" stroke="#969da0" cx="313.32" cy="336.94" r="1.14" transform="translate(-149.62 318.39) rotate(-45)"/>
									        <circle class="cls-2" fill="#969da0" stroke="#969da0" cx="148.58" cy="172.2" r="1.14" transform="translate(-81.38 153.65) rotate(-45)"/>
									    </g>
									    <g class="g-particles g-particles-group-4 appear-animation" data-appear-animation="expandParticles" data-appear-animation-delay="1400">
									        <polyline class="cls-3" fill="none" stroke="#969da0" points="200.87 18.34 197.2 18.34 199.03 21"/>
									        <polyline class="cls-3" fill="none" stroke="#969da0" points="179.66 368.64 180.47 364.7 176.12 365.86"/>
									        <polyline class="cls-3" fill="none" stroke="#969da0" points="369.87 368.64 370.67 364.7 366.31 365.86"/>
									        <polyline class="cls-3" fill="none" stroke="#969da0" points="369.31 5.73 371.83 1.9 367.27 1.65"/>
									        <polyline class="cls-3" fill="none" stroke="#969da0" points="217.7 153.19 210.32 153.19 214.01 158.56"/>
									        <polyline class="cls-3" fill="none" stroke="#969da0" points="385.03 153.19 377.66 153.19 381.34 158.56"/>
									        <polyline class="cls-3" fill="none" stroke="#969da0" points="385.03 324.15 377.66 324.15 381.34 329.52"/>
									        <polyline class="cls-3" fill="none" stroke="#969da0" points="213.01 324.15 205.64 324.15 209.32 329.52"/>
									        <polyline class="cls-3" fill="none" stroke="#969da0" points="52.35 324.15 44.98 324.15 48.66 329.52"/>
									    </g>
									    <g class="g-particles g-particles-group-5 appear-animation" data-appear-animation="expandParticles" data-appear-animation-delay="1700">
									        <path class="cls-4" fill="none" stroke="#969da0" d="M264.48,188.12s-4,8.83,3.33,6.17,5.67-.5,5.67-.5-1.33,3.67-2.17,3.5" transform="translate(-3.14 -1.85)"/>
									        <path class="cls-4" fill="none" stroke="#969da0" d="M444.52,179.07s-4,8.83,3.33,6.17,5.67-.5,5.67-.5-1.33,3.67-2.17,3.5" transform="translate(-3.14 -1.85)"/>
									        <path class="cls-4" fill="none" stroke="#969da0" d="M94.23,196.91s-4,8.83,3.33,6.17,5.67-.5,5.67-.5-1.33,3.67-2.17,3.5" transform="translate(-3.14 -1.85)"/>
									        <path class="cls-4" fill="none" stroke="#969da0" d="M92.81,369.86s-2.63,6.55,2.19,4.57,3.73-.37,3.73-.37-.88,2.72-1.43,2.6" transform="translate(-3.14 -1.85)"/>
									        <path class="cls-4" fill="none" stroke="#969da0" d="M269.94,368.71c.06-.09,3.2,5.44,4.68,2,2-4.8,2.54-2.76,2.54-2.76s1.15,2.61.66,2.89" transform="translate(-3.14 -1.85)"/>
									    </g>
									    <g class="g-particles g-particles-group-6 appear-animation" data-appear-animation="expandParticles" data-appear-animation-delay="2000">
									        <polyline class="cls-5" fill="#969da0" stroke="#969da0" points="8.58 76.55 13.71 78.42 12.58 72.8"/>
									        <polyline class="cls-5" fill="#969da0" stroke="#969da0" points="8.58 228.65 13.71 230.53 12.58 224.9"/>
									        <polyline class="cls-5" fill="#969da0" stroke="#969da0" points="178.55 238.99 183.68 240.86 182.55 235.24"/>
									        <polyline class="cls-5" fill="#969da0" stroke="#969da0" points="349.47 240.53 354.59 242.4 353.47 236.78"/>
									        <polyline class="cls-5" fill="#969da0" stroke="#969da0" points="338.72 402.28 343.84 404.15 342.72 398.53"/>
									        <polyline class="cls-5" fill="#969da0" stroke="#969da0" points="147.72 399.46 152.84 401.34 151.72 395.71"/>
									        <polyline class="cls-5" fill="#969da0" stroke="#969da0" points="482.39 209.27 485.95 213.4 487.71 207.94"/>
									        <polyline class="cls-5" fill="#969da0" stroke="#969da0" points="349.58 66.58 354.83 68.06 353.29 62.54"/>
									    </g>
									</svg>
									<div class="particles-rect bg-primary d-none d-md-block" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 4, 'transition': true}"></div>
									<img src="<?=$base?>img/particles-featured-image.jpg" class="img-fluid" alt="" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 4, 'horizontal': true, 'transition': true}" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
									
									<h2 class="word-rotator letters type font-weight-bold text-5 mb-3">
										<span><?=$lang["index"]["combi başlık"]?></span>
									</h2>
								</div>
								<p class="lead mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"><?=$lang["index"]["combi altbaşlık"]?></p>
				
								<p class="mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
									<?=$lang["index"]["combi açıklama 1"]?><br>
									<?=$lang["index"]["combi açıklama 2"]?>
								</p>
				
								<div class="d-block d-sm-inline-block text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
									<?php if($_SESSION["dil"]=="en") { $combiyaz = "en/car-refrigerator/marine-series/mpm-3846-combi-28-lt-cooler-car-refrigerator/"; }
										  else { $combiyaz = "arac-buzdolabi/marin/mpm-3846-combi-28-lt-sogutucu-arac-buzdolabi/"; }
									?>
									<a href="<?=$base?><?=$combiyaz?>" class="btn btn-outline btn-rounded btn-primary btn-v-3 btn-h-4 font-weight-bold mt-3 text-0"><?=$lang["index"]["ürünü incele"]?></a>
								</div>
							</div>
						</div>
					</div>
				</section>




				<section class="section call-to-action bg-primary call-to-action-text-light call-to-action-text-background mt-2 mb-2">
					<span class="text-background text-color-light font-primary font-weight-bold appear-animation animated textBgFadeInUp appear-animation-visible" data-appear-animation="textBgFadeInUp" data-appear-animation-delay="800" style="animation-delay: 800ms;">NINKASI</span>
					<div class="container">
						<div class="row">
							<div class="col-md-9 col-lg-9">
								<div class="call-to-action-content text-center text-md-left appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" style="animation-delay: 100ms;">
									<h2 class="font-weight-semibold"><?=$lang["index"]["katalog başlık"]?></h2>
									<p class="font-weight-light mb-0"><?=$lang["index"]["katalog alt başlık"]?></p>
								</div>
							</div>
							<div class="col-md-3 col-lg-3">
								<div class="call-to-action-btn appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" style="animation-delay: 100ms;">
									<a href="catalog.pdf" target="_blank" class="btn btn-light btn-outline btn-rounded font-weight-semibold btn-h-3 btn-v-3"><?=$lang["index"]["katalog buton"]?></a>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section bg-light-5">
					<div class="container">
						<div class="row text-center justify-content-center">
							<div class="col-11 col-md-9 col-lg-7">
								<div class="overflow-hidden mb-3">
									<h2 class="font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200"><?=$lang["anasayfa"]["blog_title"]?></h2>
								</div>
								<div class="overflow-hidden mb-5">
									<p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400"><?=$lang["anasayfa"]["blog_descr"]?></p>
								</div>
							</div>
						</div>
					</div>
					<div class="container-fluid">
						<div class="row justify-content-center">
							<div class="col-10 col-sm-8 col-md-12 overflow-hidden p-0">
								<div class="owl-carousel carousel-center-active-items carousel-center-active-items-style-2 dots-style-3 pb-4 mb-0" data-plugin-carousel data-plugin-options="{'autoplay': false, 'dots': true, 'nav': false, 'loop': true, 'margin': 40, 'responsive': { '0': {'items': 1}, '576': {'items': 1}, '768': {'items': 3}, '992': {'items': 3}, '1200': {'items': 5}}}">
									<?php if($_SESSION["dil"]=="en") { $blog = "blog_en"; } else { $blog = "blog"; }?>
									<?php
									$sql = $mysqli->query("SELECT * FROM ".$blog." WHERE durum!='-1' ORDER BY id ASC;");
									while($blog = $sql->fetch_array(MYSQLI_ASSOC)){
									?>
									<div>
										<article class="card bg-light rounded border-0 appear-animation" data-appear-animation="fadeInScale" data-appear-animation-duration="500ms" data-appear-animation-delay="600" style="height:600px;">
											<div class="card-body p-5">
												<img src="<?=$base.$blog["foto"]?>"><br>
												<h3 class="font-weight-bold text-4 mb-1"><a href="<?=$base?><?=$link["blog"]?><?=$blog["url"]?>/" class="link-color-dark"><?=$blog["baslik"]?></a></h3>
												<div class="d-flex opacity-6 my-2">
													<span class="post-likes d-flex align-items-center border border-grey border-top-0 border-bottom-0 border-left-0 pl-0 pr-3">
														<i class="far fa-clock text-3 mr-1" aria-label=""></i> <?=$blog["create_date"]?>
													</span>
													<span class="post-comments d-flex align-items-center px-3">
														<i class="lnr lnr-eye text-3 mr-1" aria-label="1 users comment this post"></i> 1920
													</span>
												</div>
												<p><a href="<?=$base?><?=$link["blog"]?><?=$blog["url"]?>/" class="text-color-dark d-block"><?=$blog["spot"]?></a></p>
												<a href="<?=$base?><?=$link["blog"]?><?=$blog["url"]?>/" class="text-color-primary font-weight-bold learn-more"><?=$lang["anasayfa"]["devamını oku"]?> <i class="fas fa-angle-right text-3" aria-label="Devamını Oku"></i></a>
											</div>
										</article>
									</div>
									<?php } ?>

								</div>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row mt-4">
							<div class="col d-flex justify-content-center">
								<a href="<?=$base?><?=$link["blog"]?>" class="btn btn-primary btn-outline btn-rounded btn-v-3 btn-h-4 font-weight-semibold"><?=$lang["anasayfa"]["tüm yazılar"]?></a>	
							</div>
						</div>
					</div>
				</section>
			 </div>
			 <?php include("inc/footer.php");?>
		</div>

		<?php include("inc/scripts.php");?>

	</body>
</html>