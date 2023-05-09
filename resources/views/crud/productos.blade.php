@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')

<div class="container mt-5">
    <div class="card-body">

<table id="producto" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Nombre del producto</th>
                <th>Codigo del producto</th>
                <th>Cantidad en bodega</th>               
            </tr>
        </thead>
    <tbody>
    @foreach($data as $lista)
    <tr>
        <td>{{$lista->nombre_del_producto}}</td>
        <td>{{$lista->codigo_producto}}</td>
        <td>{{$lista->cantidad_en_bodega}}</td>
    </tr>
    @endforeach
    </tbody>
</table>
</div>
</div>

@endsection



@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>

<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>

<script>
    /* $(document).ready(function () {
    $('#usuarios').DataTable();
    }); */
    $(document).ready(function () {
    $.noConflict();
    $('#producto').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf'
        ]
    });
});
</script>
@endsection