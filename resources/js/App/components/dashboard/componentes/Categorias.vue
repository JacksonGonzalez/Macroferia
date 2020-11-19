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
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Categoria</a></li>
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
                        <button class="btn btn-primary float-right mr-3">Añadir Categoria</button>
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
                        <th scope="col">Precio Minimo</th>
                        <th scope="col">Precio Maximo</th>
                        <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>
                            <p>Edit</p>
                            <p>Borrar</p>
                        </td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>@fat</td>
                        <td>
                            <p>Edit</p>
                            <p>Borrar</p>
                        </td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>@twitter</td>
                        <td>
                            <p>Edit</p>
                            <p>Borrar</p>
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
                loading: false
            }
        },
        components:{
            'header-main' : Header,
            'footer-main' : Footer,
            'sidebar' : Sidebar,
        },
        mounted() {
            
        }
    }
</script>

<style scoped>
    body{
        padding-top: 0 !important;
    }
</style>
