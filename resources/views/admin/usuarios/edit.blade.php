<style type="text/css">
 /*  .grupo
  { 
    margin-top:-500px;
    margin-left:-300px;
    
    margin-bottom:150px;
  } */
  /* .input-group
  {
    margin-top:30px;
    top:0px;
    margin-left:480px;
    width:700px;
    margin-bottom:-150px;
  } */
  #añadir
  {

    position: relative; 
    margin-left:740px; 
    background-color: white ;
    top:30px; width:150px; border-radius: 10px; 
    height: 35px; border: none;
  }
  #añadir:hover
  {
    background-color:grey;
    color white;
  }
  .columna
  {
    margin-left:25px;
  } 
</style>

<h1>Edicion</h1>
<div class="grupo">
  <form action="/admin/usuarios/{{ $usuarios->id }} " method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
<div class="input-group mb-3" te>
  <input type="text" class="form-control" style="margin-right:30px" name="name_usuario" placeholder="Nombre" aria-label="Username" aria-describedby="basic-addon1" value="{{ $usuarios->name_usuario }}" required>

  <input type="text" class="form-control" name="password_usuario" placeholder="Contraseña" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{ $usuarios->password_usuario }}" required>

</div>

<div class="input-group mb-3" style="margin-top:30px;">

  <input type="text" style="margin-right:30px"  class="form-control" name="direccion_usuario"  placeholder="Direccion" aria-label="Username" aria-describedby="basic-addon1" value="{{ $usuarios->direccion_usuario }}" required>

  <input type="text" class="form-control" name="telefono_usuario"  placeholder="Telefono" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{ $usuarios->telefono_usuario }}" required>

</div>


<div class="input-group mb-3" style="margin-top:30px;" >
  <input type="text" style="margin-right:30px"  class="form-control" name="fecha_union" placeholder="Creacion" aria-label="Username" aria-describedby="basic-addon1" value="{{ $usuarios->fecha_union}}" required>

  <input type="text" class="form-control" style="margin-right:30px" name="tipo_pago"  placeholder="Metodo de pago" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{ $usuarios->tipo_pago }}" required>

  <input type="text" class="form-control" name="total_comprado"  placeholder="Total de compras" aria-label="Username" aria-describedby="basic-addon1" value="{{ $usuarios->total_comprado }}" required>
</div>
<div class="input-group mb-3" >
  <input type="file" placeholder="Foto" id="imagens" name="fotografia">
  </div>
<input type="submit" name="enviar" id="añadir">
</form>
</div>