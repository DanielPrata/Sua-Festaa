

<!DOCTYPE html>
<html lang="pt-br"> <!-- Lang é atributo -->
<head><!-- INFORMAÇÕES DENTRO DA TAG SÃO ATRIBUTO -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--ALT+Z ARRUMA A INDENTAÇÃO -->
    <title>Sua Festa | Sua Plataforma de Festas online</title>
    <link rel="stylesheet" href="assets/landing/styles/main.css">
    <link rel="stylesheet" href="assets/landing/styles/partials/page-landing.css">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&amp;family=Poppins:wght@400;600&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/dashboard/fontawesome-free/css/all.min.css"> 

</head>
<body id="page-landing">

    
       
   

<div id="container">

   
      
        
    
    
    
    <div class="logo-container">
        <img src="assets/landing/images/icons/meio_logo.svg" alt="Sua Festa">
        <h2>Sua plataforma de festas online</h2>
    </div>
    
    <img class="hero-image" src="assets/landing/images/lado_logo.svg" alt="Plataforma de Festas">


    <div class="buttons-container">
        <a class="study" href="{{ url('/dashboard') }}">
            <i class="fas fa-share"></i>
            ⠀Divulgar 
        </a>

        <a class="study" href="{{ url('/lista') }}">
            <i class="far fa-calendar-check"></i>
            ⠀Alugar
            
        </a>

        <a class="study" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();" >
                         <i class="fas fa-sign-out-alt"> </i>
            {{ __('⠀Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>

        
    </div>

   

    

</div>


</body>
</html>