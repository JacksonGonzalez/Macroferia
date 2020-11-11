<template>
  <div>
        <header-main></header-main>
        <main >
            <banner></banner>
            <destacados></destacados>
            <nuevos></nuevos>
            <categorias></categorias>
            <patrocinadores></patrocinadores>
        </main>
        <footer-main></footer-main>
  </div>
</template>

<script>
    import HeaderMain from './../layout/Header';
    import FooterMain from './../layout/Footer';
    import BannerVue from './../layout/Banner';
    import DestacadosVue from './Destacados.vue';
    import NuevosVue from './Nuevos.vue';
    import CategoriasVue from './Categorias.vue';
    import PatrocinadoresVue from './Patrocinadores.vue';

    export default {
        name: 'Home',
        data(){
            return {
                loading: false
            }
        },
        components:{
            'header-main' : HeaderMain,
            'footer-main' : FooterMain,
            'banner' : BannerVue,
            'destacados' : DestacadosVue,
            'nuevos' : NuevosVue,
            'categorias' : CategoriasVue,
            'patrocinadores' : PatrocinadoresVue
        },
        mounted() {
            
        }
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
