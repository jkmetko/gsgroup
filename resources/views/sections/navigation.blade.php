
<section id="navigation" class="shadow">

    <div class="inner navigation">

        <!-- Logo Img -->
        <div class="logo container">
            <a class="scroll" href="#home"><img src="{{ asset('assets/images/logo.png') }}" alt="Logo"/></a>
        </div>

        <!-- Nav Menu -->
        <div class="nav-menu container">

            <ul class="nav main-nav">

                <li class="active"><a class="scroll" href="#home">Domov</a></li>
                <li><a class="scroll" href="#about">O nás</a></li>
                <li class="dropdown-toggle nav-toggle"><a class="scroll" href="blog.html">Služby <b data-toggle="dropdown" class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="blog.html">Okamžité šetrenie</a></li>
                        <li><a href="blog_01.html">Starostlivosť</a></li>
                        <li><a href="blog_02.html">Ochutnávky</a></li>
                        <li><a href="blog_02.html">Servis zdarma</a></li>
                        <li><a href="blog_02.html">Osobný prístup</a></li>
                    </ul>
                </li>
                <li><a class="scroll" href="#history">Ponuka</a></li>
                <li><a class="scroll" href="#history">Servis</a></li>
                {{--<li class="dropdown-toggle nav-toggle"><a class="scroll" href="blog.html">blog <b data-toggle="dropdown" class="caret"></b></a>--}}

                    {{--<ul class="dropdown-menu">--}}

                        {{--<li><a href="blog.html">Blog Full Width</a></li>--}}
                        {{--<li><a href="blog_01.html">With Sidebar Right</a></li>--}}
                        {{--<li><a href="blog_02.html">With Sidebar Left</a></li>--}}

                    {{--</ul>--}}

                {{--</li>--}}
                <li><a class="scroll" href="#contact">contact</a></li>

            </ul>

        </div>


        <!-- Dropdown Menu For Mobile Devices-->
        <div class="dropdown mobile-drop">
            <a data-toggle="dropdown" class="mobile-menu" href="#"><i class="fa fa-bars"></i></a>
            <ul class="nav dropdown-menu fullwidth" role="menu" >
                <li><a class="scroll" href="#home">home</a></li>
                <li><a class="scroll" href="#about">about</a></li>
                <li><a class="scroll" href="#features">features</a></li>
                <li><a class="scroll" href="#history">history</a></li>
                <li><a class="scroll" href="#team">team</a></li>
                <li><a class="scroll" href="#portfolio">portfolio</a></li>
                <li><a class="scroll" href="#services">services</a></li>
                <li><a class="scroll" href="#prices">prices</a></li>
                <li class="dropdown-toggle mobile-toggle"><a class="scroll">blog <b data-toggle="dropdown" class="caret"></b></a>

                    <ul class="dropdown-menu dr-mobile">

                        <li><a href="blog.html">Blog Full Width</a></li>
                        <li><a href="blog_01.html">With Sidebar Right</a></li>
                        <li><a href="blog_02.html">With Sidebar Left</a></li>

                    </ul>

                </li>
                <li><a class="scroll" href="#contact">contact</a></li>
            </ul>
        </div>

        <div class="clear"></div>
    </div>

</section>
<!-- End Navigation Section -->