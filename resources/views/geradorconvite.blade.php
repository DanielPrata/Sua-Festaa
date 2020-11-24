<!DOCTYPE html>
<html>
    <head>
        <title>Gerador de convite</title>

        <meta
            name="viewport"
            content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
            <link rel="icon" type="icone.png" href="assets/imglogin/icon.png"/>

        <!-- Import lib -->
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

            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
            
<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">


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

                <div class="new-incident-container2">
                    <div class="content">
						

                        <form>
							<h1>Digite as principais informações da Sua Festa.</h1>
							<br>

                            <input type="text" id="texto1" name="texto1" placeholder="Nome(s)"/>

                            <input type="text" id="texto2" name="texto2" placeholder="Endereço do local / Nome do local"/>

                            <select name="convites" id="convites">
                                <option value="1">Convite de festa de aniversário</option>
                                <option value="2">Convite de casamento</option>
                                
                              </select>

                            <br><br>
                            <img
                                id="convite1"
                                width="110"
                                height="110"
								src="assets/gerador/convitenormal1.jpg"
                                alt="convite1">

                                <img
                                id="convite2"
                                width="110"
                                height="110"
								src="assets/gerador/convitecasamento1.jpg"
                                alt="convite2">

                            <button class="button" type="button" onclick="exibir()">Gerar convite</button>

                            <br>

                            <br>
						</form>
						
                        <section>
                            <a></a>

							<h1>Este é seu convite</h1>
							<h3>Faça o download</h3>
							
                            <canvas
                                id="myCanvas"
                                width="435"
                                height="500"
								style="border:1px solid #d3d3d3;"></canvas>
								<button type="button" class="button2" onclick="location.href='mailto:?subject=Venha%20para%20a%20minha%20festa'" >
								<i class="far fa-share-square"></i>
								</button>

								
								
						
                        </section>
                    </div>
                </div>

            </div>
            <!-- end main content -->
            <!-- import script -->
            <script
                src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
            <script src="assets/dashboard/index.js"></script>
            <script src="assets/gerador/index.js"></script>
            <!-- end import script -->
        </body>
    </html>