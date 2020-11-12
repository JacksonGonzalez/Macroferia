<template>
  <div>
        <header-main></header-main>
        <main >
            <banner></banner>
            <h2>Escribenos</h2><br>
            <formulario></formulario>
        </main>
        <footer-main></footer-main>
  </div>
</template>

<script>
    import HeaderMain from './../layout/Header';
    import FooterMain from './../layout/Footer';
    import BannerVue from './../layout/Banner';
    import formularioVue from './Formulario';
    

    export default {
        name: 'Contactenos',
        data(){
            return {
                loading: false
            }
        },
        components:{
            'header-main' : HeaderMain,
            'footer-main' : FooterMain,
            'banner' : BannerVue,
            'formulario' : formularioVue,
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
