<footer class="footer footer-topbar black-bg">
    <div class="copyright">
        <div class="container">
        <div class="row">
            <div class="col-lg-6">
            {{-- <img class="img-fluid mb-10" id="logo-footer" src="{{URL::asset('Front/images/logo.png')}}"alt> --}}
            <div class="footer-text">
                <p> &copy;Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span>
                <a href="javascript:void(0)"> Chetan Overseas </a> All Rights Reserved </p>
            </div>
            </div>
            <div class="col-lg-6">
            <div class="social-icons color-hover text-left text-lg-right mt-20">
                <ul class="clearfix">
                <li class="social-facebook"><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                <li class="social-twitter"><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                <li class="social-dribbble"><a href="javascript:void(0)"><i class="fa fa-dribbble"></i>
                    </a></li>
                <li class="social-linkedin"><a href="javascript:void(0)"><i class="fa fa-linkedin"></i>
                    </a></li>
                </ul>
            </div>
            </div>
        </div>
        </div>
    </div>
</footer>

</div>

<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>

<!--=================================
 jquery -->

<!-- jquery -->
<script src="{{ URL::asset('Front/js/jquery-3.3.1.min.js')}}"></script>

<!-- plugins-jquery -->
<script src="{{ URL::asset('Front/js/plugins-jquery.js')}}"></script>

<!-- plugin_path -->
<script>var plugin_path = "{{asset('Front/js')}}/";</script>

<!-- REVOLUTION JS FILES -->
<script src="{{ URL::asset('Front/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{ URL::asset('Front/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{ URL::asset('Front/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{ URL::asset('Front/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{ URL::asset('Front/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{ URL::asset('Front/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{ URL::asset('Front/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{ URL::asset('Front/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{ URL::asset('Front/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{ URL::asset('Front/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{ URL::asset('Front/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<!-- revolution custom -->
<script src="{{ URL::asset('Front/revolution/js/revolution-custom.js')}}"></script>

<script src="{{ URL::asset('Front/js/mega-menu/mega_menu.js')}}"></script>
<script src="{{ URL::asset('Front/js/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ URL::asset('Front/js/nicescroll/jquery.nicescroll.js')}}"></script>
<script src="{{ URL::asset('Front/js/isotope/isotope.pkgd.min.js')}}"></script>

<!-- custom -->
<script src="{{ URL::asset('Front/js/custom.js')}}"></script>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/66b71405146b7af4a438953d/1i4ticdlq';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>
<script>
    var wa_btnSetting = {"btnColor":"#16BE45","ctaText":"WhatsApp Us","cornerRadius":40,"marginBottom":20,"marginLeft":20,"marginRight":20,"btnPosition":"left","whatsAppNumber":"919824202828","welcomeMessage":"Hello","zIndex":999999,"btnColorScheme":"light"};
    window.onload = () => {
    _waEmbed(wa_btnSetting);
    };
</script>
<script>
    function sendWhatsAppMessage(param){
        var wa_btnSetting = {"btnColor":"#16BE45","ctaText":"WhatsApp Us","cornerRadius":40,"marginBottom":20,"marginLeft":20,"marginRight":20,"btnPosition":"left","whatsAppNumber":"919824202828","welcomeMessage":param,"zIndex":999999,"btnColorScheme":"light"};
        window.onload = () => {
        _waEmbed(wa_btnSetting);
        };
    }
</script>

    <!--End of Tawk.to Script-->
</body>
</html>
