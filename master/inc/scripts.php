<script src="<?=$base?>vendor/jquery/jquery.min.js"></script>
<script src="<?=$base?>vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="<?=$base?>vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?=$base?>vendor/jquery-cookie/jquery-cookie.min.js"></script>
<script src="<?=$base?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?=$base?>vendor/common/common.min.js"></script>
<script src="<?=$base?>vendor/jquery.validation/jquery.validation.min.js"></script>
<script src="<?=$base?>vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
<script src="<?=$base?>vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="<?=$base?>vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
<script src="<?=$base?>vendor/isotope/jquery.isotope.min.js"></script>
<script src="<?=$base?>vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="<?=$base?>vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?=$base?>vendor/vide/vide.min.js"></script>
<script src="<?=$base?>vendor/vivus/vivus.min.js"></script>
<script src="<?=$base?>js/theme.js"></script>
<script src="<?=$base?>vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="<?=$base?>vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?=$base?>vendor/jquery.mask/jquery.mask.js"></script>
<script src="<?=$base?>js/custom.js"></script>
<script src="<?=$base?>js/theme.init.js"></script>
<script src="<?=$base?>js/examples/examples.portfolio.js"></script>
<script src="<?=$base?>js/examples/examples.gallery.js"></script>
<script>
$(document).ready(function() {
    $(".langsec").click(function() {
        var dil = $(this).attr("data-id");
        /**/
		$.ajax({       
			type: "POST",
			url:  "<?=$base?>ajax/langsec.php",
			data : "lang="+dil,
			success: function(sonuc)
			{
                console.log(sonuc);
                window.location.href = "<?=$base?>";
			}
		});
		/**/
    });
});
</script>

<script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-46873297-1']);
        _gaq.push(['_trackPageview']);
        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function () {
                try {
                    w.yaCounter30057094 = new Ya.Metrika({id: 30057094,
                        webvisor: true,
                        clickmap: true,
                        trackLinks: true,
                        accurateTrackBounce: true});
                } catch (e) {
                }
            });

            var n = d.getElementsByTagName("script")[0],
                    s = d.createElement("script"),
                    f = function () {
                        n.parentNode.insertBefore(s, n);
                    };
            s.type = "text/javascript";
            s.async = true;
            s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else {
                f();
            }
        })(document, window, "yandex_metrika_callbacks");
</script>
<!-- /Yandex.Metrika counter -->

<?xml version="1.0" encoding="UTF-8" standalone="no"?>
  <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
    <defs>
      <filter id="goo">
        <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
        <feBlend in="SourceGraphic" in2="goo" />
      </filter>
    </defs>
  </svg>
  <?xml version="1.0" encoding="UTF-8" standalone="no"?>
  <svg
    xmlns="http://www.w3.org/2000/svg"
    version="1.1">
    <defs>
      <filter id="protanopia">
        <feColorMatrix
          in="SourceGraphic"
          type="matrix"
          values="0.567, 0.433, 0,     0, 0
                  0.558, 0.442, 0,     0, 0
                  0,     0.242, 0.758, 0, 0
                  0,     0,     0,     1, 0"/>
      </filter>
      <filter id="protanomaly">
        <feColorMatrix
          in="SourceGraphic"
          type="matrix"
          values="0.817, 0.183, 0,     0, 0
                  0.333, 0.667, 0,     0, 0
                  0,     0.125, 0.875, 0, 0
                  0,     0,     0,     1, 0"/>
      </filter>
      <filter id="deuteranopia">
        <feColorMatrix
          in="SourceGraphic"
          type="matrix"
          values="0.625, 0.375, 0,   0, 0
                  0.7,   0.3,   0,   0, 0
                  0,     0.3,   0.7, 0, 0
                  0,     0,     0,   1, 0"/>
      </filter>
      <filter id="deuteranomaly">
        <feColorMatrix
          in="SourceGraphic"
          type="matrix"
          values="0.8,   0.2,   0,     0, 0
                  0.258, 0.742, 0,     0, 0
                  0,     0.142, 0.858, 0, 0
                  0,     0,     0,     1, 0"/>
      </filter>
      <filter id="tritanopia">
        <feColorMatrix
          in="SourceGraphic"
          type="matrix"
          values="0.95, 0.05,  0,     0, 0
                  0,    0.433, 0.567, 0, 0
                  0,    0.475, 0.525, 0, 0
                  0,    0,     0,     1, 0"/>
      </filter>
      <filter id="tritanomaly">
        <feColorMatrix
          in="SourceGraphic"
          type="matrix"
          values="0.967, 0.033, 0,     0, 0
                  0,     0.733, 0.267, 0, 0
                  0,     0.183, 0.817, 0, 0
                  0,     0,     0,     1, 0"/>
      </filter>
      <filter id="achromatopsia">
        <feColorMatrix
          in="SourceGraphic"
          type="matrix"
          values="0.299, 0.587, 0.114, 0, 0
                  0.299, 0.587, 0.114, 0, 0
                  0.299, 0.587, 0.114, 0, 0
                  0,     0,     0,     1, 0"/>
      </filter>
      <filter id="achromatomaly">
        <feColorMatrix
          in="SourceGraphic"
          type="matrix"
          values="0.618, 0.320, 0.062, 0, 0
                  0.163, 0.775, 0.062, 0, 0
                  0.163, 0.320, 0.516, 0, 0
                  0,     0,     0,     1, 0"/>
      </filter>
    </defs>
  </svg>
  <script src="<?=$base?>master/colorfilter/scripts/vue.min.js"></script>
  <script src="<?=$base?>master/colorfilter/scripts/main.js"></script>