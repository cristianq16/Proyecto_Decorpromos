@extends('admin.layout')

@section('content')
    <h1>Trabajos destacados</h1>

    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <table class="table table-striped table-bordered table-hover  table-responsive">
                    <thead>
                        <tr>
                            <th>
                                Titulo
                            </th>
                            <th>
                                Descripcion
                            </th>
                            <th>
                                Editar
                            </th>
                            <th>
                                Eliminar
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($destacados as $destacado)
                            <tr>
                                <td>{{$destacado->titulo}}</td>
                                <td>{{$destacado->descripcion}}</td>
                                <td> <a href="#eModal" data-mytitle="{{$destacado->titulo}}" data-mydescription="{{$destacado->descripcion}}" data-destacadoid="{{$destacado->id}}" data-toggle="modal" class="btn btn-primary">Editar</a></td>
                                <td> <a class="btn btn-danger" data-target="#deleteModal" data-deleteid="{{$destacado->id}}" data-toggle="modal">Eliminar</a></td>
                                {{-- <td> <a href=""><i class="fal fa-user-minus"></i></a></td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="">
                    <a href="#dModal" data-toggle="modal" class="btn btn-primary btn-lg">Añadir nuevo</a>
                </div>
            </div>
        </div>
    </div>

    @include('admin.destacados.modal')
@endsection