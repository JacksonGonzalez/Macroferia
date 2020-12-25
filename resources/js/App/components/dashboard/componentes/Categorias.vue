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
                        <button class="btn btn-primary mr-3" @click="abrirModal('registrar')">Añadir Categoria</button>
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
                        <td> <img class="img-fluid" style="height:50%;" :src="'img/categorias/'+cat.imagen" alt="cat.nombre"></td>
                        <td>{{ cat.updated_at}}</td>
                        <td>
                            <button class="btn btn-warning mr-1"  @click="abrirModal('actualizar', cat)">
                                <span class="material-icons">edit</span>
                            </button>
                            <button class="btn btn-danger" @click="deleteCategory(cat)">
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

        <!-- MODAL CATEGORY -->
            <div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="modalCategory" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="modalCategory">{{ tituloModal }}</h5>
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
                                        <input v-model="categoria.nombre" type="text" class="form-control" id="name" placeholder="Nombre" required>
                                        
                                        <label for="imagen">Imagen</label>
                                        <input @change="obtenerImagen" type="file" class="form-control-file mb-3" id="imagen" placeholder="Direccion" accept="image/*" required>
                                        
                                        <figure v-if="imagenMiniatura != '' && tipoAccion==1">
                                            <img :src="imagenMiniatura" height="150" alt="Foto Categoria">
                                        </figure>

                                        <figure v-if="tipoAccion==2">
                                            <img :src="imagenMiniatura" height="150" alt="Foto Categoria">
                                        </figure>

                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                        <button type="button" v-if="tipoAccion==1" class="btn btn-primary" @click="addCategory()">Crear Categoria</button>
                                        <button type="button" v-if="tipoAccion==2" class="btn btn-primary" @click="editCategory()">Editar Categoria</button>
                                        </form>
                                    </div>
                                </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        <!-- FIN MODAL CATEGORY -->

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
                imagenMiniatura: '',
                categoria: {
                    id:'',
                    nombre: '',
                    imagen: '',
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

            addCategory(){
                let formData = new FormData();
                formData.append('nombre', this.categoria.nombre);
                formData.append('imagen', this.categoria.imagen);


                axios.post("/api/admin/categories", formData, { headers:{ Authorization: "Bearer " + this.$store.state.token }})
                .then((res) => {
                if (res) {
                    // console.log(res.data.roles);
                    // this.roles = res.data.roles
                    // console.log(this.roles);
                    this.getCategories();
                    $('#categoryModal').modal('hide');
                    alert('Categoria Creado Exitosamente');
                    this.imagenMiniatura = '';
                }
                })
                .catch((err) => {
                console.log(err);
                });
            },

            editCategory(){
                let formDataEdit = new FormData();
                formDataEdit.append('nombre', this.categoria.nombre);
                formDataEdit.append('imagen', this.categoria.imagen);
                let id = this.categoria.id;
                // if(typeof this.categoria.imagen === 'string'){
                //     formDataEdit = this.categoria;
                // }
                // console.log(formDataEdit);
                axios.put("/api/admin/categories/"+this.categoria.id, formDataEdit, { headers:{ Authorization: "Bearer " + this.$store.state.token, 'Content-Type': 'multipart/form-data'}})
                .then((res) => {
                if (res) {
                    
                    this.getCategories();
                    $('#categoryModal').modal('hide');
                    alert('Categoria Editada Exitosamente');
                }
                })
                .catch((err) => {
                console.log(err);
                });
            },

            deleteCategory(data){
                let opcion = confirm("Desea eliminar la categoria "+data['nombre']);
                if (opcion == true) {
                    axios.delete("/api/admin/categories/"+data['id'], { headers:{ Authorization: "Bearer " + this.$store.state.token }})
                    .then((res) => {
                    if (res) {
        
                        this.getCategories();
                        alert('Categoria Eliminada Correctamente');
                    }
                    })
                    .catch((err) => {
                    console.log(err);
                    });
                }
            },

            obtenerImagen(e){
                let file = e.target.files[0];
                this.categoria.imagen = file;
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
                        this.tituloModal = 'Crear Categoria';
                        this.tipoAccion = 1;
                        // this.usuario.id = '';
                        this.categoria.nombre = '';
                        this.categoria.imagen = '';
                        
                        $('#categoryModal').modal('show');
                        break;
                    }
                    case 'actualizar':
                    {
                        // console.log(data);
                        this.tituloModal = 'Editar Categoria';
                        this.tipoAccion = 2;
                        this.categoria.id = data['id'];
                        this.categoria.nombre = data['nombre'];
                        this.categoria.imagen = data['imagen'];

                        this.imagenMiniatura = 'img/categorias/'+this.categoria.imagen;

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
