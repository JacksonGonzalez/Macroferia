<template>
  <div class="wrapper">
        <!-- Navbar -->
        <header-main></header-main>
        <!-- /.navbar -->

        <!-- Sidebar Menu -->
        <sidebar></sidebar>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Usuarios</h1>
                </div><!-- /.col -->
                <!-- <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Usuario</a></li>
                    <li class="breadcrumb-item active">Dashboard v3</li>
                    </ol>
                </div> -->
                <!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <!-- <h2 class="text-center">Roles</h2>  -->
                        <button class="btn btn-primary mr-3" @click="abrirModal('registrar')">Añadir Usuario</button>
                    </div>
                    <div class="col">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12">
                    <table class="table table-striped table-hover table-responsive">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Rol</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Pais</th>
                        <th scope="col">Departamento</th>
                        <th scope="col">Ciudad</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(user, index) in users" :key="user.id">
                        <th scope="row">{{ index+1 }}</th>
                        <td>{{ user.nombre}}</td>
                        <td>{{ user.usuario}}</td>
                        <td>{{ user.idRol}}</td>
                        <td>{{ user.email}}</td>
                        <td>{{ user.telefono}}</td>
                        <td>{{ user.pais}}</td>
                        <td>{{ user.departamento}}</td>
                        <td>{{ user.ciudad}}</td>
                        <td>{{ user.direccion}}</td>
                        <td>
                            <button class="btn btn-warning mr-1" @click="abrirModal('actualizar', user)">
                                <span class="material-icons">edit</span>
                            </button>
                            <button class="btn btn-danger" @click="deleteUser(user)">
                                <span class="material-icons">delete</span>
                            </button>
                        </td>
                        </tr>
                    </tbody>
                    </table>

                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <!-- Main Footer -->
        <footer-main></footer-main>

        <!-- MODAL USER -->
        <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="modalUser" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="modalUser">{{ tituloModal }}</h5>
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
                                    <div class="form-row">
                                        <div class="form-group col-6">
                                        <label for="name">Nombre</label>
                                        <input v-model="usuario.nombre" type="text" class="form-control" id="name" placeholder="Nombre" required>
                                        </div>
                                        <div class="form-group col-6">
                                        <label for="name">Usuario</label>
                                        <input v-model="usuario.usuario" type="text" class="form-control" id="usuario" placeholder="usuario" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-6">
                                            <label for="prodUser">Rol</label>
                                            <select v-model="usuario.idRol" class="form-control" placeholder="Rol" required>
                                                <option v-for="rol in roles" :key="rol.id" :value="rol.id">{{ rol.nombre }}</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-6">
                                        <label for="name">Correo</label>
                                        <input v-model="usuario.email" type="email" class="form-control" placeholder="Email@correo.com" required>
                                        </div>
                                    </div>

                                    <div class="form-row" v-if="tipoAccion==1">
                                        <div class="form-group col-6">
                                            <label for="name">Contraseña</label>
                                            <input v-model="usuario.password" type="password" class="form-control" placeholder="Contraseña" required>
                                        </div>
                                        <div class="form-group col-6">
                                        <label for="name">Confirmar Contraseña</label>
                                        <input v-model="usuario.c_password" type="password" class="form-control" placeholder="Confirmar Contraseña" required>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-6">
                                        <label for="name">Telefono</label>
                                        <input v-model="usuario.telefono" type="numeric" class="form-control" placeholder="Telefono" required>
                                        </div>
                                        <div class="form-group col-6">
                                        <label for="name">Pais</label>
                                        <input v-model="usuario.pais" type="text" class="form-control" placeholder="Pais" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-row">
                                        <div class="form-group col-6">
                                        <label for="name">Departamento</label>
                                        <input v-model="usuario.departamento" type="text" class="form-control" placeholder="Departamento" required>
                                        </div>
                                        <div class="form-group col-6">
                                        <label for="name">Ciudad</label>
                                        <input v-model="usuario.ciudad" type="text" class="form-control" placeholder="Ciudad" required>
                                        </div>
                                    </div>
                                    
                                    <label for="name">Direccion</label>
                                    <input v-model="usuario.direccion" type="text" class="form-control mb-3" placeholder="Direccion" required>

                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button type="button" v-if="tipoAccion==1" class="btn btn-primary" @click="addUser()">Crear Usuario</button>
                                    <button type="button" v-if="tipoAccion==2" class="btn btn-primary" @click="editUser()">Editar Usuario</button>
                                    </form>
                                </div>
                            </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!-- FIN MODAL USER -->

        </div>
</template>

<script>
    import Header from './../Header';
    import Footer from './../Footer';
    import Sidebar from './../Sidebar';

    export default {
        name: 'Usuarios',
        data(){
            return {
                loading: false,
                users: [],
                roles: [],
                nameRol: '',
                usuario: {
                    id:'',
                    nombre: '',
                    usuario: '',
                    idRol: '',
                    email: '',
                    password: '',
                    c_password: '',
                    telefono: '',
                    pais: '',
                    ciudad: '',
                    direccion: '',
                },
                tituloModal : '',
                tipoAccion : 0,
            }
        },
        components:{
            'header-main' : Header,
            'footer-main' : Footer,
            'sidebar' : Sidebar,
        },
        mounted() {
            this.getUsers();
        },
        methods : {
            getUsers(){
                axios.get("/api/admin/users", { headers:{ Authorization: "Bearer " + this.$store.state.token }})
                .then((res) => {
                if (res) {
                    // console.log(res.data);
                    this.users = res.data.users
                    // console.log(this.users);
                }
                })
                .catch((err) => {
                console.log(err);
                });
            },

            nombreRol(data){
                // this.nameRol = data +' Prueba';
                // this.idRol = $idRol;
                axios.get("/api/admin/roles/"+data, { headers:{ Authorization: "Bearer " + this.$store.state.token }})
                .then((res) => {
                if (res.data) {
                    // actualizar la data
                    // console.log(res.data.rol);
                    this.nameRol = res.data.rol.nombre;
                }
                })
                .catch((err) => {
                console.log("Error :", err);
                });
            },

            addUser(){
                axios.post("/api/admin/users", this.usuario, { headers:{ Authorization: "Bearer " + this.$store.state.token }})
                .then((res) => {
                if (res) {
                    // console.log(res.data.user);
                    this.getUsers();
                    $('#userModal').modal('hide');
                    alert('Usuario Creado Exitosamente');
                }
                })
                .catch((err) => {
                console.log(err);
                });
            },

            editUser(){
                axios.put("/api/admin/users/"+this.usuario.id, this.usuario, { headers:{ Authorization: "Bearer " + this.$store.state.token }})
                .then((res) => {
                if (res) {
                    this.getUsers();
                    $('#userModal').modal('hide');
                    alert('Usuario Editado Correctamente');
                }
                })
                .catch((err) => {
                console.log(err);
                });
            },

            deleteUser(data){
                let opcion = confirm("Desea eliminar el Usuario "+data['nombre']);
                if (opcion == true) {
                    axios.delete("/api/admin/users/"+data['id'], { headers:{ Authorization: "Bearer " + this.$store.state.token }})
                    .then((res) => {
                    if (res) {
        
                        this.getUsers();
                        alert('Usuario Eliminado Correctamente');
                    }
                    })
                    .catch((err) => {
                    console.log(err);
                    });
                }
            },

            getRoles: function() {
            // console.log(this.$store.state.token);
                axios.get("/api/admin/roles/", { headers:{ Authorization: "Bearer " + this.$store.state.token }})
                    .then((res) => {
                    if (res) {
                        // console.log(res.data.roles);
                        this.roles = res.data.roles
                        // console.log(this.roles);
                    }
                    })
                    .catch((err) => {
                    console.log(err);
                    });
            },

            abrirModal(accion, data = []){
                this.getRoles();
                switch(accion){
                    case 'registrar':
                    {
                        this.tituloModal = 'Crear Usuario';
                        this.tipoAccion = 1;
                        this.usuario.id = '';
                        this.usuario.nombre = '';
                        this.usuario.usuario = '';
                        this.usuario.idRol = '';
                        this.usuario.password = '';
                        this.usuario.telefono = '';
                        this.usuario.pais = '';
                        this.usuario.departamento = '';
                        this.usuario.ciudad = '';
                        this.usuario.direccion = '';
                        
                        $('#userModal').modal('show');
                        break;
                    }
                    case 'actualizar':
                    {
                        // console.log(data);
                        this.tituloModal = 'Editar Usuario';
                        this.tipoAccion = 2;
                        this.usuario.id = data['id'];
                        this.usuario.nombre = data['nombre'];
                        this.usuario.usuario = data['usuario'];
                        this.usuario.idRol = data['idRol'];
                        this.usuario.email = data['email'];
                        this.usuario.password = data['password'];
                        this.usuario.telefono = data['telefono'];
                        this.usuario.pais = data['pais'];
                        this.usuario.departamento = data['departamento'];
                        this.usuario.ciudad = data['ciudad'];
                        this.usuario.direccion = data['direccion'];
                        
                        $('#userModal').modal('show');
                        break;
                    }
                }
                    
                
            }
        }
    }
</script>

<style scoped>
    body{
        padding-top: 0 !important;
    }
</style>
