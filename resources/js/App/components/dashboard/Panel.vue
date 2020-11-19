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
            
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <!-- <img src="img/bienvenida MACROFERIA.png" class="img-fluid" alt="bienvenida"> -->
                        <img src="img/macroferia.png" class="img-fluid" alt="bienvenida">
                    </div>
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
    import Header from './Header';
    import Footer from './Footer';
    import Sidebar from './Sidebar';

    export default {
        name: 'Panel',
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
