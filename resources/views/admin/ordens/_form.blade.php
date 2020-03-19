<div class="input-field">
  <input type="text" name="tipo" value="{{isset($registro->tipo) ? $registro->tipo : ''}}">
  <label>Tipo</label>
</div>

<div class="input-field">
  <input type="text" name="observacao" value="{{isset($registro->observacao) ? $registro->observacao : ''}}">
  <label>Observação</label>
</div>

<div class="input-field">
  <input type="text" name="tecnico" value="{{isset($registro->tecnico) ? $registro->tecnico : ''}}">
  <label>Técnico</label>
</div>

<div class="input-field">
  <p>
    <input type="checkbox" id="test5" name="status" {{isset($registro->publicado) && $registro->publicado == 'sim' ? 'checked' : '' }} value="true" />
    <label for="test5">Status?</label>
  </p>
  <br><br>
</div>
