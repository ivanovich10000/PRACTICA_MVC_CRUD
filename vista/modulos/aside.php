 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="vista/assets/dist/img/salqui.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light font-weight-bold">Salqui Importaciones</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="vista/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block font-weight-light font-weight-bold">Ivan Alvarado Quispe</a>
        </div>
      </div>

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="vista/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block font-weight-light font-weight-bold">Alex</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item">
                <a href="#" class="nav-link" onclick="CargarContenido('vista/panel_principal.php','content-wrapper')">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Panel principal
                </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link" onclick="CargarContenido('vista/cliente.php','content-wrapper')">
                <i class="nav-icon fas fa-user-tie"></i>
                <p>
                    Cliente
                </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link" onclick="CargarContenido('vista/proveedor.php','content-wrapper')">
                <i class="nav-icon fab fa-supple"></i>
                <p>
                    Proveedor
                </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link" onclick="CargarContenido('vista/productos.php','content-wrapper')">
                <i class="nav-icon fab fa-adversal"></i>

                <p>
                    Productos
                </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link" onclick="CargarContenido('vista/usuarios.php','content-wrapper')">
                <i class="nav-icon fas fa-users"></i>

                <p>
                    Usuarios
                </p>
                </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>