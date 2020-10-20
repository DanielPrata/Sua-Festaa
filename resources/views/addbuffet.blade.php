

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="icone.png" href="assets/imglogin/icon.png"/>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="assets/addBUFFET/stylenovobuffet.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua Festa | Sua Plataforma de Festas online</title>
</head>
<body>
    
<img class="wave" src="assets/imglogin/wave.png">

<div class="new-incident-container">
      <div class="content">
        

        <form action="{{ asset('/novobuffet') }}" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{ csrf_token() }}" />
          <input placeholder="Nome do buffet" type="text" name="nome" required />

          <textarea placeholder="Descrição do buffet" name="descricao" required></textarea>

          <input type="text" step="0.01" name="valor" min="0.01" placeholder="Valor" required>

          <input placeholder="Endereço" type="text" name="endereco" required />

          <input placeholder="Telefone de contato" type="number" name="telefone"  required />


          <br>
          <br>
          <button class="button" type="submit">Cadastrar</button>



          <br>
          
<br>
        </form>

        <section>
        <a href="{{ url('home') }}" class="back-link">
            <img src="assets/imglogin/arrowleft.svg" size={16} color="#E02041" />
            Voltar para home
            </a>

          <h1>Cadastre seu buffet</h1>
          <p>Dê informações relevantes sobre o seu buffet, imagens e o valor.</p>

         

            <img src="assets/imglogin/logo.png" alt="findfest"/>
        </section>
      </div>
    </div>
    <img class="wave1" src="assets/imglogin/wave1.png">
</body>
</html>