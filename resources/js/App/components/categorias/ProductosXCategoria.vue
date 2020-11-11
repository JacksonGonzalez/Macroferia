<template>
  <div>
        <header-main></header-main>
        <main >
            <banner></banner>
            <h2>Categoria {{ ruta}}</h2>
            <div class="row row-cols-1 row-cols-md-4 mr-3 ml-3">
            <div class="col mb-4">
                <div class="card h-100">
                <img src="https://www.forotransporteprofesional.es/wp-content/uploads/2014/11/Cuadro-Negro-300x225.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">$100.000 COP</p>
                </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                <img src="https://www.forotransporteprofesional.es/wp-content/uploads/2014/11/Cuadro-Negro-300x225.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">$100.000 COP</p>
                </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                <img src="https://www.forotransporteprofesional.es/wp-content/uploads/2014/11/Cuadro-Negro-300x225.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">$100.000 COP</p>
                </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                <img src="https://www.forotransporteprofesional.es/wp-content/uploads/2014/11/Cuadro-Negro-300x225.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">$100.000 COP</p>
                </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                <img src="https://www.forotransporteprofesional.es/wp-content/uploads/2014/11/Cuadro-Negro-300x225.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">$100.000 COP</p>
                </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                <img src="https://www.forotransporteprofesional.es/wp-content/uploads/2014/11/Cuadro-Negro-300x225.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">$100.000 COP</p>
                </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                <img src="https://www.forotransporteprofesional.es/wp-content/uploads/2014/11/Cuadro-Negro-300x225.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">$100.000 COP</p>
                </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                <img src="https://www.forotransporteprofesional.es/wp-content/uploads/2014/11/Cuadro-Negro-300x225.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">$100.000 COP</p>
                </div>
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

    export default {
        name: 'ProductosXCategoria',
        data(){
            return {
                loading: false,
                ruta: 0,
            }
        },
        components:{
            'header-main' : HeaderMain,
            'footer-main' : FooterMain,
            'banner' : BannerVue,
        },
        mounted() {
            this.ruta = this.$route.params.id;
            if(this.ruta != this.$route.params.id || this.ruta == 0){
                this.ruta = this.$route.params.id;
            }else{
            }
        },

    }
</script>

<style scoped>
      h2{
          text-align: center;
      }
       router-link{
          text-decoration: none;
      }
      router-link a{
          text-decoration: none;
      }
      router-link a{
          text-decoration: none !important;
      }
</style>
