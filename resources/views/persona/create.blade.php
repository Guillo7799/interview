

<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar persona</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('add_persona.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="modal-body">
        <div class="mb-3">
          <label for="name" class="form-label">Nombre</label>
          <input type="text"
            class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Ingresa los nombres de la persona">
        </div>
        <div class="mb-3">
          <label for="lastname" class="form-label">Apellido</label>
          <input type="text"
            class="form-control" name="lastname" id="lastname" aria-describedby="helpId" placeholder="Ingresa los apellidos de la persona">
        </div>
        <div class="mb-3">
          <label for="identification" class="form-label">Cédula</label>
          <input type="number"
            class="form-control" name="identification" id="identification" aria-describedby="helpId" placeholder="Ingresa la cédula de la persona">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email"
            class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Ingresa el correo de la persona">
        </div>
        <div class="mb-3">
          <label for="phone" class="form-label">Teléfono</label>
          <input type="number"
            class="form-control" name="phone" id="phone" aria-describedby="helpId" placeholder="Ingresa el correo de la persona">
        </div>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </div>
    </form>
    </div>
  </div>
</div>