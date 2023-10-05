<div>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
    <style type="text/css">
  .form-control
  {
    
    margin:5px;
  }
</style>



<div>
  <nav style="height: 50px;" class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="{{ route('inicio') }}">StoreApp</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('producto') }}">Productos <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin') }}">Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" id="test">Disabled</a>
      </li>
    </ul>
    <form class="form-inline mt-2 mt-md-0">
      
      {{-- esta es el area para el login --}}
      <input type="text" class="form-control" id="user" placeholder="Nombre">
      <input type="password" class="form-control" id="pass" placeholder="Password">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="login()">Login</button>
      <a class="nav-link" href="{{ route('singup.index') }}" >Sing up</a>
    </form>
  </div>
</nav>
</div>

</div>