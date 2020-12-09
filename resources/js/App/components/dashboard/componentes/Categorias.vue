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
                    <h1 class="m-0 text-dark">Categorias</h1>
                </div><!-- /.col -->
                <!-- <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Categoria</a></li>
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
                        <button class="btn btn-primary mr-3">Añadir Categoria</button>
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
                        <th scope="col">Categoria</th>
                        <th scope="col">Actualizado</th>
                        <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(cat, index) in categorias" :key="cat.id">
                        <th scope="row">{{index+1}}</th>
                        <td>{{ cat.nombre }}</td>
                        <td> <img class="img-fluid rounded" :src="cat.imagen" alt="cat.nombre"></td>
                        <td>{{ cat.updated_at}}</td>
                        <td>
                            <button class="btn btn-warning mr-1">
                                <span class="material-icons">edit</span>
                            </button>
                            <button class="btn btn-danger">
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
        </div>
</template>

<script>
    import Header from './../Header';
    import Footer from './../Footer';
    import Sidebar from './../Sidebar';

    export default {
        name: 'Categorias',
        data(){
            return {
                loading: false,
                categorias: [],
            }
        },
        components:{
            'header-main' : Header,
            'footer-main' : Footer,
            'sidebar' : Sidebar,
        },
        mounted() {
            this.getCategories();
        },
        methods: {
            getCategories(){
                axios.get("/api/admin/categories", { headers:{ Authorization: "Bearer " + this.$store.state.token }})
                .then((res) => {
                if (res) {
                    // console.log(res.data);
                    this.categorias = res.data.categorias
                    // console.log(this.categorias);
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
                        this.tituloModal = 'Crear Categoria';
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
                        
                        $('#categoryModal').modal('show');
                        break;
                    }
                    case 'actualizar':
                    {
                        // console.log(data);
                        this.tituloModal = 'Editar Categoria';
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
                        
                        $('#categoryModal').modal('show');
                        break;
                    }
                }
                    
                
            }
        },
    }
</script>

<style scoped>
    body{
        padding-top: 0 !important;
    }
</style>
