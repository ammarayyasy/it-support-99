<!DOCTYPE html>

<html lang="en" class="no-js">
   
<head>
    <meta charset="utf-8"/>
    <title>FlameOnePage Free Template by FairTech</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="FlameOnePage freebie theme for web startups by FairTech SEO." name="description"/>
    <meta content="FairTech" name="author"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">

    <!-- Font Awesome CDN -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <!-- Justified Gallery CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/justifiedGallery/dist/css/justifiedGallery.min.css" />

    <!-- Vendor & Custom CSS -->
    <link href="{{ asset('vendor/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/css/swiper.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/layout.min.css') }}" rel="stylesheet" type="text/css"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}"/>

    <style>
        /* Overlay styling */
        .work-popup-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.8);
        display: none;
        justify-content: center;
        align-items: center;
        z-index: 9999;
        }

        /* Modal content styling */
        .work-popup-content {
        background: #fff;
        padding: 20px;
        max-width: 800px;
        width: 90%;
        max-height: 90%;
        overflow-y: auto;
        border-radius: 8px;
        box-shadow: 0 0 20px rgba(0,0,0,0.3);
        }

        .work-popup-close {
        display: inline-block;
        margin-bottom: 10px;
        text-decoration: none;
        color: #333;
        font-weight: bold;
        }
    </style>
</head>

   
<!-- BEGIN BODY -->
<body id="body" data-spy="scroll" data-target=".header">

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    <!--========== FOOTER ==========-->
    <footer class="footer">
        <!-- Links -->
        <div class="section-seperator">
            <div class="content-md container">
                <div class="row">
                    <div class="col-sm-2 sm-margin-b-30">
                        <!-- List -->
                        <ul class="list-unstyled footer-list">
                            <li class="footer-list-item"><a href="#body">Home</a></li>
                            <li class="footer-list-item"><a href="#about">Team</a></li>
                            <li class="footer-list-item"><a href="#work">Credentials</a></li>
                            <li class="footer-list-item"><a href="#contact">Contact</a></li>
                        </ul>
                        <!-- End List -->
                    </div>
                    <div class="col-sm-2 sm-margin-b-30">
                        <!-- List -->
                        <ul class="list-unstyled footer-list">
                            <li class="footer-list-item"><a href="#">Twitter</a></li>
                            <li class="footer-list-item"><a href="#">Facebook</a></li>
                            <li class="footer-list-item"><a href="#">Instagram</a></li>
                            <li class="footer-list-item"><a href="#">YouTube</a></li>
                        </ul>
                        <!-- End List -->
                    </div>
                    <div class="col-sm-3">
                        <!-- List -->
                        <ul class="list-unstyled footer-list">
                            <li class="footer-list-item"><a href="#">Subscribe to Our Newsletter</a></li>
                            <li class="footer-list-item"><a href="#">Privacy Policy</a></li>
                            <li class="footer-list-item"><a href="#">Terms &amp; Conditions</a></li>
                        </ul>
                        <!-- End List -->
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Links -->

        <!-- Copyright -->
        <div class="content container">
            <div class="row">
                <div class="col-xs-6">
                    <img class="footer-logo" src="{{ asset('img/logo-dark.png') }}" alt="flameonepage Logo">
                </div>
                <div class="col-xs-6 text-right">
                    <p class="margin-b-0">
                        <a class="fweight-700" href="#">FlameOnePage</a> Theme Powered by: 
                        <a class="fweight-700" href="#">FairTech Studio</a>
                    </p>
                </div>
            </div>
            <!--// end row -->
        </div>
        <!-- End Copyright -->

    </footer>
    <!--========== END FOOTER ==========-->

    <!-- Back To Top -->
    <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

    <!-- JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) -->
    <!-- CORE PLUGINS -->
    <script src="{{ asset('vendor/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/jquery-migrate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>

    <!-- PAGE LEVEL PLUGINS -->
    <script src="{{ asset('vendor/jquery.easing.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/jquery.back-to-top.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/jquery.smooth-scroll.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/jquery.wow.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/swiper/js/swiper.jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/masonry/jquery.masonry.pkgd.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/masonry/imagesloaded.pkgd.min.js') }}" type="text/javascript"></script>

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('js/layout.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/components/wow.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/components/swiper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/components/masonry.min.js') }}" type="text/javascript"></script>

    <!-- Scripts -->
    {{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/justifiedGallery/dist/js/jquery.justifiedGallery.min.js"></script>
    <script>
        $(function () {
            $('#gallery').justifiedGallery({
                rowHeight: 200,        // semua gambar distandarkan ke tinggi 200px
                margins: 5,
                lastRow: 'nojustify',
                captions: false
            });
        });
    </script>

    <script>
        document.querySelectorAll('.open-popup').forEach(item => {
            item.addEventListener('click', function() {
                let target = this.getAttribute('data-target');
                document.querySelector(target).style.display = 'flex';
            });
        });

        document.querySelectorAll('.work-popup-close').forEach(btn => {
            btn.addEventListener('click', function() {
                this.closest('.work-popup-overlay').style.display = 'none';
            });
        });

        document.querySelectorAll('.work-popup-overlay').forEach(overlay => {
            overlay.addEventListener('click', function(e) {
                if (e.target === overlay) {
                    overlay.style.display = 'none';
                }
            });
        });
    </script>

</body>
<!-- END BODY -->
</html>