
<footer class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <p>{{ __('misc.about_us_title') }}</p>
                <p>Welkom bij onze webpagina voor handleidingen. Wij zijn de meest grote experts op dit grondgebied. Als u iets zoekt, hebben wij het. Als wij het niet hebben, jammer dan.</p>
            </div>

            <div class="col-sm-4">
                <p>{{ __('misc.contact') }}</p>
                <a href="/contact/">{{ __('misc.contact_form') }}</a>
                <p>contact@example.com</p>
                <p>+31 6 12 34 56 78</p>
            </div>

            <div class="col-sm-4">
                <a href="#">{{ __('misc.socials') }}</a>
                <a href="#">Twitter</a>
                <a href="#">Instagram</a>
            </div>
        </div>

        <div class="text-center">© {{ __('misc.copyright') }}</div>
    </div>
</footer>


<!-- analytics code -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30506707-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<!-- Einde analytics code -->

<script language="Javascript" type="text/javascript">

 if (top.location!= self.location) {
  top.location = self.location.href
 }

</script>
