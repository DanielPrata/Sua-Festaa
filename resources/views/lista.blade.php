<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua Festa | Sua plataforma de Festas</title>
    <!--LINKS DOS CSSs-->
    <link rel="stylesheet" href="assets/filtro/styles/main.css">
    <link rel="stylesheet" href="assets/filtro/styles/partials/header.css">
    <link rel="stylesheet" href="assets/filtro/styles/partials/forms.css">
    <link rel="stylesheet" href="assets/filtro/styles/partials/page-study.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/35e789ec36.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

</head>
<body id="page-study">
    <div id="container">
        <header class="page-header">
            
            <button href="#" class="botaosair"> <i class="fas fa-sign-out-alt"></i>  VOLTAR PRA HOME</button>
            <!--FILTROS DE BUFFETS-->
            <div class="header-content">
                
                <strong>Todos os locais disponíveis</strong>
                
               
               
                
                <form id="search-teachers">
                    <div class="select-block">
                        <label for="subject">Tipos de espaços</label>
                        <select name="subject" id="subject">
                            <option value="" disabled="">Selecione uma opção</option>
                            <option value="teste">exemplo1</option>
                            <option value="teste1">exemplo2</option>
                        </select>
                    </div>
                    <div class="select-block">
                        <label for="weekday">Tipos de festas</label>
                        <select name="weekday" id="weekday">
                            <option value="" disabled="">Selecione uma opção</option>
                            <option value="teste1">exemplo1</option>
                            <option value="teste2">exemplo2</option>
                        </select>
                    </div>
                    <div class="input-block">
                        <label for="time">Faixa de preço</label>
                        <input name="number">
                    </div>
                    <button type="submit">Filtrar</button>
                </form>
            </div>
        </header>
        <main>

          @foreach($buffets as $b)
            <article class="teacher-item">
                <header>
                    <img src="fotodobanco" alt="Fotos">
                    <div>
                        <strong>{{ $b->nome }}</strong>
                        <span>{{ $b->endereco }}</span>
                    </div>
                </header>
              <p><B>Descrição:</B> {{ $b->descricao }}</p>
                <footer>
                    <p>Preço<strong>{{ $b->valor }}</strong>
                    </p>
                    <a href="{{ url("alugarbuffet/$b->id") }}" class="button" target="_blank">  
                      <i class="fas fa-mail-bulk"></i>Saiba mais
                    </a>
                </footer>
            </article>
          @endforeach

        </main>
    </div>
</body>
</html>