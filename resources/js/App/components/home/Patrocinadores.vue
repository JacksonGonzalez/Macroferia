<template>
  <div>
        <h2 class="text-center mt-4 mb-4">Nuestros Aliados</h2>
        <!-- <div class="row"> -->
            <div class="text-center">
                <img src="img/aliados/aliadoNew.png" class="rounded mr-1"  alt="Mintic">
                <img src="img/aliados/camaraNew.png" class="rounded mr-1"  alt="Camara Comercio">
                <img src="img/aliados/codaltecNew.png" class="rounded mr-1" width="260" alt="Codaltec">
                <img src="img/aliados/gobierno.png" class="rounded mr-1" width="280" alt="gobierno de colombia">
                <img src="img/aliados/ufpsNew.png" class="rounded mr-1" width="260" alt="ufps">
            </div>
        <!-- </div> -->
  </div>
</template>

<script>
    

    export default {
        name: 'Patrocinadores',
        data(){
            return {
                loading: false
            }
        },
        components:{
            
        },
        mounted() {
            
        }
    }
</script>

<style scoped>
      img{
          height: 170px !important;
          margin-right: 2px;
      }
</style>
