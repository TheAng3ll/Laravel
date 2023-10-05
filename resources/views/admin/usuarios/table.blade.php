<style type="text/css">
    .columna
  {
    text-align: center;
   
    
  }
  .filas
  {
     text-align: center; 
     
  }

  .tables
  {
    font-size:12px;

    margin-top:-100px;

  }
</style>
<div class="tables">
<table class="table table-dark table-hover">
  <h3 id="Lista">Usuarios</h3>
  <thead>
    <tr>
      <th class="filas" scope="col">ID</th>
      <th class="filas" scope="col">Name</th>
      <th class="filas" scope="col">Password</th>
      <th class="filas" scope="col">Direccion</th>
      <th class="filas" scope="col">Telefono</th>
      <th class="filas" scope="col">Union</th>
      <th class="filas" scope="col">Pago</th>
      <th class="filas" scope="col">Total</th>
      <th class="filas" scope="col">Foto</th>
      <th class="filas" scope="col">Editar</th>
      <th class="filas" scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
    @foreach($usuarios as $usu)
    <tr>
      <th class="columna" scope="row">{{ $usu->id }}</th>
      <th class="columna" scope="row">{{ $usu->name_usuario }}</th>
      <th class="columna" scope="row">{{ $usu->password_usuario }}</th>
      <th class="columna" scope="row">{{ $usu->direccion_usuario }}</th>
      <th class="columna" scope="row">{{ $usu->telefono_usuario }}</th>
      <th class="columna" scope="row">{{ $usu->fecha_union }}</th>
      <th class="columna" scope="row">{{ $usu->tipo_pago }}</th>
      <th class="columna" scope="row">{{ $usu->total_comprado }}</th>
      <th class="columna" scope="row">{{ $usu->fotografia }}</th>
      <th class="columna" scope="row"><a href="/admin/usuarios/{{ $usu->id }}/edit">Editar</a> </th>
      <th class="columna" scope="row"> <a href="/admin/usuarios/{{ $usu->id }}">Eliminar</a></th>
    </tr>
    @endforeach
  </tbody>
</table>
</div>