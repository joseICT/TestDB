<!-- esto es una prueba aun no funciona -->
<h1>listado</h1>
@foreach($inventario as $lista)
    <p>Nombre:{{$lista->encargado}},  email:{{$lista->usuario}}</p><br>    
@endforeach
