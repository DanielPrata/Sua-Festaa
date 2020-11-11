<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/lista/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="assets/lista/css/shop-homepage.css" rel="stylesheet">

</head>

<body>
	

  

  <!-- Page Content -->
  <div class="container">
	  

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Shop Name</h1>
        <div class="list-group">
          <a href="#" class="list-group-item">Category 1</a>
          <a href="#" class="list-group-item">Category 2</a>
          <a href="#" class="list-group-item">Category 3</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        
        <div class="row">
			@foreach($buffets as $b)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="{{ url("alugarbuffet/$b->id") }}">{{$b->nome}}</a>
                </h4>
                <h5>{{$b->valor}}</h5>
                <p class="card-text">{{$b->descricao}}</p>
              </div>
              <div class="card-footer">
                <a class="link-contato" href="{{ url("alugarbuffet/$b->id") }}">Entrar em contato</a>
              </div>
            </div>
		  </div>
      @endforeach
      


        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

 

  <!-- Bootstrap core JavaScript -->
  <script src="assets/lista/vendor/jquery/jquery.min.js"></script>
  <script src="assets/lista/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
