
<div class="modal fade" id="modal-delete-{{$ejecutor->id}}" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Eliminar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>¿Está seguro que desea eliminar al integrante <b>{{$ejecutor->nombres}}</b> ?</p>
        {{-- {{dd($ejecutor)}} --}}
      </div>
      <div class="modal-footer">
        <form method="POST" action="{{route('ejecutores.destroy', $ejecutor->id)}}">
          @csrf
          @method('delete')

          <input type="hidden" name="ejecutor_id" value="{{$ejecutor->id}}">
          
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-danger"> Eliminar</button>
        </form>

      </div>
    </div>
  </div>
</div><!-- End Basic Modal-->