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
      <form action="{{route('cotizaciones.destroy', 'test')}}" method="POST">
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