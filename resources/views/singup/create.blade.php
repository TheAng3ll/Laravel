

<style type="text/css">
  .group
  {
   position: relative;
  top: 200px;
  left: 50%;
  margin-bottom:280px;
  transform: translate(-50%, -50%);
  width: 300px;
  }
</style>
{{-- campos para el registro --}}
<form class="group" action="{{ url('singup') }}" method="post" enctype="multipart/form-data" >
  @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Username</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Password</label>
    <input type="password" class="form-control" id="exampleFormControlInput1" name="password" placeholder="Password">
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary btn-sm">Registrar</button>
  </div>
</form>

