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
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Banner</a></li>
                    <li class="breadcrumb-item active">Dashboard v3</li>
                    </ol>
                </div><!-- /.col -->
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
                    </div>
                    <div class="col">
                        <button class="btn btn-primary float-right mr-3">Añadir Banner</button>
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
                axios.get("/api/admin/banners", { headers:{ Authorization: "Bearer " + this.$store.state.token }})
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
            }
        },
    }
</script>

<style scoped>
    body{
        padding-top: 0 !important;
    }
</style>
