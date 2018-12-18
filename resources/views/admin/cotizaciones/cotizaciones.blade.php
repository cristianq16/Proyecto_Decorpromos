@extends('admin.layout')

@section('content')
    <h1>Trabajos destacados</h1>

    <div class="container">
        <div class="row mt-3">
            <div class="col table-responsive-md">
                <table class="table table-striped table-bordered table-hover  ">
                    <thead>
                        <tr>
                            <th>
                                Nombre
                            </th>
                            <th>
                                Ciudad
                            </th>
                            <th>
                                Barrio
                            </th>
                            <th>
                                Telefono
                            </th>
                            <th>
                                E-mail
                            </th>
                            <th>
                                Medidas
                            </th>
                            <th>
                                Uso
                            </th>
                            <th>
                                Informacion
                            </th>
                            <th>
                                Fecha
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cotizaciones as $cotizacion)
                            <tr>
                                <td>{{$cotizacion->nombre}}</td>
                                <td>{{$cotizacion->ciudad}}</td>
                                <td>{{$cotizacion->barrio}}</td>
                                <td>{{$cotizacion->telefono}}</td>
                                <td>{{$cotizacion->email}}</td>
                                <td>{{$cotizacion->opcion}}</td>
                                <td>{{$cotizacion->usos}}</td>
                                <td>{{$cotizacion->informacion}}</td>
                                <td>{{$cotizacion->created_at}}</td>
                                {{-- <td> <a href="#eModal" data-mytitle="{{$destacado->titulo}}" data-mydescription="{{$destacado->descripcion}}" data-destacadoid="{{$destacado->id}}" data-toggle="modal" class="btn btn-primary">Editar</a></td> --}}
                                <td> <a class="btn btn-danger" data-target="#deleteModal" data-deleteid="{{$cotizacion->id}}" data-toggle="modal">Eliminar</a></td>
                                <td> <a href=""><i class="fal fa-user-minus"></i></a></td>
                            </tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@include('admin.cotizaciones.modal')
@endsection