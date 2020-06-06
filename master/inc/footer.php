			<footer id="footer" class="footer-hover-links-light mt-0">
				<div class="container">
					<div class="featured-boxes">
						<div class="row">
							<div class="featured-box col-lg-4">
								<a class="text-decoration-none" href="#">
									<i class="lnr lnr-history text-color-light"></i> 
									<h2 class="text-1 mb-0 pt-1"><?=$lang["footer"]["3yil"]?></h2>
									<p><?=$lang["footer"]["3yil alt"]?></p>
								</a>
							</div>
							<div class="featured-box col-lg-4">
								<a class="text-decoration-none" href="#">
									<i class="lnr lnr-leaf text-color-light"></i>
									<h2 class="text-1 mb-0 pt-1"><?=$lang["footer"]["doga"]?></h2>
									<p><?=$lang["footer"]["doga alt"]?></p>
								</a>
							</div>
							<div class="featured-box col-lg-4">
								<a class="text-decoration-none" href="#">
									<i class="lnr lnr-phone-handset text-color-light"></i> 
									<h2 class="text-1 mb-0 pt-1"><?=$lang["footer"]["teknik"]?></h2>
									<p><?=$lang["footer"]["teknik alt"]?></p>
								</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-5 mb-4 mb-lg-0">
							<a href="index.html" class="logo">
								<img alt="" class="img-fluid mb-3" src="<?=$base?>img/logo_white.png" style="width: 230px">
							</a>
							<p class="text-white"><?=$lang["footer"]["hakkimizda"]?></p>
							<ul class="list list-icon list-unstyled">
								<li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1 text-white"></i> <span class="text-color-light"><?=$lang["footer"]["adres_title"]?>:</span> <?=$lang["footer"]["adres_descr"]?></li>
								<li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1 text-white"></i> <span class="text-color-light"><?=$lang["footer"]["tel_title"]?>:</span> <a href="tel:+1234567890"><?=$lang["footer"]["tel_descr"]?></a></li>
								<li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1 text-white"></i> <span class="text-color-light"><?=$lang["footer"]["email_title"]?>:</span> <a href="mailto:mail@example.com" class="link-underline-light"><?=$lang["footer"]["email_descr"]?></a></li>
							</ul>
						</div>
						<div class="col-lg-3 mb-4 mb-lg-0">
							<h2 class="text-3 mb-3"><?=$lang["footer"]["menu"]?></h2>
							<ul class="list list-icon list-unstyled">
								<li class="mb-2 text-white"><i class="fas fa-angle-right mr-2 ml-1"></i> <a href="<?=$base?>" class="text-white"><?=$lang["menu"]["anasayfa"]?></a></li>
								<li class="mb-2 text-white"><i class="fas fa-angle-right mr-2 ml-1"></i> <a href="<?=$base?><?=$link["kurumsal"]?>" class="text-white"><?=$lang["menu"]["kurumsal"]?></a></li>
								<li class="mb-2 text-white"><i class="fas fa-angle-right mr-2 ml-1"></i> <a href="<?=$base?><?=$link["kategorilink"]?>" class="text-white"><?=$lang["menu"]["ürünlerimiz"]?></a></li>
								<li class="mb-2 text-white"><i class="fas fa-angle-right mr-2 ml-1"></i> <a href="<?=$base?><?=$link["teknik"]?>" class="text-white"><?=$lang["menu"]["bakım ve teknik bilgi"]?></a></li>
								<li class="mb-2 text-white"><i class="fas fa-angle-right mr-2 ml-1"></i> <a href="<?=$base?><?=$link["blog"]?>" class="text-white"><?=$lang["menu"]["blog"]?></a></li>
								<li class="mb-2 text-white"><i class="fas fa-angle-right mr-2 ml-1"></i> <a href="<?=$base?><?=$link["iletisim"]?>" class="text-white"><?=$lang["menu"]["iletişim"]?></a></li>
								<li class="mb-2 text-white"><i class="fas fa-angle-right mr-2 ml-1"></i> <a href="<?=$base?>sitemap.php" class="text-white"><?=$lang["genel"]["sitemap"]?></a></li>
							</ul>
						</div>
						<div class="col-lg-3 mb-4 mb-lg-0">
							<h2 class="text-3 mb-3"><?=$lang["footer"]["menu2"]?></h2>
							<ul class="list list-icon list-unstyled">
								<li class="mb-2 text-white"><i class="fas fa-angle-right mr-2 ml-1"></i> <a href="<?=$base?><?=$link["tirkamyon"]?>" class="text-white"><?=$lang["seri"]["tir"]?></a></li>
								<li class="mb-2 text-white"><i class="fas fa-angle-right mr-2 ml-1"></i> <a href="<?=$base?><?=$link["marin"]?>" class="text-white"><?=$lang["seri"]["marin"]?></a></li>
								<li class="mb-2 text-white"><i class="fas fa-angle-right mr-2 ml-1"></i> <a href="<?=$base?><?=$link["bireysel"]?>" class="text-white"><?=$lang["seri"]["bireysel"]?></a></li>
								<li class="mb-2 text-white"><i class="fas fa-angle-right mr-2 ml-1"></i> <a href="<?=$base?><?=$link["offroad"]?>" class="text-white"><?=$lang["seri"]["offroad"]?></a></li>
								<li class="mb-2 text-white"><i class="fas fa-angle-right mr-2 ml-1"></i> <a href="<?=$base?><?=$link["vip"]?>" class="text-white"><?=$lang["seri"]["otobus"]?></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row text-center text-md-left align-items-center">
							<div class="col-md-6 col-lg-6">
								<ul class="social-icons social-icons-transparent social-icons-icon-light social-icons-lg">
									<li class="social-icons-facebook"><a href="<?=$iletisim["facebook"]?>" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
									<li class="social-icons-instagram"><a href="<?=$iletisim["instagram"]?>" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
									<li class="social-icons-youtube"><a href="<?=$iletisim["youtube"]?>" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a></li>
								</ul>
							</div>
							<div class="col-md-6 col-lg-6">
								<p class="text-md-right pb-0 mb-0 text-white"><?=$lang["footer"]["copyright"]?> by <a href="https://www.ajansfeedback.com" target="_blank">Ajans Feedback</a></p>
							</div>
						</div>
					</div>
				</div>
			</footer>

