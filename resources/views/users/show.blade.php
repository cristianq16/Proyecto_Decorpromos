@include('templates.head')
<br><br><br><br>
<h2>Usuario # {{$usuario->id}}</h2>
<p>Nombre : {{$usuario->name}}</p>
<p>Nombre : {{$usuario->email}}</p>
<a href="{{url('/usuarios/')}}">Regresar </a>