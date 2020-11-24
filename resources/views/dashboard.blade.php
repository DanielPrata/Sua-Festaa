<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>

	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="icon" type="icone.png" href="assets/imglogin/icon.png"/>

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
				<a href="{{ url('/dashboard') }}" class="sidebar-nav-link">
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
			<div class="col-12 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h3>
							Seus locais
						</h3>
						
					</div>
					<div class="card-content">
						<table>

							@if ($buffets == null)

							<h1>Você não cadastrou nenhum local ainda.</h1>
								
							@else

							<thead>
								<tr>
									<th>Espaço de interesse</th>
									<th>Email</th>
									<th>Endereço do local</th>
									<th>Telefone</th>								
								</tr>
							</thead>

							@foreach ($buffets as $b)

							<tbody>
								<tr>
								
									<td>{{ $b->nome }}</td>
									<td>{{ $b->email }}</td>
									<td>{{ $b->endereco }}</td>
									<td> {{ $b->telefone }} </td>
									
								</tr>
								
							</tbody>

							@endforeach
								
							@endif
							
							
						</table>
					</div>
				</div>
			</div>
		
		</div>
		<div class="row">
			
			
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-success">
					<a href="{{ url('/geradorconvite')}}" style="text-decoration: none; color: inherit;">
					<p>
						<i class="fas fa-envelope"></i>
					</p>
					<h3>Gerador de convites</h3>
					<p>&nbsp;</p>
					</a>
				</div>
			</div>


			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-success">
					<a href="{{ url('/addbuffet')}}" style="text-decoration: none; color: inherit;">
					<p>
						<i class="fas fa-plus-circle"></i>
					</p>
					<h3>Cadastrar o seu local</h3>
					<p>&nbsp;</p>
					</a>
				</div>
			</div>

			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-success">
					<a href="{{ url('/lista')}}" style="text-decoration: none; color: inherit;">
					<p>
						<i class="fas fa-birthday-cake"></i>
					</p>
					<h3>Todos espaços cadastrados</h3>
					<p>&nbsp;</p>
					</a>
				</div>
			</div>

			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-success">
					<a href="{{ url('/home')}}" style="text-decoration: none; color: inherit;">
					<p>
						<i class="fas fa-sign-out-alt"></i>
					</p>
					<h3>Voltar pra home</h3>
					<p>&nbsp;</p>
					</a>
				</div>
			</div>
			
		</div>

		<div class="row">
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counterlinha1">
					<p>
						&nbsp;
					</p>
					
					<p>&nbsp;</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counterlinha1">
					<p>
						&nbsp;
					</p>
					
					
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counterlinha1">
					<p>
						&nbsp;
					</p>
					
					
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counterlinha1">
					<p>
						&nbsp;
					</p>
					
					
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