
<h2>añadir usuario</h2>

<form action="{{url('usuarios/crear')}}" method="POST">
    {!!csrf_field()!!}
    <label for="nombre">Nombre: </label>
    <input type="text" required name="nombre">
    <label for="nombre">Email: </label>
    <input type="text" required name="email">
    <label for="nombre">Password: </label>
    <input type="password"required name="password">
<button type="submit">Crear</button>
</form>