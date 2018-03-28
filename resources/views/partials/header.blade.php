<!--Start Nav-->
<div class="nav-container">
    <div>
        <div class="bar bar--sm visible-xs">
            <div class="container">
                <div class="row">
                    <div class="col-3 col-md-2">
                        <a href="{{ url('/') }}"> <img class="logo logo-dark" alt="logo" src="{{ asset('public/img/logo-icon.png') }}"> <img class="logo logo-light" alt="logo" src="{{ asset('public/img/logo-icon.png') }}"> </a>
                    </div>
                    <div class="col-9 col-md-10 text-right">
                        <a href="#" class="hamburger-toggle" data-toggle-class="#menu2;hidden-xs hidden-sm"> <i class="icon icon--sm stack-interface stack-menu"></i> </a>
                    </div>
                </div>
            </div>
        </div>
        <nav id="menu2" class="bar bar-2 hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 text-center text-left-sm hidden-xs order-lg-2">
                        <div class="bar__module">
                            <a href="{{ url('/') }}"> <img class="logo logo-dark" alt="logo" src="{{ asset('public/img/logo.png') }}"> <img class="logo logo-light" alt="logo" src="{{ asset('public/img/logo.png') }}"> </a>
                        </div>
                    </div>
                    <div class="col-lg-5 order-lg-1">
                        <div class="bar__module">
                            <ul class="menu-horizontal text-left">
                                <li> <a href="#">STARTSITE</a> </li>
                                <li> <a href="#">KANDIDATEN</a> </li>
                                <li> <a href="#">WIR SIND</a> </li>
                                <li> <a href="#contact">KONTAKT</a> </li>
                        </div>
                    </div>
                    <div class="col-lg-5 text-right text-left-xs text-left-sm order-lg-3">
                        <div class="bar__module">
                            <a class="btn btn--primary type--uppercase" href="{{'job-builder'}}"> <span class="btn__text">
                                            Build your dream job
                                        </span> </a>

                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>

<!--End Nav-->