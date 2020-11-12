<template>
  <div>
        <header-main></header-main>
        <main >
            <banner></banner>
            <h2>Categoria {{ ruta}}</h2>
            <div class="row row-cols-1 row-cols-md-4 mr-3 ml-3">
            <div class="col mb-4">
                <div class="card h-100">
                <img @click="mostrarModal()" src="https://www.forotransporteprofesional.es/wp-content/uploads/2014/11/Cuadro-Negro-300x225.png" class="card-img-top" alt="...">
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


        <!-- MODAL -->
        <div class="modal fade" id="modalProduct" tabindex="-1" aria-labelledby="modalDestacado" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nombre Producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div id="carouselControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active carousel-height">
                                        <img src="https://www.forotransporteprofesional.es/wp-content/uploads/2014/11/Cuadro-Negro-300x225.png" class="d-block w-100 h-90" alt="...">
                                        </div>
                                        <div class="carousel-item carousel-height">
                                        <img src="https://www.adamedtv.com/wp-content/uploads/2014/05/Screen-Shot-2014-05-07-at-13.50.19.png" class="d-block w-100 h-90" alt="...">
                                        </div>
                                        <div class="carousel-item carousel-height">
                                        <img src="https://img.freepik.com/foto-gratis/cuadros-textura-materia-textil-blanca_1194-7127.jpg?size=338&ext=jpg" class="d-block w-100 h-90" alt="...">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <table class="table table-hover table-sm"> 
                                    <tbody>
                                        <tr>
                                            <th scope="row">Nombre</th>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Proveedor</th>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Color</th>
                                            <td>@twitter</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Color</th>
                                            <td>@twitter</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Color</th>
                                            <td>@twitter</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Color</th>
                                            <td>@twitter</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Color</th>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Enviar Mensage</button>
                </div>
                </div>
            </div>
        </div>
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
        methods:{
            mostrarModal(){
                $('#modalProduct').modal('show');
            }
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
      .carousel-height{
        height: 15em !important;
      }
</style>
