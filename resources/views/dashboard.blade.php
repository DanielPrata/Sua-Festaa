<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>

	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="icon" type="image/png" href="assets/dashboard/images/logo.png"/>

	<!-- Import lib -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
	<link rel="stylesheet" type="text/css" href="assets/dashboard/fontawesome-free/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<!-- End import lib -->

	<link rel="stylesheet" type="text/css" href="assets/dashboard/style.css">
</head>
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
				<img src="assets/dashboard/images/logo.png" alt="ATPro logo" class="logo logo-light">
				<img src="assets/dashboard/images/logo.png" alt="ATPro logo" class="logo logo-dark">
			</li>
		</ul>
		<!-- end nav left -->
		<!-- form -->
		
		<!-- end form -->
		
		<!-- end nav right -->
	</div>
	<!-- end navbar -->
	<!-- sidebar -->
	<div class="sidebar">
		<ul class="sidebar-nav">
			<li class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="fas fa-home black"></i>
					</div>
					<span>
						Página inicial
					</span>
				</a>
			</li>
			
			<li  class="sidebar-nav-item">
				<a href="{{ url('/geradorconvite') }}" class="sidebar-nav-link">
					<div>
						<i class="fas fa-envelope"></i>
					</div>
					<span>Gerador de convites</span>
				</a>
			</li>

			<li  class="sidebar-nav-item">
            <a href="{{ url('/addbuffet')}}" class="sidebar-nav-link">
					<div>
						<i class="fas fa-plus-circle"></i>
					</div>
					<span>Cadastrar o seu local</span>
				</a>
			</li>

			<li  class="sidebar-nav-item">
				<a href="{{ url('/lista')}}" class="sidebar-nav-link">
						<div>
							<i class="fas fa-birthday-cake"></i>
						</div>
						<span>Todos espaços cadastrados</span>
					</a>
				</li>

			<li  class="sidebar-nav-item">
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
		<div class="row">
			
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-warning">
					<p>
						<i class="fas fa-spinner"></i>
					</p>
					<h3>13.</h3>
					<p>Alugueis em andamento</p>
				</div>
			</div>
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-success">
					<p>
						<i class="fas fa-check-circle"></i>
					</p>
					<h3>23</h3>
					<p>Festas finalizadas</p>
				</div>
			</div>
			
		</div>
		<div class="row">
			<div class="col-12 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h3>
							Usuários interessados
						</h3>
						<i class="fas fa-ellipsis-h"></i>
					</div>
					<div class="card-content">
						<table>
							<thead>
								<tr>
									<th>Ordem</th>
									<th>Espaço de interesse</th>
									<th>Email</th>
									<th>Situação</th>
									<th>Data planejada</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Buffet TESTE 1</td>
									<td>renatoaurelio@gmail.com</td>
									<td>
										<span class="dot">
											<i class="bg-success"></i>
											Aluguel completo
										</span>
									</td>
									<td>18/10/2020</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Buffet TESTE 1</td>
									<td>xandaosouza@hotmail.com</td>
									<td>
										<span class="dot">
											<i class="bg-warning"></i>
											Em processo
										</span>
									</td>
									<td>15/10/2020</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Buffet FINDFEST</td>
									<td>ustavoteles@bol.com</td>
									<td>
										<span class="dot">
											<i class="bg-warning"></i>
											Em processo
										</span>
									</td>
									<td>16/10/2020</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Casa com piscina</td>
									<td>danielprata@gmail.com</td>
									<td>
										<span class="dot">
											<i class="bg-danger"></i>
											Cancelado
										</span>
									</td>
									<td>10/10/2020</td>
								</tr>
								<tr>
									<td>5</td>
									<td>Casa com churrasqueira</td>
									<td>ianarnold@hotmail.com</td>
									<td>
										<span class="dot">
											<i class="bg-primary"></i>
											Pendente
										</span>
									</td>
									<td>21/10/2020</td>
								</tr>
								<tr>
									<td>6</td>
									<td>Festa residencial</td>
									<td>daniuebele@gmail.com</td>
									<td>
										<span class="dot">
											<i class="bg-primary"></i>
											Pendente
										</span>
									</td>
									<td>26/11/2020</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		
		</div>
		<div class="row">
			<div class="col-12 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h3>
							Seus locais cadastrados
						</h3>
					</div>
					<div class="card-content">
						<table>
							<thead>
								<tr>
									<th>Ordem</th>
									<th>Nome</th>
									<th>Telefone</th>
									<th>Endereço</th>
									<th>Disponibilidade</th>
									<th>Editar</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Buffet TESTE 1</td>
									<td>(13) 99187-1732</td>
									<td>Rua das flores, 32</td>
									<td>
										<span class="dot">
										<i class="bg-warning"></i>
										Não disponível
									</span>
								</td>
									<td> <i class="fas fa-pencil-alt"></i></td>
								</tr>

								<tr>
									<td>1</td>
									<td>Buffet FINDFEST</td>
									<td>(13) 96437-1772</td>
									<td>Rua das velas, 2</td>
									<td>
										<span class="dot">
											<i class="bg-warning"></i>
											Não disponível
										</span>
									</td>
									<td> <i class="fas fa-pencil-alt"></i></td>
								</tr>

								<tr>
									<td>1</td>
									<td>Casa com piscina</td>
									<td>(13) 99347-1732</td>
									<td>Avenida Presidente Wilson, 102</td>
									<td><span class="dot">
										<i class="bg-success"></i>
										Disponível
									</span></td>
									<td> <i class="fas fa-pencil-alt"></i></td>
								</tr>

								<tr>
									<td>1</td>
									<td>Casa com churrasqueira</td>
									<td>(13) 99187-1732</td>
									<td>Rua João Ramalho, 32</td>
									<td><span class="dot">
										<i class="bg-success"></i>
										Disponível
									</span></td>
									<td> <i class="fas fa-pencil-alt"></i></td>
								</tr>
								
							</tbody>
						</table>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- end main content -->
	<!-- import script -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
	<script src="assets/dashboard/index.js"></script>
	<!-- end import script -->
</body>
</html>