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
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Rol</a></li>
                    <li class="breadcrumb-item active">Dashboard v3</li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
            <div class="container-fluid">
                <div class="row">
                    
                </div>
                <!-- /.row -->
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
        name: 'Roles',
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
