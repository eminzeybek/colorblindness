<div class="header-top">
						<div class="header-top-container container">
							<div class="header-row">
								<div class="header-column justify-content-start">
									<span class="d-none d-sm-flex align-items-center">
										<i class="fas fa-map-marker-alt mr-1"></i>
										<?=$lang["header"]["adres"]?>
									</span>
									<?php if($iletisim["tel1"]!="") {?>
									<span class="d-none d-sm-flex align-items-center ml-4">
										<i class="fas fa-phone mr-1"></i>
										<a href="tel:+<?=$iletisim["tel1"]?>"><?=$iletisim["tel1"]?></a>
									</span>
									<?php } if($iletisim["tel2"]!="") {?>
									<span class="d-none d-sm-flex align-items-center ml-4">
										<i class="fas fa-phone mr-1"></i>
										<a href="tel:+<?=$iletisim["tel2"]?>"><?=$iletisim["tel2"]?></a>
									</span>
									<?php } ?>
								</div>
								<div class="header-column justify-content-end">
									
									<ul class="header-top-social-icons social-icons social-icons-transparent d-none d-md-block">
										
										<?php if($iletisim["facebook"]!="") { ?>
										<li class="social-icons-facebook">
											<a href="<?=$iletisim["facebook"]?>" target="_blank" title="Ninkasi Facebook"><i class="fab fa-facebook-f"></i></a>
										</li>
										<?php } ?>
										
										<?php if($iletisim["twitter"]!="") { ?>
										<li class="social-icons-twitter">
											<a href="<?=$iletisim["twitter"]?>" target="_blank" title="Ninkasi Twitter"><i class="fab fa-twitter"></i></a>
										</li>
										<?php } ?>
										
										<?php if($iletisim["instagram"]!="") { ?>
										<li class="social-icons-instagram">
											<a href="<?=$iletisim["instagram"]?>" target="_blank" title="Ninkasi Instagram"><i class="fab fa-instagram"></i></a>
										</li>
										<?php } ?>
										
										<?php if($iletisim["linkedin"]!="") { ?>
										<li class="social-icons-linkedin">
											<a href="<?=$iletisim["linkedin"]?>" target="_blank" title="Ninkasi Linkedin"><i class="fab fa-linkedin"></i></a>
										</li>
										<?php } ?>
										
										<?php if($iletisim["youtube"]!="") { ?>
										<li class="social-icons-youtube">
											<a href="<?=$iletisim["youtube"]?>" target="_blank" title="Ninkasi Youtube"><i class="fab fa-youtube"></i></a>
										</li>
										<?php } ?>

									</ul>
									<?php
									if($_SESSION["dil"]!="")
									{
										if($_SESSION["dil"]=="tr") { $dil= "tr"; $yaz="Change Language"; }else if($_SESSION["dil"]=="en") { $dil ="us"; $yaz="Dil Seçin"; }
									}else 
									{
										$dil = "tr";
										$yaz = "Change Language";
									}
									
									?>
                                    <ul class="nav">
										<li class="nav-item">
											<a href="#" class="nav-link dropdown-menu-toggle py-2" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
											<img src="<?=$base?>img/blank.gif" class="flag flag-<?=$dil?>"> <?=$yaz?> <i class="fas fa-angle-down fa-sm"></i>
											</a>
											<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownLanguage">
												<li><a href="#" data-id="tr" class="no-skin langsec"><img src="<?=$base?>img/blank.gif" class="flag flag-tr" alt="Türkçe"> Türkçe</a></li>
												<li><a href="#" data-id="en" class="no-skin langsec"><img src="<?=$base?>img/blank.gif" class="flag flag-us" alt="English"> English</a></li>
											</ul>
										</li>
										
									</ul>


									<ul class="nav">
										<li class="nav-item">
											<a href="#" class="nav-link dropdown-menu-toggle py-2" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
												Protonomaly <i class="fas fa-angle-down fa-sm"></i>
											</a>
											<ul class="dropdown-menu dropdown-menu-right colorfilter" aria-labelledby="dropdownLanguage">

												<li><a href="javascript:void(0)" class="button" id="colorblind1">Protanopia</a></li>
												<li><a href="javascript:void(0)" class="button" id="colorblind2">Protanomaly</a></li>
												<li><a href="javascript:void(0)" class="button" id="colorblind3">Deuteranopia</a></li>
												<li><a href="javascript:void(0)" class="button" id="colorblind4">Deuteranomaly</a></li>
												<li><a href="javascript:void(0)" class="button" id="colorblind5">Tritanopia</a></li>
												<li><a href="javascript:void(0)" class="button" id="colorblind6">Tritanomaly</a></li>
												<li><a href="javascript:void(0)" class="button" id="colorblind7">Achromatopsia</a></li>
												<li><a href="javascript:void(0)" class="button" id="colorblind8">Achromatomaly</a></li>
											</ul>
										</li>
										<li class="nav-item">
											<a class="nav-link btn-primary text-white" href="<?=$base?>garanti.php" target="_blank"><?=$lang["menu"]["urun kayıt"]?></a>
										</li>
									</ul>
									
								</div>
							</div>
						</div>
					</div>