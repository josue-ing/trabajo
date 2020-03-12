@extends('plantilla')
@section('contenido')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Marcas</h3>
                </div>
                <div class="card-body">
                    <table>
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Marca</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Esto es un comentario -->
                            @foreach ($marcas as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->marca}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
