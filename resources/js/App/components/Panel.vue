<template>
  <div>
        <header-main></header-main>
        <main >
            
            
        </main>
        <footer-main></footer-main>
  </div>
</template>

<script>
    import HeaderMain from './Header';
    import FooterMain from './Footer';

    export default {
        name: 'Panel',
        data(){
            return {
                loading: false
            }
        },
        components:{
            'header-main' : HeaderMain,
            'footer-main' : FooterMain,
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
