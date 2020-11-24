<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua Festa | Sua plataforma de Festas</title>

    <link rel="icon" type="icone.png" href="assets/imglogin/icon.png"/>
    <!--LINKS DOS CSSs-->
    <link rel="stylesheet" href="assets/filtro/styles/main.css">
    <link rel="stylesheet" href="assets/filtro/styles/partials/header.css">
    <link rel="stylesheet" href="assets/filtro/styles/partials/forms.css">
    <link rel="stylesheet" href="assets/filtro/styles/partials/page-study.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/35e789ec36.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

</head>
<body id="page-study">
    <div id="container">
        <header class="page-header">
            

            <a href="{{ url('/home')}}" style="text-decoration: none;">
            <button class="botaosair" type="button">
                <i class="fas fa-sign-out-alt"></i> 
                VOLTAR
            </button>
        </a>


            <!--FILTROS DE BUFFETS-->
            <div class="header-content">
                
                <strong>Todos os locais disponíveis 
                    <img src="assets/landingpage/images/logo2.png" alt="website logo">
                </strong>
                
               
               
                
                <form id="search-teachers" action="{{ asset('/filtrarbuffet') }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                    <div class="select-block">
                        <label for="diferenciais">Tipos de espaços</label>
                        <select name="diferenciais" id="diferenciais">
                            <option value="" disabled>Selecione uma opção</option>
                            <option value="todos">Todos tipos de festa</option>
                            <option value="residencial">Festa residencial</option>
                            <option value="casamento">Festa de casamento</option>
                            <option value="infantil">Festa infantil</option>
                            <option value="debutante">Festa de debutante</option>
                        </select>
                    </div>
                    <div class="select-block">
                        <label for="tipolocal">Tipos de festas</label>
                        <select name="tipolocal" id="tipolocal">
                            <option value="" disabled="">Selecione uma opção</option>
                            <option value="todos">Todos tipos de locais</option>
                            <option value="1">Buffets</option>
                            <option value="2">Casas com piscina e/ou churrasqueira</option>
                            <option value="3">Salões de festa</option>

                            
                        </select>
                    </div>
                   
                   <button type="submit">Filtrar</button>
                </form>
            </div>
        </header>
        <main>

            @if ($buffets == null)

            <article class="teacher-item">
                <header>
                
                    <div>
                        <strong>No momento não temos nenhum local cadastrado. Tente novamente!</strong>
                        <span></span>
                    </div>
                </header>
              <p></p>
                <footer>
                    <button onClick="atualiza()" type="submit"><i class="fas fa-sync-alt"></i> TENTE NOVAMENTE</button>
                </footer>
            </article>
                
            @else

            @foreach($buffets as $b)
            <article class="teacher-item">
                <header>
                    
                    <img src="{{ env('APP_URL') }}/{{ json_decode($b->images)[0] }}"/>

                    <div>
                        <strong>{{ $b->nome }}</strong>
                        <span>{{ $b->endereco }}</span>
                    </div>
                </header>
              <p><B>Descrição:</B> {{ $b->descricao }}</p>
                <footer>
                    <p>Valor: <strong>{{ $b->valor }}</strong>
                    </p>
                    <br>
                    @if ($b->tipo == 1)

                    <p>Tipo do local: <strong>Buffet de festas</strong></p>
                        
                      
                    @endif

                    @if ($b->tipo == 2)

                    <p>Tipo do local: <strong>Casa com piscina e/ou churrasqueira</strong></p>
                        
                    @endif

                    @if ($b->tipo == 3)

                    <p>Tipo do local: <strong>Salão de festas</strong></p>

                    @endif


                    <a href="{{ url("alugarbuffet/$b->id") }}" class="button">  
                      <i class="fas fa-mail-bulk"></i>Saiba mais
                    </a>
                </footer>
            </article>
          @endforeach
                
            @endif
           

        </main>
    </div>

    <script type="text/javascript">

    function atualiza() {
        window.location.href = 'http://localhost/TCC_SuaFesta/public/lista';
    }
    </script>

</body>
</html>