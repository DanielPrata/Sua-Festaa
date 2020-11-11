<h2>{{$buffets->nome}}</h2>
<br>
<h2>{{$buffets->descricao}}</h2>
<br>
<h2>{{$buffets->endereco}}</h2>
<br>
<h2>{{$buffets->valor}}</h2>
<br>
<h2>{{$buffets->telefone}}</h2>
<br>
<h2>{{$buffets->email}}</h2>
<br>
@if ($buffets->residencial === 0)
<h2> Não oferece festa residencial </h2>
@else
<h2> Oferece festa residencial. </h2>
@endif
<br>
@if ($buffets->casamento === 0)
<h2> Não oferece festa de casamento </h2>
@else
<h2> Oferece festa de casamento. </h2>
@endif
<br>
@if ($buffets->infantil === 0)
<h2> Não oferece festa infantil </h2>
@else
<h2> Oferece festa infantil. </h2>
@endif
<br>



<a href="mailto:{{$buffets->email}}">Enviar email</a>

<br><br>

<a href="https://api.whatsapp.com/send?phone=55{{$buffets->telefone}}&text=Olá,%20meu%20amigo!.">Whatsaap</a>

