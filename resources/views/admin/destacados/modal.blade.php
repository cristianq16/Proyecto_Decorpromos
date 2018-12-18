<!--Modal crear-->
<div class="container">
    <div class="row">
        <div class="col">
            <div class="modal fade" id="dModal" tabindex="-1" role="dialog" area-labelledby="dModal" area-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="modal-header">
                                <h3 class="modal-title">Crear trabajo destacado</h3>
                                <button class="close" data-dismiss="modal" aria-label="Cerrar" id="cerrar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                        <form id="modalDestacados" action="{{route('destacados.store')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="titulo">Titulo</label>
                                        <input required type="text" class="form-control" id="titulo" placeholder="Titulo"
                                            name="titulo">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="descripcion">Descripcion</label>
                                        <textarea type="text" rows="3" class="form-control" id="descripcion" placeholder="Descripcion..." name="descripcion"></textarea>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="imagenDestacado">Subir imagen</label>
                                        <input type="file" class="form-control-file" name="imagenDestacado" id="imagenDestacado">
                                    </div>
                                </div>
                                
                                <input required type="submit" name="crear" id="crear" class="btn btn-primary btn-lg" value="Crear">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Modal-->

<!--Modal 2 editar-->
<div class="container">
    <div class="row">
        <div class="col">
            <div class="modal fade" id="eModal" tabindex="-1" role="dialog" area-labelledby="eModal" area-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="modal-header">
                                <h3 class="modal-title">Editar trabajo destacado</h3>
                                <button class="close" data-dismiss="modal" aria-label="Cerrar" id="cerrar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                        <form id="modalDestacados" action="{{route('destacados.update','test')}}" method="POST" enctype="multipart/form-data">
                            {{method_field('patch')}}
                            {{ csrf_field() }}
                                <input type="hidden" name="destacado_id" id="destacado_id">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="titulo">Titulo</label>
                                        <input required type="text" class="form-control" id="titulo" placeholder="Titulo"
                                            name="titulo">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="descripcion">Descripcion</label>
                                        <textarea type="text" rows="3" class="form-control" id="descripcion" placeholder="Descripcion..." name="descripcion"></textarea>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="imagenDestacado">Subir imagen</label>
                                        <input type="file" class="form-control-file" name="imagenDestacado" id="imagenDestacado">
                                    </div>
                                </div>

                                <input required type="submit" name="editar" id="editar" class="btn btn-primary btn-lg" value="Editar">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Modal 3 eliminar-->
<div class="modal modal-danger fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="deleteModalLabel">Confirmacion de eliminacion</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('destacados.destroy', 'test')}}" method="POST">
        {{method_field('delete')}}
        {{ csrf_field() }}
        <input type="hidden" name="delete_id" id="delete_id" value="">
        <div class="modal-body">
            Esta seguro de eliminarlo?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
            <input type="submit" name="eliminar" id="eliminar" class="btn btn-danger" value="Eliminar">
        </div>
      </form>
    </div>
  </div>
</div>