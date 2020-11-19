<template>
  <div>
      <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <router-link  to="/" class="brand-link">
            <img src="img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span class="brand-text font-weight-light">MACROFERIA</span>
            </router-link>

            <!-- Sidebar -->
            <div class="sidebar">
            
            
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                <img src="img/avatar.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                <router-link to="/panel" class="d-block">Alexander Pierce</router-link>
                </div>
            </div>


            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <router-link to="/panel" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Bienvenida
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </router-link>
                    
                </li>

                <!-- <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Widgets
                        <span class="right badge badge-danger">New</span>
                    </p>
                    </a>
                </li> -->

                <!-- <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Layout Options
                        <i class="fas fa-angle-left right"></i>
                        <span class="badge badge-info right">6</span>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="pages/layout/top-nav.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Top Navigation</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Top Navigation + Sidebar</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/layout/boxed.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Boxed</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Fixed Sidebar</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/layout/fixed-topnav.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Fixed Navbar</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/layout/fixed-footer.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Fixed Footer</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Collapsed Sidebar</p>
                        </a>
                    </li>
                    </ul>
                </li> -->

                <li class="nav-header">Panel de Administración</li>
    

                <li class="nav-item">
                    <router-link to="/roles-panel" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Roles
                    </p>
                    </router-link>
                </li>

                
                <li class="nav-item">
                    <router-link to="/usuarios-panel" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Usuarios
                    </p>
                    </router-link>
                </li>

                <li class="nav-item">
                    <router-link to="/categorias-panel" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Categorias
                    </p>
                    </router-link>
                </li>

                <li class="nav-item">
                    <router-link to="/productos-panel" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Productos
                    </p>
                    </router-link>
                </li>

                <li class="nav-item">
                    <router-link to="/banner-panel" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Banner
                    </p>
                    </router-link>
                </li>

                
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
  </div>
</template>

<script>
export default {
    name: 'Sidebar',
}
</script>

<style>

</style>