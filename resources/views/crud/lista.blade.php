<h1>listado</h1>
@foreach($users as $lista)
    <p>Nombre:{{$lista->name}}, email:{{$lista->email}}</p><br>
@endforeach
}