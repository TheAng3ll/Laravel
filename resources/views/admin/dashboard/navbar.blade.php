<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/categoria') }}">
              <span data-feather="file"></span>
              Categorias
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/productos1') }}">
              <span data-feather="shopping-cart"></span>
              Productos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/usuarios') }}">
              <span data-feather="file"></span>
              Usuarios
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/ordenes') }}">
              <span data-feather="users"></span>
              Ordenes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Ventas
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Tickets
            </a>
          </li>
        </ul>
      </div>
    </nav>
