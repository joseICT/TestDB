<!-- esto es una prueba aun no funciona -->
<h1>listado</h1>
@foreach($inventario as $lista)
    <p>Nombre:{{$lista->inarti}},  email:{{$lista->incant}}</p><br>    
@endforeach
