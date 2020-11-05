<template>
  <div>
        
          <h4>SALES SYSTEM</h4>
          <h5>Sistema de Gestion para Venta y Compra de productos</h5>
          <p>Una plataforma creada para gestionar las compras y ventas de cualquier producto.</p>
          <!-- <routerLink to="/login"><button class="btn btn-success btn-lg">Iniciar Sesion</button></routerLink> -->
    
    
  </div>
</template>

<script>
    // import Dashboard from './Dashboard';

    export default {
        name: 'Home',
        data(){
            return {
                loading: false
            }
        },
        components:{
            // 'dashboard' : Dashboard
        },
        mounted() {
            
        }
    }
</script>

<style scoped>
      .carousel-caption {
        bottom: 40%;
      }
      h4{
        font-size: 450% ;
      }
      h5{
        font-size: 200% ;
      }
      img{
        /* opacity: 0.4; */
        background-color: rgba(0,0,0,0.8);
        filter:brightness(0.4);
        max-height: 100%;
        
      }
      p{
        font-size: 120%;
      }
      #fondo{
        min-height:100%;
        max-height: 100%;
        background-size:cover;
        background-repeat: no-repeat;
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
