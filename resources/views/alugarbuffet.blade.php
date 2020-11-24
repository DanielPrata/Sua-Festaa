<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua Festa | Sua plataforma de festas</title>
    <link rel="icon" type="icone.png" href="assets/imglogin/icon.png"/>

     <link rel="stylesheet" href="{{env('ALUGUEL_CSS')}}/styles/main.css">
    <link rel="stylesheet" href="{{env('ALUGUEL_CSS')}}/styles/partials/header.css">
    <link rel="stylesheet" href="{{env('ALUGUEL_CSS')}}/styles/partials/forms.css">
    <link rel="stylesheet" href="{{env('ALUGUEL_CSS')}}/styles/partials/page-give-classes.css">
    <link rel="stylesheet" href="{{env('ALUGUEL_CSS')}}/styles/partials/carrosel.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"></head>

<body id="page-give-classes">

    <div id="container">
        <!--CABEÇALHO-->
        <header class="page-header">
            <div class="top-bar-container">
            <a href="{{ url('/lista') }}">
                    <img src="{{env('ALUGUEL_CSS')}}/images/icons/voltar.svg" alt="Voltar"> 
                </a>
            <img src="{{ env('LOGO') }}" alt="website logo">
            </div>

            <div class="header-content">
                <strong>{{$buffets->nome}}</strong>
                <p><b>VALOR:</b> {{ $buffets->valor }}</p>
            </div>
        </header>


        <main>
            <!--CONTEÚDO PRINCIPAL-->

            <!-- Slideshow container -->
            <div class="slideshow-container">

                @foreach(json_decode($buffets->images) as $image)

                <div class="mySlides fade">
                    <div class="numbertext"></div>
                    <img src="{{ env('APP_URL') }}/{{ $image }}"style="width: 600px; height: 400px;">
                </div>

         
               
                   
          
                @endforeach
                

               

                <!--Botões seguinte e anterior -->
                <a class="prev" onclick="plusSlides(-1)" title="anterior">&#10094;</a>
                <a class="next" onclick="plusSlides(1)" title="próximo">&#10095;</a>
            </div>
            <br>
            <script>
                var slideIndex = 1;
                showSlides(slideIndex);

                // Controles seguinte / anterior
                function plusSlides(n) {
                    showSlides(slideIndex += n);
                }

                // Controles de imagem em miniatura
                function currentSlide(n) {
                    showSlides(slideIndex = n);
                }

                function showSlides(n) {
                    var i;
                    var slides = document.getElementsByClassName("mySlides");
                    var dots = document.getElementsByClassName("dot");
                    if (n > slides.length) {
                        slideIndex = 1;
                    }
                    if (n < 1) {
                        slideIndex = slides.length;
                    }
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex - 1].style.display = "block";
                    dots[slideIndex - 1].className += " active";
                }
            </script>
            <br>

            <p id="p-descrição">
                Descrição: {{ $buffets->descricao }}
            </p>
            <BR>
            <p id="p-descrição">
                Endereço: {{ $buffets->endereco }}
            </p>
            <br><br>
            <p id="p-descrição" style="text-align: center">DIFERENCIAIS: </p>
            <br>

            @if ($buffets->residencial === null)
                <p id="p-descrição"> Oferece festa residencial. </p>
                <br>
                @endif
                
                @if ($buffets->casamento === null)
                <p id="p-descrição"> Oferece festa de casamento. </p>
                <br>
                @endif
                @if ($buffets->infantil === null)
                <p id="p-descrição"> Oferece festa infantil. </p>
                <br>
                @endif
                @if ($buffets->debutante === null)
                <p id="p-descrição"> Oferece festa debutante. </p>
                <br>
                @endif
                <br>

            @if ($buffets->dj === 0 && $buffets->lembrancinha === 0 && $buffets->comida === 0 && $buffets->brinquedo === 0 )

            @else
            <p id="p-descrição" style="text-align: center">EXCLUSIVIDADES: </p>
            <br>

                @if ($buffets->dj === null)
                <p id="p-descrição"> Oferece DJ. </p>
                <br>
                @endif

                @if ($buffets->lembrancinha === null)
                <p id="p-descrição"> Oferece lembrancinha. </p>
                <br>
                @endif

                @if ($buffets->comida === null)
                <p id="p-descrição"> Oferece comida. </p>
                <br>
                @endif

                @if ($buffets->brinquedo === null)
                <p id="p-descrição"> Oferece brinquedo. </p>
                <br>
                @endif
            @endif
                


            <footer>
                <!--RODAPÉ-->
                <p>
                    <img src="{{env('ALUGUEL_CSS')}}/images/icons/contact.svg" alt="Contato whatsapp">
                    Converse via <br> WhatsApp ou Email
                </p>
                <a
                href="https://api.whatsapp.com/send?phone=55{{$buffets->telefone}}&text=Olá, conheci seu local de festas pelo site SuaFesta, podemos conversar sobre um possível aluguel?"
                style="text-decoration: none;" target="_blank">
                <button type="submit" form="create-class">
                    <img src="{{env('ALUGUEL_CSS')}}/images/icons/zap.svg" alt="Contato whatsapp">⠀⠀WhatsApp</button>
                </a>

                <a href="mailto:{{$buffets->email}}?subject=Olá, conheci o seu espaço de festa pelo site SuaFesta.
                    &body=Olá, quero alugar o seu local. Podemos falar sobre isso?"
                    style="text-decoration: none;">
                    <button type="submit" form="create-class">
                        <img src="{{env('ALUGUEL_CSS')}}/images/icons/email.svg" alt="Contato email">⠀⠀Email</button>
                </a>
            </footer>
        </main>
    </div>


</body>

</html>