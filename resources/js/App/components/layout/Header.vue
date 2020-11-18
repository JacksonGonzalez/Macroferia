<template>
  <div>
    <!--Main Navigation-->
    <!-- <header>
      <nav class="navbar navbar-expand-lg navbar-dark default-color">
        <a class="navbar-brand" href="#"><strong>Navbar</strong></a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"
                >Home <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Opinions</a>
            </li>
          </ul>
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a class="nav-link"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"><i class="fab fa-twitter"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"><i class="fab fa-instagram"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header> -->

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <router-link class="navbar-brand" to="/">MACROFERIA</router-link>
            <!-- <a class="navbar-brand" href="/">MACROFERIA</a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto justify-content-center">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categorias
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a v-for="(item, index) in categoriasArray" :key="index"  
                    class="dropdown-item" :href="/productosxcategoria/+item" >Categoria {{item}}</a>
                  </div>
                </li>
                
                <li class="nav-item">
                  <router-link class="nav-link" to="/panel">Panel de Control</router-link>
                </li>
                <li class="nav-item">
                  <router-link class="nav-link" to="/productos">Mis Productos</router-link>
                </li>
                <li class="nav-item">
                  <router-link class="nav-link" to="/mensage">Mensajes</router-link>
                </li>
                <li class="nav-item">
                  <router-link class="nav-link" to="/contactenos">Contactenos</router-link>
                </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
            <nav class="navbar">
              <li class="nav-link dropdown">
                <a class="btn btn-success nav-item dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Ingresar
                </a>
                <div class="dropdown-menu text-black" aria-labelledby="navbarDropdownMenuLink">
                  <!-- <a v-for="(item, index) in categoriasArray" :key="index"  
                  class="dropdown-item" :href="/productosxcategoria/+item" >Categoria {{item}}</a> -->
                  <button type="button" class="btn btn-link text-black" data-toggle="modal" data-target="#loginModal">
                  Ingresar</button>
                  <button type="button" class="btn btn-link text-black" data-toggle="modal" data-target="#registerModal">
                  Registrarse</button>
                </div>
              </li>
            </nav>
              
            <!-- <button class="btn btn-success ml-2 my-2 my-sm-0" type="submit">Iniciar Sesion</button> -->
            </div>
        </nav>
    </header>
    <!--Main Navigation-->



      <!-- Modal LOGIN -->
      <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="loginModalLabel">Iniciar Sesión</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <img src="img/imagenmacro.png" alt="macroferia" class="img-fluid rounded mx-auto">
                            </div>
                            <div class="col-md-6">
                                <form>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Correo Electronico</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Contraseña</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                  </div>
                                  <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                  </div>
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                  <button type="submit" class="btn btn-primary">Ingresar</button>
                                </form>
                            </div>
                        </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- FIN MODAL LOGIN -->

      <!-- MODAL REGISTER -->
      <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="modalregisterlabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalregisterlabel">Registrarse</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <img src="img/imagenmacro.png" alt="macroferia" class="img-fluid rounded mx-auto">
                            </div>
                            <div class="col-md-6">
                                <form>
                                  <div class="form-group">
                                    <label for="name">Nombre</label>
                                    <input type="text" class="form-control" id="name" placeholder="Nombre Completo">
                                  </div>
                                  <div class="form-group">
                                    <label for="usuario">Usuario</label>
                                    <input type="text" class="form-control" id="usuario" placeholder="Usuario">
                                  </div>
                                  <div class="form-group">
                                    <label for="rol">Rol</label>
                                    <select class="form-control" id="rol">
                                      <option>Fabricante</option>
                                      <option>Comerciante</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="email">Correo Electronico</label>
                                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                  </div>
                                  <div class="form-group">
                                    <label for="password">Contraseña</label>
                                    <input type="password" class="form-control" id="password">
                                  </div>
                                  <div class="form-group">
                                    <label for="telefono">Telefono</label>
                                    <input type="text" class="form-control" id="telefono" placeholder="Numero de Celular o Telefono">
                                  </div>
                                  <div class="form-group">
                                    <label for="pais">Pais</label>
                                    <input type="text" class="form-control" id="pais" placeholder="Pais">
                                  </div>
                                  <div class="form-group">
                                    <label for="departamento">Departamento</label>
                                    <input type="text" class="form-control" id="departamento" placeholder="Departamento">
                                  </div>
                                  <div class="form-group">
                                    <label for="ciudad">Ciudad</label>
                                    <input type="text" class="form-control" id="ciudad" placeholder="Ciudad">
                                  </div>
                                  <div class="form-group">
                                    <label for="adres">Direccion</label>
                                    <input type="text" class="form-control" id="adres" placeholder="Direccion">
                                  </div>
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                  <button type="submit" class="btn btn-primary">Registrarse</button>
                                </form>
                            </div>
                        </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- FIN MODAL REGISTER -->
  </div>
</template>

<script>

export default {
  
  name: "Header",
  data() {
    return {
      loading: false,
      categoriasArray : [1, 2],
    };
  },
  components: {},
  mounted() {},
};
</script>

<style scoped>



</style>
