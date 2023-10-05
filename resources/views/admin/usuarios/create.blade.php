<style type="text/css">
  #Lista
  {
    margin-top:80px;
    text-align:center;
  }
  .grupo
  {margin-left:-300px;
    
    margin-bottom:150px;
    margin-top:-500px;
  }
  .input-group
  {
   margin-top:30px;
    top:0px;
    margin-left:480px;
    width:700px;
    margin-bottom:-150px;
  }
  #añadir
  {

    position: relative; 
    left:800px; 
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
  .dropdown
  {
    width:90px;
    margin-top:50px;
    margin-bottom:200px;
    left:30px;
/*     pointer-events:none;  */
  }
</style>


<div class="grupo">
  <form action="{{ url('/admin/usuarios') }}" method="post" enctype="multipart/form-data">
    @csrf
<div class="input-group mb-3" te>
  <input type="text" class="form-control" style="margin-right:30px" name="name_usuario" placeholder="Nombre" aria-label="Username" aria-describedby="basic-addon1" required>

  <input type="text" class="form-control" name="password_usuario" placeholder="Contraseña" aria-label="Recipient's username" aria-describedby="basic-addon2" required>

</div>

<div class="input-group mb-3" style="margin-top:30px;">

  <input type="text" style="margin-right:30px"  class="form-control" name="direccion_usuario"  placeholder="Direccion" aria-label="Username" aria-describedby="basic-addon1" required>

  <input type="text" class="form-control" name="telefono_usuario"  placeholder="Telefono" aria-label="Recipient's username" aria-describedby="basic-addon2" required>

</div>


<div class="input-group mb-3" style="margin-top:30px;" >
  <input type="text" style="margin-right:30px"  class="form-control" name="fecha_union" placeholder="Creacion" aria-label="Username" aria-describedby="basic-addon1" required>

  <input type="text" class="form-control" style="margin-right:30px" name="tipo_pago"  placeholder="Metodo de pago" aria-label="Recipient's username" aria-describedby="basic-addon2" required>

  <input type="text" class="form-control" name="total_comprado"  placeholder="Total de compras" aria-label="Username" aria-describedby="basic-addon1" required>
</div>
<div class="input-group mb-3" >
  <input type="file" placeholder="Foto" id="imagens" name="fotografia" accept="image/*" required>
  </div>
<input type="submit" name="enviar" id="añadir">
</form>
</div>