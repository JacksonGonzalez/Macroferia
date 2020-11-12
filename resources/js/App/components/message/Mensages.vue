<template>
  <div>
        <header-main></header-main>
        <main >
            
        <div class="container" style="margin-top:09%">
            <h3 class=" text-center">Mensages</h3>
            <div class="messaging">
                <div class="inbox_msg">
                    <div class="inbox_people">
                    <div class="headind_srch">
                        <div class="recent_heading">
                        <h4>Recientes</h4>
                        </div>
                        <div class="srch_bar">
                        <div class="stylish-input-group">
                            <input type="text" class="search-bar"  placeholder="Search" >
                            <span class="input-group-addon">
                            <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                            </span> </div>
                        </div>
                    </div>
                    
                    <!-- CONTACTOS RECIENTES -->
                    <recientes></recientes>

                    </div>
                    
                    <!-- CHAT -->
                    <chat></chat>
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
    import Recientes from './Recientes';
    import Chat from './Chat';

    export default {
        name: 'Mensages',
        data(){
            return {
                loading: false
            }
        },
        components:{
            'header-main' : HeaderMain,
            'footer-main' : FooterMain,
            'recientes' : Recientes,
            'chat' : Chat,
        },
        mounted() {
            
        }
    }
</script>

<style scoped>
    h2{
        text-align: center;
    }
</style>
