<template>
  <div>
        <header-main></header-main>
        <main >
            <banner></banner>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="text-center">Mis Productos</h2> 
                    </div>
                    <div class="col">
                        <button class="btn btn-primary float-right">Añadir Productos</button>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12">
                    <tabla></tabla>

                    </div>
                </div>
            </div>
        </main>
        <footer-main></footer-main>
  </div>
</template>

<script>
    import HeaderMain from './../layout/Header';
    import FooterMain from './../layout/Footer';
    import BannerVue from './../layout/Banner';
    import TablaVue from './Tabla';
    

    export default {
        name: 'Productos',
        data(){
            return {
                loading: false
            }
        },
        components:{
            'header-main' : HeaderMain,
            'footer-main' : FooterMain,
            'banner' : BannerVue,
            'tabla' : TablaVue
        },
        mounted() {
            
        }
    }
</script>

<style>

</style>