<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/landingpage/css/style.css">
    <link rel="icon" type="icone.png" href="assets/imglogin/icon.png"/>
    <script src="https://kit.fontawesome.com/35e789ec36.js" crossorigin="anonymous"></script>

    <title>Página inicial</title>
</head>

<body>
    <div class="container">
        <header class="head my-3">
            <nav class="navbar navbar-expand-lg navbar-light head__custom-nav">
                <img src="assets/landingpage/images/logo2.png" alt="website logo">

               
                <button class="btnexit" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();" >
                              <i class="fas fa-sign-out-alt"></i>
                 {{ __('Sair') }}
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
                 </form>
                
             

            </nav>
            
        </header>
    </div>
    <div class="container">
        <div class="row custom-section d-flex align-items-center">
            <div class="col-12 col-lg-4">
                <h2>Sua Festa</h2>
                <h3>Agora você escolhe!</h3>
                <p>Quer divulgar seu espaço e alavancar sua empresa?</p>
                
                <p>Quer esolher um local perfeito pro seu evento?</p>
                
                
            <a href="{{ url('/dashboard') }}" ><i class="fas fa-share"></i>  DIVULGAR</a>
            <a href="{{ url('/lista') }}"><i class="far fa-calendar-alt"></i>  ALUGAR</a>
                
            </div>
            <div class="col-12 col-lg-8">
                <img src="assets/landingpage/images/festa2.svg" alt="Team process banner">
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>