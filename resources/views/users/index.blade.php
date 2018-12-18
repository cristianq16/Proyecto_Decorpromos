@include('templates.head')
<br><br><br><br>
<h2>Listado de usuarios</h2>

<div class="container">
        <div class="row mt-3">
            <div class="col">
                <table class="table table-striped table-bordered table-hover  table-responsive">
                    <thead>
                        <tr>
                            <th>
                                Nombre
                            </th>
                            <th>
                                Email
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td><a href="{{url('/usuarios/'.$user->id)}}">Ver mas</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>