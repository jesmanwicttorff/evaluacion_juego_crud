<h1>{{$modo}} Juego</h1>
<div class="form-group">
<label for="NOMBRE">Nombre del Juego</label>
<input type="text" class="form-control" name="nombreJuego" value="{{ isset($gameEdit->nombreJuego)?$gameEdit->nombreJuego : '' }}" required>

</div>
<div class="form-group">
<label for="URL">URL</label>
<input type="text" class="form-control" name="urlJuego" value="{{ isset($gameEdit->urlJuego)?$gameEdit->urlJuego : '' }}" required>

</div>
<div class="form-group">
<label for="NOMBRE">Descripcion del Juego</label>
<input class="form-control" type="text" name="descripcionJuego" value="{{ isset($gameEdit->descripcionJuego)?$gameEdit->descripcionJuego : '' }}" required>

</div>
<label for="CARGAR"></label>
@if(isset($gameEdit->urlImagenJuego))
<img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$gameEdit->urlImagenJuego}}" alt="" width="100" required>
@endif
<input type="file" class="form-control" name="urlImagenJuego" value="">

<input type="hidden" name="status" value="1">
<input type="submit" class="btn btn-success" value="Guardar">
<a href="{{url('juego/')}}" class="btn btn-primary">Regresar</a>