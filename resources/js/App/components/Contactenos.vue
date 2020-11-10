<template>
  <div>
        <header-main></header-main>
        <main >
            <banner></banner>
            
        </main>
        <footer-main></footer-main>
  </div>
</template>

<script>
    import HeaderMain from './Header';
    import FooterMain from './Footer';
    import BannerVue from './Banner.vue';

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
