<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>Sua Festa | Sua Plataforma de Festas online</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="assets/images/logo.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="assets/lista/css/bootstrap.css">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/lista/css/magnific-popup.min.css">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="assets/lista/css/font-awesome.css">
	<!-- Fancybox -->
	<link rel="stylesheet" href="assets/lista/css/jquery.fancybox.min.css">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="assets/lista/css/themify-icons.css">
	<!-- Jquery Ui -->
    <link rel="stylesheet" href="assets/lista/css/jquery-ui.css">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="assets/lista/css/niceselect.css">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="assets/lista/css/animate.css">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="assets/lista/css/flex-slider.min.css">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/lista/css/owl-carousel.css">
	<!-- Slicknav -->
    <link rel="stylesheet" href="assets/lista/css/slicknav.min.css">
	
	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="assets/lista/css/reset.css">
	<link rel="stylesheet" href="assets/lista/style.css">
    <link rel="stylesheet" href="assets/lista/css/responsive.css">

	<style> 
        * {
          font-family: 'roboto', sans-serif;
        }
        .profile-container {
            width: 100%;
            max-width: 1180px;
            padding: 0 30px;
            margin: 32px auto;
            background: #f0f0f5;
          }
          
          .profile-container header {
            display: flex;
            align-items: center;
          }
          
          .profile-container header span {
            font-size: 20px;
            margin-left: 24px;
          }
          
          .profile-container header img {
            height: 220px;
          }
        
          .profile-container header .sair {
            height: 40px;
          }
          
          .profile-container header a {
            width: 260px;
            margin-left: auto;
            margin-top: 0;
          }
          
          .profile-container header button {
            height: 60px;
            width: 60px;
            border-radius: 4px;
            border: 1px solid #dcdce6;
            background: transparent;
            margin-left: 16px;
            transition: border-color 0.2s;
          }
          
          .profile-container header button:hover {
            border-color: #999;
          }
          
          .profile-container h1 {
            margin-top: 80px;
            margin-bottom: 24px;
          }
          
          .profile-container ul {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 24px;
            list-style: none;
            justify-content: space-between;
          }
          
          .profile-container ul li {
            background: #FFF;
            padding: 24px;
            border-radius: 8px;
            position: relative;
          }
        
          .profile-container ul li .imgbuffet {
            height: 300px;
          }
          
          .profile-container ul li button {
            position: absolute;
            right: 24px;
            top: 24px;
            border: 0;
          }
          
          .profile-container ul li button:hover {
            opacity: 0.8;
          }
          
          .profile-container ul li strong {
            display: block;
            margin-bottom: 16px;
            color: #41414d;
          }
          
          .profile-container ul li p + strong {
            margin-top: 32px;
          }
          
          .profile-container ul li p {
            color: #737380;
            line-height: 21px;
            font-size: 16px;
          }
        
          @import url('https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap');
        
        * {
          margin: 0;
          padding: 0;
          outline: 0;
          box-sizing: border-box;
        }
        
        body {
          font: 400 14px Roboto, sans-serif;
          background: #f0f0f5;
          -webkit-font-smoothing: antialiased;
        }
        
        input, button, textarea {
          font: 400 18px Roboto, sans-serif;
        }
        
        button {
          cursor: pointer;
        }
        
        form input {
          width: 100%;
          height: 60px;
          color: #333;
          border: 1px solid #dcdce6;
          border-radius: 8px;
          padding: 0 24px;
        }
        
        form textarea {
          width: 100%;
          resize: vertical;
          min-height: 140px;
          color: #333;
          border: 1px solid #dcdce6;
          border-radius: 8px;
          padding: 16px 24px;
          line-height: 24px;
        }
        
        .button {
          width: 100%;
          height: 60px;
          background: #9024b4;
          border: 0;
          border-radius: 8px;
          color: #FFF;
          font-weight: 700;
          margin-top: 16px;
          display: inline-block;
          text-align: center;
          text-decoration: none;
          font-size: 18px;
          line-height: 60px;
          transition: filter 0.2s;
        }
        
        .button:hover {
          filter: brightness(90%);
        }
        
        .back-link {
          display: flex;
          align-items: center;
          margin-top: 40px;
          color: #41414d;
          font-size: 18px;
          text-decoration: none;
          font-weight: 500;
          transition: opacity 0.2s;
        }
        
        .back-link svg {
          margin-right: 8px;
        }
        
        .back-link:hover {
          opacity: 0.8;
        }
        
</style>        
	
</head>
<body class="js">
    
    <div class="profile-container">
        <header>
          <img src="assets/imglogin/logo.png" alt="Sua Festa" />
		<span>Bem vindo {{Auth::user()->name}}</span>
          
  
        <a ></a>
        <form action="{{url('home')}}">
          <button type="submit">
            <img src="assets/imglogin/logout.svg" size={18} color="#E02041" class="sair"/>
          </button>
          </form>
        </header>
    </div>
		
		
		<!-- Product Style -->
		<section class="product-area shop-sidebar shop section">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-4 col-12">
						<div class="shop-sidebar">
								<!-- Single Widget -->
								<div class="single-widget category">
									<h3 class="title">Categorias</h3>
									<ul class="categor-list">
										<li><a href="#">Festa residencial</a></li>
										<li><a href="#">Casamentos</a></li>
										<li><a href="#">Festas infantis</a></li>
										<li><a href="#">Casa com piscina</a></li>
										<li><a href="#">Casa com churrasqueira</a></li>
										
									</ul>
								</div>
								<!--/ End Single Widget -->
							
								<!-- Single Widget -->
								<div class="single-widget recent-post">
									<h3 class="title">Divulgação Premium</h3>
									<!-- Single Post -->
									<div class="single-post first">
										<div class="image">
											<img src="https://via.placeholder.com/75x75" alt="#">
										</div>
										<div class="content">
											<h5><a href="#">TESTE TESTE</a></h5>
											<p class="price">$10</p>
											<ul class="reviews">
												<li class="yellow"><i class="ti-star"></i></li>
												<li class="yellow"><i class="ti-star"></i></li>
												<li class="yellow"><i class="ti-star"></i></li>
												<li><i class="ti-star"></i></li>
												<li><i class="ti-star"></i></li>
											</ul>
										</div>
									</div>
									<!-- End Single Post -->
									<!-- Single Post -->
									<div class="single-post first">
										<div class="image">
											<img src="https://via.placeholder.com/75x75" alt="#">
										</div>
										<div class="content">
											<h5><a href="#">TESTE TESTE</a></h5>
											<p class="price">$10</p>
											<ul class="reviews">
												<li class="yellow"><i class="ti-star"></i></li>
												<li class="yellow"><i class="ti-star"></i></li>
												<li class="yellow"><i class="ti-star"></i></li>
												<li class="yellow"><i class="ti-star"></i></li>
												<li><i class="ti-star"></i></li>
											</ul>
										</div>
									</div>
									<!-- End Single Post -->
									<!-- Single Post -->
									<div class="single-post first">
										<div class="image">
											<img src="https://via.placeholder.com/75x75" alt="#">
										</div>
										<div class="content">
											<h5><a href="#">TESTE TESTE</a></h5>
											<p class="price">$10</p>
											<ul class="reviews">
												<li class="yellow"><i class="ti-star"></i></li>
												<li class="yellow"><i class="ti-star"></i></li>
												<li class="yellow"><i class="ti-star"></i></li>
												<li class="yellow"><i class="ti-star"></i></li>
												<li class="yellow"><i class="ti-star"></i></li>
											</ul>
										</div>
									</div>
									<!-- End Single Post -->
								</div>
								<!--/ End Single Widget -->
								<!-- Single Widget -->
								<div class="single-widget category">
									<h3 class="title">Exclusividades</h3>
									<ul class="categor-list">
										<li><a href="#">DJ disponível</a></li>
										<li><a href="#">Brinquedos para crianças</a></li>
										<li><a href="#">Comida</a></li>
										<li><a href="#">Fotógrafo</a></li>
										<li><a href="#">Lembrancinhas</a></li>
									</ul>
								</div>
								<!--/ End Single Widget -->
						</div>
					</div>
					<div class="col-lg-9 col-md-8 col-12">
						<div class="row">
							<div class="col-12">
								<!-- Shop Top -->
								<div class="shop-top">
									<div class="shop-shorter">
										<div class="single-shorter">
											<label>Listar por :</label>
											<select>
												<option selected="selected">09</option>
												<option>15</option>
												<option>25</option>
												<option>30</option>
											</select>
										</div>
										<div class="single-shorter">
											
											<select>
                                                <option selected="selected">Mais relevantes</option>
												<option >Mais procurados</option>
                                                <option>Preço mais baixo</option>
                                                <option>Preço mais alto</option>
											</select>
										</div>
									</div>
									<ul class="view-mode">
										<button type="button" class="btn btn-primary">Buscar</button>
										
									</ul>
								</div>
								<!--/ End Shop Top -->
							</div>
						</div>
						<div class="row">
                            @foreach($buffets as $b)
							<div class="col-lg-4 col-md-6 col-12">
								<div class="single-product">
									<div class="product-img">
										<a href="product-details.html">
											<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
											<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
										</a>
										<div class="button-head">
											<div class="product-action">
												<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Favoritar</span></a>
												
											</div>
											<div class="product-action-2">
                                                <a title="descricao" href="#">{{$b->descricao}}</a>
                                                <br>
                                                <a title="endereco" href="#">{{$b->endereco}}</a>
											</div>
										</div>
									</div>
									<div class="product-content">
									<h3><a href="{{ url("alugarbuffet/$b->id") }}">{{ $b->nome}}</a></h3>
								
										<div class="product-price">
											<span>{{$b->valor}}</span>
                                        </div>
                                        <div class="product-price">
											<span>{{$b->telefone}}</span>
										</div>
									</div>
								</div>
							</div>
                            @endforeach
                            

						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Product Style 1  -->	

		
		
		<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
						</div>
						<div class="modal-body">
							<div class="row no-gutters">
								<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
									<!-- Product Slider -->
										<div class="product-gallery">
											<div class="quickview-slider-active">
												<div class="single-slider">
													<img src="https://via.placeholder.com/569x528" alt="#">
												</div>
												<div class="single-slider">
													<img src="https://via.placeholder.com/569x528" alt="#">
												</div>
												<div class="single-slider">
													<img src="https://via.placeholder.com/569x528" alt="#">
												</div>
												<div class="single-slider">
													<img src="https://via.placeholder.com/569x528" alt="#">
												</div>
											</div>
										</div>
									<!-- End Product slider -->
								</div>
								<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
									<div class="quickview-content">
										<h2>Flared Shift Dress</h2>
										<div class="quickview-ratting-review">
											<div class="quickview-ratting-wrap">
												<div class="quickview-ratting">
													<i class="yellow fa fa-star"></i>
													<i class="yellow fa fa-star"></i>
													<i class="yellow fa fa-star"></i>
													<i class="yellow fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<a href="#"> (1 customer review)</a>
											</div>
											<div class="quickview-stock">
												<span><i class="fa fa-check-circle-o"></i> in stock</span>
											</div>
										</div>
										<h3>$29.00</h3>
										<div class="quickview-peragraph">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
										</div>
										<div class="size">
											<div class="row">
												<div class="col-lg-6 col-12">
													<h5 class="title">Size</h5>
													<select>
														<option selected="selected">s</option>
														<option>m</option>
														<option>l</option>
														<option>xl</option>
													</select>
												</div>
												<div class="col-lg-6 col-12">
													<h5 class="title">Color</h5>
													<select>
														<option selected="selected">orange</option>
														<option>purple</option>
														<option>black</option>
														<option>pink</option>
													</select>
												</div>
											</div>
										</div>
										<div class="quantity">
											<!-- Input Order -->
											<div class="input-group">
												<div class="button minus">
													<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
														<i class="ti-minus"></i>
													</button>
												</div>
												<input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
												<div class="button plus">
													<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
														<i class="ti-plus"></i>
													</button>
												</div>
											</div>
											<!--/ End Input Order -->
										</div>
										<div class="add-to-cart">
											<a href="#" class="btn">Add to cart</a>
											<a href="#" class="btn min"><i class="ti-heart"></i></a>
											<a href="#" class="btn min"><i class="fa fa-compress"></i></a>
										</div>
										<div class="default-social">
											<h4 class="share-now">Share:</h4>
											<ul>
												<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
												<li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Modal end -->
		
		
	
    <!-- Jquery -->
    <script src="assets/lista/js/jquery.min.js"></script>
    <script src="assets/lista/js/jquery-migrate-3.0.0.js"></script>
	<script src="assets/lista/js/jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="assets/lista/js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="assets/lista/js/bootstrap.min.js"></script>
	<!-- Color JS -->
	<script src="assets/lista/js/colors.js"></script>
	<!-- Slicknav JS -->
	<script src="assets/lista/js/slicknav.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="assets/lista/js/owl-carousel.js"></script>
	<!-- Magnific Popup JS -->
	<script src="assets/lista/js/magnific-popup.js"></script>
	<!-- Fancybox JS -->
	<script src="assets/lista/js/facnybox.min.js"></script>
	<!-- Waypoints JS -->
	<script src="assets/lista/js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="assets/lista/js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="assets/lista/js/nicesellect.js"></script>
	<!-- Ytplayer JS -->
	<script src="assets/lista/js/ytplayer.min.js"></script>
	<!-- Flex Slider JS -->
	<script src="assets/lista/js/flex-slider.js"></script>
	<!-- ScrollUp JS -->
	<script src="assets/lista/js/scrollup.js"></script>
	<!-- Onepage Nav JS -->
	<script src="assets/lista/js/onepage-nav.min.js"></script>
	<!-- Easing JS -->
	<script src="assets/lista/js/easing.js"></script>
	<!-- Active JS -->
	<script src="assets/lista/js/active.js"></script>
</body>
</html>