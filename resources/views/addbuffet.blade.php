<!DOCTYPE html>
<html>
    <head>
        <title>Adicionar local</title>
        <link rel="icon" type="icone.png" href="assets/imglogin/icon.png"/>

        <meta
            name="viewport"
            content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <link rel="icon" type="image/png" href="assets/dashboard/images/logo.png"/>

       
        <script
            src="https://github.com/makeusabrew/bootbox/releases/download/v4.4.0/bootbox.min.js"></script>

        <link
            rel="stylesheet"
            type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
        <link
            rel="stylesheet"
            type="text/css"
            href="assets/dashboard/fontawesome-free/css/all.min.css">
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
            rel="stylesheet">
        <!-- End import lib -->

        <link rel="stylesheet" type="text/css" href="assets/dashboard/style.css">
        <link
            rel="stylesheet"
            type="text/css"
            href="assets/dashboard/stylenovobuffet.css">


            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

            <script src="sweetalert2.all.min.js"></script>
            <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
            <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    </head>


    <body>
        <body class="overlay-scrollbar">
            <!-- navbar -->
            <div class="navbar">
                <!-- nav left -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link">
                            <i class="fas fa-bars" onclick="collapseSidebar()"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <img
                            src="assets/dashboard/images/logo.png"
                            alt="ATPro logo"
                            class="logo logo-light">

                    </li>
                </ul>
                <!-- end nav left -->
                <!-- form -->

                <!-- end form -->
                <!-- nav right -->
                <ul class="navbar-nav nav-right">
                    <li class="nav-item mode">
                        <a class="nav-link" href="#" onclick="switchTheme()">
                            <i class="fas fa-moon dark-icon"></i>
                            <i class="fas fa-sun light-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link">
                            <i class="fas fa-bell dropdown-toggle" data-toggle="notification-menu"></i>
                            <span class="navbar-badge">1</span>
                        </a>
                        <ul id="notification-menu" class="dropdown-menu notification-menu">
                            <div class="dropdown-menu-header">
                                <span>
                                    Notificações
                                </span>
                            </div>
                            <div class="dropdown-menu-content overlay-scrollbar scrollbar-hover">
                                <li class="dropdown-menu-item">
                                    <a href="#" class="dropdown-menu-link">
                                        <div>
                                            <i class="fas fa-gift"></i>
                                        </div>
                                        <span>
                                            Há um novo usuário interessado no seu local: "CASA COM PISCINA"
                                            <br>
                                            <span>
                                                10/10/2020
                                            </span>
                                        </span>
                                    </a>
                                </li>

                            </div>
                            <div class="dropdown-menu-footer"></div>
                        </ul>
                    </li>
                    <li class="nav-item avt-wrapper">
                        <div class="avt dropdown">
                            <img
                                src="assets/dashboard/images/tuat.jpg"
                                alt="User image"
                                class="dropdown-toggle"
                                data-toggle="user-menu">
                            <ul id="user-menu" class="dropdown-menu">
                                <li class="dropdown-menu-item">
                                    <a class="dropdown-menu-link">
                                        <div>
                                            <i class="fas fa-user-tie"></i>
                                        </div>
                                        <span>Perfil</span>
                                    </a>
                                </li>

                                <li class="dropdown-menu-item">
                                    <a href="#" class="dropdown-menu-link">
                                        <div>
                                            <i class="fas fa-sign-out-alt"></i>
                                        </div>
                                        <span>Sair</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <!-- end nav right -->
            </div>
            <!-- end navbar -->
            <!-- sidebar -->
            <div class="sidebar">
                <ul class="sidebar-nav">
                    <li class="sidebar-nav-item">
                        <a href="{{ url('/dashboard')}}" class="sidebar-nav-link">
                            <div>
                                <i class="fas fa-home black"></i>
                            </div>
                            <span>
                                Página inicial
                            </span>
                        </a>
                    </li>
                    
                    <li class="sidebar-nav-item">
                        <a href="{{ url('/geradorconvite') }}" class="sidebar-nav-link">
                            <div>
                                <i class="fas fa-envelope"></i>
                            </div>
                            <span>Gerador de convites</span>
                        </a>
                    </li>

                    <li class="sidebar-nav-item">
                        <a href="{{ url('/addbuffet') }}" class="sidebar-nav-link">
                            <div>
                                <i class="fas fa-plus-circle"></i>
                            </div>
                            <span>Cadastrar o seu local</span>
                        </a>
                    </li>

                    <li class="sidebar-nav-item">
                        <a href="{{ url('/lista')}}" class="sidebar-nav-link">
                            <div>
                                <i class="fas fa-birthday-cake"></i>
                            </div>
                            <span>Todos espaços cadastrados</span>
                        </a>
                    </li>

                    <li class="sidebar-nav-item">
                        <a href="{{ url('/home')}}" class="sidebar-nav-link">
                            <div>
                                <i class="fas fa-sign-out-alt"></i>
                            </div>
                            <span>Voltar para home</span>
                        </a>
                    </li>

                </ul>
            </div>
            <!-- end sidebar -->
            <!-- main content -->
            <div class="wrapper">

                <div class="new-incident-container">
                    <div class="content">

                        <form
                            action="{{ asset('/novobuffet') }}"
                            method="POST"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                            <input
                                placeholder="Nome do buffet"
                                type="text"
                                name="nome"
                                required="required"
                                maxlength="50"/>

                            <textarea
                                placeholder="Descrição do buffet"
                                name="descricao"
                                required="required"
                                maxlength="500"></textarea>

                            <input
                                type="text"
                                step="0.01"
                                name="valor"
                                min="0.01"
                                placeholder="Valor"
                                required="required"
                                maxlength="50">

                            <input
                                placeholder="Endereço"
                                type="text"
                                name="endereco"
                                required="required"
                                maxlength="50"/>

                            <input
                                placeholder="Telefone de contato"
                                type="number"
                                name="telefone"
                                required="required"/>

							<input 
								placeholder="Email" 
								type="email" 
								name="email" 
                                required="required"/>
                                
                            <select name="tipo" id="tipo" required>
                                <option value="1">Buffet de festas</option>
                                <option value="2">Casa com piscina e/ou churrasqueira</option>
                                <option value="3">Salão de festa</option>
                            </select>
                                

							<input
                                type="file"
                                name="images[]"
                                id="images"
                                accept=".jpeg, .png, .jpg, .gif, .svg"
                                multiple="multiple"
                                required />
							

                            <br><br>
                            <h2 class="diferenciais">DIFERENCIAIS:</h2>
                            <br><br>
                            <label class="labeltexto">
                                Oferece festa residencial?
                                <input
                                    type="checkbox"
                                    class="checkbox1"
                                    name="residencial"
                                    value="{{ old('residencial') }}"/></label>
                            <br><br>
                            <label class="labeltexto">
                                Tem suporte a casamentos?<input
                                    type="checkbox"
                                    class="checkbox2"
                                    name="casamento"
                                    value="{{ old('casamento') }}"/></label>
                            <br><br>
                            <label class="labeltexto">
                                Tem suporte a festas infantis?<input
                                    type="checkbox"
                                    class="checkbox3"
                                    name="infantil"
                                    value="{{ old('infantil') }}"/></label>
                            <br><br>
                            <label class="labeltexto">
                                Tem suporte a festas de debutante?<input
                                    type="checkbox"
                                    class="checkbox4"
                                    name="debutante"
									value="{{ old('debutante') }}"/></label>
							<br><br><br>
							<h2 class="diferenciais">EXCLUSIVIDADES:</h2>
							<br><br>
                            <label class="labeltexto">
                                Oferece DJ incluso?<input
                                    type="checkbox"
                                    class="checkbox5"
                                    name="dj"
                                    value="{{ old('dj') }}"/></label>
                            <br><br>
                            <label class="labeltexto">
                                Oferece lembrancinhas?<input
                                    type="checkbox"
                                    class="checkbox6"
                                    name="lembrancinha"
                                    value="{{ old('lembrancinha') }}"/></label>
                            <br><br>
                            <label class="labeltexto">
                                Tem comida inclusa?<input
                                    type="checkbox"
                                    class="checkbox7"
                                    name="comida"
									value="{{ old('comida') }}"/></label>
							<br><br>
							<label class="labeltexto">
                                Tem brinquedos infantis?<input
                                    type="checkbox"
                                    class="checkbox8"
                                    name="brinquedo"
                                    value="{{ old('brinquedo') }}"/></label>
                                    
                            <input type="hidden" name="anunciante" value="{{ Auth::user()->id }}" />

                            <br>
                            <br>
                            <button class="button" type="submit" onclick="inserido()">Cadastrar</button>

                            <br>

                            <br>
                        </form>

                        <section>
                            

                            <h1>Cadastre seu buffet</h1>
                            <p>Dê informações relevantes sobre o seu buffet, imagens e o valor.</p>

                            <img src="assets/dashboard/img/logo.png" alt="findfest"/>
                        </section>
                    </div>
                </div>

            </div>

            <script>

                let input = document.querySelector('#images');
                input.addEventListener('change', () => {
                    if (input.files.length >= 16) {
                        Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'O máximo de imagens por local cadastrado é 15...'
                        })
                        input.value = "";
                        return false;
                    } else if (input.files.length = 0) {

                       Swal.fire({
						    icon: 'error',
							title: 'Oops...',
							text: 'Mínimo de 1 imagem por local cadastrado.'
						})
								   
                        
                    }
                    else {
                        return true;
                    }
                });


                function inserido() {
                    Swal.fire({
						icon: 'success',
						title: 'Uhuul',
						text: 'O seu espaço foi cadastrado com sucesso.'
						})
					
                }


            </script>

            
              
            <script
                src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
            <script src="assets/dashboard/index.js"></script>
            <!-- end import script -->
        </body>
    </html>