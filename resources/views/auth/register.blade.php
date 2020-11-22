



<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="icone.png" href="assets/imglogin/icon.png"/>
	<title>Sua Festa | Sua Plataforma de Festas online</title>
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">


<style>
  *{padding:0;margin:0;box-sizing:border-box;font-family:poppins,sans-serif}body{font-family:Poppins,sans-serif;overflow:hidden}.wave{position:fixed;bottom:0;left:0;height:100%;z-index:-1}.wave1{position:fixed;bottom:0;right:0;height:100%;z-index:-1}.container{width:100vw;height:100vh;display:grid;grid-template-columns:repeat(2,1fr);grid-gap:7rem;padding:0 2rem}.img{display:flex;justify-content:flex-end;align-items:center}.back-link{display:flex;align-items:center;margin-top:40px;color:#000;font-size:18px;text-decoration:none;font-weight:500;transition:opacity .2s;margin-left:10px}.login-content{display:flex;justify-content:flex-start;align-items:center;text-align:center}.img img{width:650px}form{width:360px}.login-content img{height:100px}.login-content h2{margin:15px 0;color:#161616;text-transform:uppercase;font-size:2.9rem}.login-content .input-div{position:relative;display:grid;grid-template-columns:7% 93%;margin:25px 0;padding:5px 0;border-bottom:2px solid #d9d9d9}.login-content .input-div.one{margin-top:0}.i{color:#d9d9d9;display:flex;justify-content:center;align-items:center}.i i{transition:.3s}.input-div>div{position:relative;height:45px}.input-div>div>h5{position:absolute;left:10px;top:50%;transform:translateY(-50%);color:#161616;font-size:18px;transition:.3s}.input-div:after,.input-div:before{content:'';position:absolute;bottom:-2px;width:0%;height:2px;background-color:#9024b4;transition:.4s}.input-div:before{right:50%}.input-div:after{left:50%}.input-div.focus:after,.input-div.focus:before{width:50%}.input-div.focus>div>h5{top:-5px;font-size:15px}.input-div.focus>.i>i{color:#38d39f}.input-div>div>input{position:absolute;left:0;top:0;width:100%;height:100%;border:none;outline:0;background:0 0;padding:.5rem .7rem;font-size:1.2rem;color:#161616;font-family:poppins,sans-serif}.input-div.pass{margin-bottom:4px}a{display:block;text-align:right;text-decoration:none;color:#161616;font-size:.9rem;transition:.3s}a:hover{color:#9024b4}.btn{display:block;width:100%;height:50px;border-radius:25px;outline:0;border:none;background-image:linear-gradient(to right,#7c06a3,#7c06a3,#7c06a3);background-size:200%;font-size:1.2rem;color:#fff;font-family:Poppins,sans-serif;text-transform:uppercase;margin:1rem 0;cursor:pointer;transition:.5s}.btn:hover{background-position:right}@media screen and (max-width:1050px){.container{grid-gap:5rem}}@media screen and (max-width:1000px){form{width:290px}.login-content h2{font-size:2.4rem;margin:8px 0}.img img{width:400px}}@media screen and (max-width:900px){.container{grid-template-columns:1fr}.img{display:none}.wave{display:none}.login-content{justify-content:center}}
</style>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

	<script src="sweetalert2.all.min.js"></script>
	<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
	<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

	
</head>
<body>
	<img class="wave" src="assets/imglogin/wave.png">

	<a href="{{ url('index') }}" class="back-link">
            <img src="assets/imglogin/arrowleft.svg" size={8} color="#E02041" />
            Voltar para home
            </a>
	
	
	<div class="container">

		<div class="img">
			<img src="assets/imglogin/logo.png">
		</div>


		<div class="login-content">
			<form method="POST" action="{{ route('register') }}">
                @csrf
				<img src="assets/imglogin/chapeuzin.png">
				<h2 class="title">FAÇA O CADASTRO</h2>


			<br>




				

				<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		
                              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nome">

							  @error('name')
							  <script> Swal.fire({
								  icon: 'error',
								  title: 'Oops...',
								  text: 'Esse email já foi cadastrado.'
								  })
								 </script>  
							  @enderror
           		   </div>
           		</div>


           		
				   <div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">

					<input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
								<script> Swal.fire({
									icon: 'error',
									title: 'Oops...',
									text: 'Esse email já foi cadastrado.'
									})
						   		</script>  
                                @enderror


           		   </div>
                   </div>
                   


 <div class="input-div pass">
           		   <div class="i">
           		   		<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Senha">
				
				
					@error('password')
					<script> Swal.fire({
						icon: 'error',
						title: 'Oops...',
						text: 'As senhas não coincidem.'
						})
					   </script>  
					@enderror
				
				
				
				
				</div>
                   </div>


           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirme sua senha">

						   
				   </div>
				   
				</div>

				
				
				






            <a href='{{ url('login') }}'>Já possuo cadastro</a>
            
            <button type="submit" class="btn btn-primary">
                {{ __('Cadastrar') }}
            </button>
			</form>
        </div>
	</div>



	
    <img class="wave1" src="assets/imglogin/wave1.png">

	

</body>

<script src="assets/jslogin/main.js"></script>
</html>

