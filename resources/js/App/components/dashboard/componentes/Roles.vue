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
                    <h1 class="m-0 text-dark">Roles</h1>
                </div><!-- /.col -->
                <!-- <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Rol</a></li>
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
                        <button class="btn btn-primary float-left mr-3" @click="abrirModal('registrar')">Añadir Rol</button>
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
                        <th scope="col">nombre</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Roles</th>
                        <th scope="col">Productos Usuario</th>
                        <th scope="col">Productos Admin</th>
                        <th scope="col">Categorias</th>
                        <th scope="col">Banners</th>
                        <th scope="col">Usuarios</th>
                        <!-- <th scope="col">Creado</th> -->
                        <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(rol, index) in roles" :key="rol.id">
                        <th scope="row">{{ index+1 }}</th>
                        <td>{{rol.nombre}}</td>
                        <td><p v-if="rol.tipo == 0">Usuario</p><p v-if="rol.tipo == 1">Admin</p></td>
                        <td><p v-if="rol.roles == 0">No</p><p v-if="rol.roles == 1">Si</p></td>
                        <td><p v-if="rol.productos == 0">No</p><p v-if="rol.productos == 1">Si</p></td>
                        <td><p v-if="rol.autorizar == 0">No</p><p v-if="rol.autorizar == 1">Si</p></td>
                        <td><p v-if="rol.categorias == 0">No</p><p v-if="rol.categorias == 1">Si</p></td>
                        <td><p v-if="rol.banner == 0">No</p><p v-if="rol.banner == 1">Si</p></td>
                        <td><p v-if="rol.usuarios == 0">No</p><p v-if="rol.usuarios == 1">Si</p></td>
                        <!-- <td>{{rol.created_at}}</td> -->
                        <td>
                            <button class="btn btn-warning mr-1" @click="abrirModal('actualizar',rol)">
                                <span class="material-icons">edit</span>
                            </button>
                            <button class="btn btn-danger" @click="deleteRol(rol)">
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

        <!-- MODAL ROL -->
        <div class="modal fade" id="addRolModal" tabindex="-1" aria-labelledby="modalAddRol" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="modalAddRol">{{ tituloModal }}</h5>
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
                                        <input v-model="rol.nombre" type="text" class="form-control" id="name" placeholder="Nombre" required>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="tipo">Tipo</label>
                                            <select v-model="rol.tipo" class="form-control" id="tipo" required>
                                                <option value="1">Administrador</option>
                                                <option value="0">Usuario</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-6">
                                            <label for="prodUser">Productos usuario</label>
                                            <select v-model="rol.productos" class="form-control" id="prodUser" required>
                                                <option value="1">Si</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="prodAdmin">Productos Administrador</label>
                                            <select v-model="rol.autorizar" class="form-control" id="prodAdmin" required>
                                                <option value="1">Si</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-6">
                                            <label for="rol">Roles</label>
                                            <select v-model="rol.roles" class="form-control" id="rol" required>
                                                <option value="1">Si</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="catg">Categorias</label>
                                            <select v-model="rol.categorias" class="form-control" id="catg" required>
                                                <option value="1">Si</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-row">
                                        <div class="form-group col-6">
                                            <label for="bann">Banners</label>
                                            <select v-model="rol.banner" class="form-control" id="bann" required>
                                                <option value="1">Si</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="user">Usuarios</label>
                                            <select v-model="rol.usuarios" class="form-control" id="user" required>
                                                <option value="1">Si</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <!-- <button type="submit" class="btn btn-primary" @click.prevent="addRol">Crear</button> -->
                                    <button type="button" v-if="tipoAccion==1" class="btn btn-primary" @click="addRol()">Crear Rol</button>
                                    <button type="button" v-if="tipoAccion==2" class="btn btn-primary" @click="editRol()">Editar Rol</button>
                                    </form>
                                </div>
                            </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!-- FIN MODAL ROL -->

        </div>
</template>

<script>
    import Header from './../Header';
    import Footer from './../Footer';
    import Sidebar from './../Sidebar';

    export default {
        name: 'Roles',
        data(){
            return {
                loading: false,
                roles: [],
                rol: {
                    id:'',
                    nombre: '',
                    tipo: '',
                    roles: '',
                    productos: '',
                    autorizar: '',
                    categorias: '',
                    banner: '',
                    usuarios: ''
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
            this.getRoles();
        },
        methods : {
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

            addRol: function() {
            
                axios.post("/api/admin/roles", this.rol, { headers:{ Authorization: "Bearer " + this.$store.state.token }})
                .then((res) => {
                if (res) {
                    // console.log(res.data.roles);
                    this.roles = res.data.roles
                    // console.log(this.roles);
                    this.getRoles();
                    $('#addRolModal').modal('hide');
                    alert('Rol Creado Exitosamente');
                }
                })
                .catch((err) => {
                console.log(err);
                });
            },

            editRol(){
                axios.put("/api/admin/roles/"+this.rol.id, this.rol, { headers:{ Authorization: "Bearer " + this.$store.state.token }})
                .then((res) => {
                if (res) {
                    // console.log(res.data.roles);
                    this.roles = res.data.roles
                    // console.log(this.roles);
                    this.getRoles();
                    $('#addRolModal').modal('hide');
                    alert('Rol Editado Correctamente');
                }
                })
                .catch((err) => {
                console.log(err);
                });
            },

            deleteRol(data){
                // console.log(data);
                let opcion = confirm("Desea eliminar el Rol "+data['nombre']);
                if (opcion == true) {
                    axios.delete("/api/admin/roles/"+data['id'], { headers:{ Authorization: "Bearer " + this.$store.state.token }})
                    .then((res) => {
                    if (res) {
                        // console.log(res.data.roles);
                        this.roles = res.data.roles
                        // console.log(this.roles);
                        this.getRoles();
                        // $('#addRolModal').modal('hide');
                        alert('Rol Eliminado Correctamente');
                    }
                    })
                    .catch((err) => {
                    console.log(err);
                    });
                }
            },

            abrirModal(accion, data = []){
                
                switch(accion){
                    case 'registrar':
                    {
                        this.tituloModal = 'Crear Rol';
                        this.tipoAccion = 1;
                        this.rol.id = '';
                        this.rol.nombre = '';
                        this.rol.tipo = '';
                        this.rol.roles = '';
                        this.rol.productos = '';
                        this.rol.autorizar = '';
                        this.rol.categorias = '';
                        this.rol.banner = '';
                        this.rol.usuarios = '';
                        
                        $('#addRolModal').modal('show');
                        break;
                    }
                    case 'actualizar':
                    {
                        // console.log(data);
                        this.tituloModal = 'Editar Rol';
                        this.tipoAccion = 2;
                        this.rol.id = data['id'];
                        this.rol.nombre = data['nombre'];
                        this.rol.tipo = data['tipo'];
                        this.rol.roles = data['roles'];
                        this.rol.productos = data['productos'];
                        this.rol.autorizar = data['autorizar'];
                        this.rol.categorias = data['categorias'];
                        this.rol.banner = data['banner'];
                        this.rol.usuarios = data['usuarios'];
                        
                        $('#addRolModal').modal('show');
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
