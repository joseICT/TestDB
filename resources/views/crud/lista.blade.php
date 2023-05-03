@extends('layouts.app')


@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
@yield('css')
<div class="container mt-5">
    <div class="card-body">
<table id="usuarios" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
            </tr>
        </thead>
    <tbody>
    @foreach($users as $lista)
    <tr>
        <td>{{$lista->name}}</td>
        <td>{{$lista->email}}</td>
    </tr>
    @endforeach
    </tbody>
</table>
</div>
</div>

@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function () {
    $('#usuarios').DataTable();
});
</script>
@endsection

