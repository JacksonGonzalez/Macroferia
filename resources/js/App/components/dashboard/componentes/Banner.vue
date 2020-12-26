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
                    <h1 class="m-0 text-dark">Banner</h1>
                </div><!-- /.col -->
                <!-- <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Banner</a></li>
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
                        <button class="btn btn-primary mr-3"  @click="abrirModal('registrar')">Añadir Banner</button>
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
                        <th scope="col">Imagen</th>
                        <th scope="col">Url</th>
                        <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(ban, index) in banners" :key="ban.id">
                        <th scope="row">{{index+1}}</th>
                        <td>{{ ban.nombre }}</td>
                        <td> <img class="img-fluid" style="height:50%;" :src="'img/banners/'+ban.imagen" :alt="ban.nombre"></td>
                        <td>{{ ban.url}}</td>
                        <td>
                            <!-- <button class="btn btn-warning mr-1"  @click="abrirModal('actualizar', cat)">
                                <span class="material-icons">edit</span>
                            </button> -->
                            <button class="btn btn-danger" @click="deleteBanner(ban)">
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



        <!-- MODAL Banner -->
        <div class="modal fade" id="bannerModal" tabindex="-1" aria-labelledby="modalBanner" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="modalBanner">{{ tituloModal }}</h5>
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
                                    <form enctype="multipart/form-data">
                                    
                                    <label for="name">Nombre</label>
                                    <input v-model="banner.nombre" type="text" class="form-control" id="name" placeholder="Nombre" required>
                                    
                                    <label for="name">Url</label>
                                    <input v-model="banner.url" type="text" class="form-control" id="name" placeholder="Url">

                                    <label for="imagen">Imagen</label>
                                    <input @change="obtenerImagen" type="file" class="form-control-file mb-3" id="imagen" placeholder="imagen" accept="image/*" required>
                                    
                                    <figure v-if="imagenMiniatura != '' && tipoAccion==1">
                                        <img :src="imagenMiniatura" height="150" alt="Foto banner">
                                    </figure>

                                    <!-- <figure v-if="tipoAccion==2">
                                        <img :src="imagenMiniatura" height="150" alt="Foto Categoria">
                                    </figure> -->

                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button type="button" v-if="tipoAccion==1" class="btn btn-primary" @click="addBanner()">Crear Categoria</button>
                                    <!-- <button type="button" v-if="tipoAccion==2" class="btn btn-primary" @click="editBanner()">Editar Categoria</button> -->
                                    </form>
                                </div>
                            </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!-- FIN MODAL Banner -->
        </div>
</template>

<script>
    import Header from './../Header';
    import Footer from './../Footer';
    import Sidebar from './../Sidebar';

    export default {
        name: 'Banner',
        data(){
            return {
                loading: false,
                banners : [],
                imagenMiniatura: '',
                banner: {
                    id:'',
                    nombre: '',
                    imagen: '',
                    url: '',
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
            this.getBanners();
        },
        methods: {
            getBanners(){
                axios.get("/api/admin/carusel", { headers:{ Authorization: "Bearer " + this.$store.state.token }})
                    .then((res) => {
                    if (res) {
                        // console.log(res.data.banners);
                        this.banners = res.data.banners
                        // console.log(this.banners);
                    }
                    })
                    .catch((err) => {
                    console.log(err);
                    });
            },

            addBanner(){
                let formData = new FormData();
                formData.append('nombre', this.banner.nombre);
                formData.append('imagen', this.banner.imagen);
                formData.append('url', this.banner.url);


                axios.post("/api/admin/carusel", formData, { headers:{ Authorization: "Bearer " + this.$store.state.token }})
                .then((res) => {
                if (res) {
                    // console.log(res.data.roles);
                    // this.roles = res.data.roles
                    // console.log(this.roles);
                    this.getBanners();
                    $('#bannerModal').modal('hide');
                    alert('Banner Creado Exitosamente');
                    this.imagenMiniatura = '';
                }
                })
                .catch((err) => {
                console.log(err);
                });
            },

            deleteBanner(data){
                let opcion = confirm("Desea eliminar el banner "+data['nombre']);
                if (opcion == true) {
                    axios.delete("/api/admin/carusel/"+data['id'], { headers:{ Authorization: "Bearer " + this.$store.state.token }})
                    .then((res) => {
                    if (res) {
        
                        this.getBanners();
                        alert('Banner Eliminado Correctamente');
                    }
                    })
                    .catch((err) => {
                    console.log(err);
                    });
                }
            },

            obtenerImagen(e){
                let file = e.target.files[0];
                this.banner.imagen = file;
                // console.log(file);
                this.cargarImagen(file);
            },

            cargarImagen(file){
                let reader = new FileReader();

                reader.onload = (e) =>{
                    this.imagenMiniatura = e.target.result;
                }

                reader.readAsDataURL(file);
            },

            abrirModal(accion, data = []){
                switch(accion){
                    case 'registrar':
                    {
                        this.tituloModal = 'Crear Banner';
                        this.tipoAccion = 1;
                        // this.usuario.id = '';
                        this.banner.nombre = '';
                        this.banner.imagen = '';
                        this.banner.url = '';
                        
                        $('#bannerModal').modal('show');
                        break;
                    }
                    case 'actualizar':
                    {
                        // console.log(data);
                        // this.tituloModal = 'Editar Categoria';
                        // this.tipoAccion = 2;
                        // this.categoria.id = data['id'];
                        // this.categoria.nombre = data['nombre'];
                        // this.categoria.imagen = data['imagen'];

                        // this.imagenMiniatura = 'img/categorias/'+this.categoria.imagen;

                        // $('#categoryModal').modal('show');
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
