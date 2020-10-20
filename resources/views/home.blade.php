

<!DOCTYPE html>
<html lang="pt-br"> <!-- Lang é atributo -->
<head><!-- INFORMAÇÕES DENTRO DA TAG SÃO ATRIBUTO -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--ALT+Z ARRUMA A INDENTAÇÃO -->
    <title>Sua Festa | Sua Plataforma de Festas online</title>
    <link rel="stylesheet" href="assets/landing/styles/main.css">
    <link rel="stylesheet" href="assets/landing/styles/partials/page-landing.css">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&amp;family=Poppins:wght@400;600&amp;display=swap" rel="stylesheet"> 

</head>
<body id="page-landing">

    
       
   

<div id="container">

    <button> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-arrow-in-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
      
      </svg>
        <a  href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    
    </button>
    
    <div class="logo-container">
        <img src="assets/landing/images/icons/meio_logo.svg" alt="Sua Festa">
        <h2>Sua plataforma de festas online</h2>
    </div>
    
    <img class="hero-image" src="assets/landing/images/lado_logo.svg" alt="Plataforma de Festas">

    <p class="total-connections">
        Total de 200 conexões realizadas
        <img src="assets/landing/images/icons/purple-heart.svg" alt="Coração roxo">
    </p>
    

    <div class="buttons-container">
        <a class="study" href="{{ url('/addbuffet') }}">
            <img src="assets/landing/images/icons/pagamento.svg" alt="Promover">
            Divulgar seu local 
        </a>

        <a class="give-classes" href="{{ url('/lista') }}">
            <img src="assets/landing/images/icons/agenciamento.svg" alt="Agenciar">
            Agende sua festa
            
        </a>

        
    </div>

   

    

</div>


</body>
</html>