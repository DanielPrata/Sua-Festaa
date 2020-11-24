<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <title>Sua Festa | Sua Plataforma de Festas online</title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/homepage/images/favicon.png" type="image/png">
        
    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="assets/homepage/css/magnific-popup.css">
        
    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="assets/homepage/css/slick.css">
        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="assets/homepage/css/LineIcons.css">
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets/homepage/css/bootstrap.min.css">
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="assets/homepage/css/default.css">
    
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/homepage/css/style.css">

    <link rel="icon" type="icone.png" href="assets/imglogin/icon.png"/>
    
</head>

<body>
    
   
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->
    
    <!--====== NAVBAR TWO PART START ======-->

    <section class="navbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                       
                        <a class="navbar-brand" href="#">
                            <img src="assets/homepage/images/logo.png" alt="Logo" height="57px" width="210px">
                        </a>
                        
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo" aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item active"><a class="page-scroll" href="#home">Início</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#services">Sobre nós</a></li>
                                
                                <li class="nav-item"><a class="page-scroll" href="#pricing">Preços</a></li>
                            </ul>
                        </div>
                        
                        <div class="navbar-btn d-none d-sm-inline-block">
                            <ul>
                                <li><a class="solid" href="{{ route('login') }}">LOGIN</a></li>
                                <li><a class="solid" href="{{ route('register') }}">CADASTRE-SE</a></li>
                            </ul>
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== NAVBAR TWO PART ENDS ======-->
    
    <!--====== SLIDER PART START ======-->

    <section id="home" class="slider_area">
        <div id="carouselThree" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselThree" data-slide-to="0" class="active"></li>
                <li data-target="#carouselThree" data-slide-to="1"></li>
                <li data-target="#carouselThree" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <h1 class="title">Encontre o local ideal</h1>
                                    <p class="text">Nós do Sua Festa fazemos a conexão entre você e o proprietário de um local, agilizando o aluguel.</p>

                                    <ul class="slider-btn rounded-buttons">
                                        <li><a class="main-btn rounded-two" href="{{ route('login') }}">LOGIN</a></li>
                                        <li><a class="main-btn rounded-two" href="{{ route('register') }}">CADASTRAR</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                    <div class="slider-image-box d-none d-lg-flex align-items-end">
                        <div class="slider-image">
                            <img src="assets/homepage/images/slider/teste.svg" alt="Hero">
                        </div> <!-- slider-imgae -->
                    </div> <!-- slider-imgae box -->
                </div> <!-- carousel-item -->

                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <h1 class="title">Divulgue seu espaço</h1>
                                    <p class="text">Conte com nossas ferramentas e divulgue seu local para todos os usuários.</p>
                                    <ul class="slider-btn rounded-buttons">
                                       
                                        <li><a class="main-btn rounded-two" href="{{ route('login') }}">LOGIN</a></li>
                                        <li><a class="main-btn rounded-two" href="{{ route('register') }}">CADASTRAR</a></li>
                                    </ul>
                                </div> <!-- slider-content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                    <div class="slider-image-box d-none d-lg-flex align-items-end">
                        <div class="slider-image">
                            <img src="assets/homepage/images/slider/2.svg" alt="Hero">
                        </div> <!-- slider-imgae -->
                    </div> <!-- slider-imgae box -->
                </div> <!-- carousel-item -->

                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <h1 class="title">Gerador de convites</h1>
                                    <p class="text">Nosso gerador de convites te dá a possibilidade de criar um convite exclusivo pro seu evento.</p>
                                    <ul class="slider-btn rounded-buttons">
                                        <li><a class="main-btn rounded-two" href="{{ route('login') }}">LOGIN</a></li>
                                        <li><a class="main-btn rounded-two" href="{{ route('register') }}">CADASTRAR</a></li>
                                    </ul>
                                </div> <!-- slider-content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                    <div class="slider-image-box d-none d-lg-flex align-items-end">
                        <div class="slider-image">
                            <img src="assets/homepage/images/slider/3.svg" alt="Hero">
                        </div> <!-- slider-imgae -->
                    </div> <!-- slider-imgae box -->
                </div> <!-- carousel-item -->
            </div>

            <a class="carousel-control-prev" href="#carouselThree" role="button" data-slide="prev">
                <i class="lni lni-arrow-left"></i>
            </a>
            <a class="carousel-control-next" href="#carouselThree" role="button" data-slide="next">
                <i class="lni lni-arrow-right"></i>
            </a>
        </div>
    </section>

    <!--====== SLIDER PART ENDS ======-->
    
    <!--====== FEATRES TWO PART START ======-->

    <section id="services" class="features-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-10">
                        <h3 class="title">Sobre nós</h3>
                        <p class="text">Somos uma plataforma que úne pessoas interessadas em divulgar seu espaço com pessoas interessadas em realizar uma festa. Fazendo esse intermédio entre os dois e deixando mais rápida a realização do evento.</p>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title">Gerador de convites</h4>
                            <div class="features-icon">
                                <i class="lni lni-envelope"></i>
                                <img class="shape" src="assets/homepage/images/f-shape-1.svg" alt="Shape">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">Com apenas alguns dados é possível gerar um convite exclusivo da sua festa. Deixando mais fácil e rápido a realização do seu evento.</p>
                            
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title">Dashboard intuitiva</h4>
                            <div class="features-icon">
                                <i class="lni lni-dashboard"></i>
                                <img class="shape" src="assets/homepage/images/f-shape-1.svg" alt="Shape">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">Com um design simples e rápido a dashboard do site reúne todas as funcionalidades necessárias para divulgar o seu espaço.</p>
                            
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title">Rápidez</h4>
                            <div class="features-icon">
                                <i class="lni lni-bolt"></i>
                                <img class="shape" src="assets/homepage/images/f-shape-1.svg" alt="Shape">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">Nosso site úne o útil ao agradável no quesíto rapidez. Com nossas funcionalidades se torna mais rápido encontrar o local perfeito para sua festa.</p>
                           
                        </div>
                    </div> <!-- single features -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FEATRES TWO PART ENDS ======-->
    
    <!--====== PORTFOLIO PART START ======-->


    <!--====== PORTFOLIO PART ENDS ======-->
    
    <!--====== PRINICNG START ======-->

    <section id="pricing" class="pricing-area ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-25">
                        <h3 class="title">Mensalidade que cabe no seu bolso.</h3>
                        <p class="text">Contamos com funcionalidades que ajudarão na divulgação do seu espaço. Alavancando o seu negócio.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="pricing-style mt-30">
                        <div class="pricing-icon text-center">
                            <img src="assets/homepage/images/basico.svg" alt="">
                        </div>
                        <div class="pricing-header text-center">
                            <h5 class="sub-title">Prime</h5>
                            <p class="month"><span class="price">R$ 49,90 </span></p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni lni-check-mark-circle"></i> Divulgação do seu espaço</li>
                                <li><i class="lni lni-check-mark-circle"></i> Acesso à página de admin</li>
                                <li><i class="lni lni-check-mark-circle"></i> Diversos buffets e/ou casas para festas</li>
                                <li><i class="lni lni-check-mark-circle"></i> Gerador de convites automático</li>
                            </ul>
                        </div>
                        <div class="pricing-btn rounded-buttons text-center">
                            <a class="main-btn rounded-one" href="{{ route('login') }}">ADQUIRIR</a>
                        </div>    
                    </div> <!-- pricing style one -->
                </div>
                
                
            
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PRINICNG ENDS ======-->
    
    <!--====== ABOUT PART START ======-->

  

    <!--====== ABOUT PART ENDS ======-->
    

   
    <!--====== CONTACT PART ENDS ======-->
    
    <!--====== FOOTER PART START ======-->

    <section class="footer-area footer-dark">
        
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="footer-logo text-center">
                        
                        <a class="mt-30" href="index.html"><img src="assets/homepage/images/logo.png" alt="Logo"></a>
                    </div> <!-- footer logo -->
                    
                     
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->    

    <!--====== PART START ======-->

<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">
                    
                </div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->




    <!--====== Jquery js ======-->
    <script src="assets/homepage/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/homepage/js/vendor/modernizr-3.7.1.min.js"></script>
    
    <!--====== Bootstrap js ======-->
    <script src="assets/homepage/js/popper.min.js"></script>
    <script src="assets/homepage/js/bootstrap.min.js"></script>
    
    
    <!--====== Isotope js ======-->
    <script src="assets/homepage/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/homepage/js/isotope.pkgd.min.js"></script>
    
    <!--====== Scrolling Nav js ======-->
    <script src="assets/homepage/js/jquery.easing.min.js"></script>
    <script src="assets/homepage/js/scrolling-nav.js"></script>
    
    <!--====== Main js ======-->
    <script src="assets/homepage/js/main.js"></script>
    
</body>

</html>
