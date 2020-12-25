<template>
  <div>
        <h2 align="center">Categorias</h2>
        <div class="row row-cols-1 row-cols-md-4 mr-3 ml-3">        
            <router-link v-for="cat in categorias" :key="cat.id" :to="/productosxcategoria/+cat.id">
                <figure class="figure mx-1">
                    <img :src="'img/categorias/'+cat.imagen" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption">{{ cat.nombre }}</figcaption>
                </figure>
            </router-link>
        </div>
        
  </div>
</template>

<script>
    

    export default {
        name: 'Categorias',
        data(){
            return {
                loading: false,
                categorias: [],
            }
        },
        components:{
            
        },
        mounted() {
            this.getCategories();
        },
        methods: {
            getCategories(){
                axios.get("/api/categories")
                .then((res) => {
                if (res) {
                    // console.log(res.data);
                    this.categorias = res.data.categorias
                    // console.log(this.categorias);
                }
                })
                .catch((err) => {
                console.log(err);
                });
            },
        },
    }
</script>

<style scoped>
      
</style>
