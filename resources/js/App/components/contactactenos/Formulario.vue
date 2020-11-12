<template>
    <div>
        <div class="container">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Tu Correo</label>
                    <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputPassword4">Asunto</label>
                    <input type="text" class="form-control" id="inputPassword4">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Que nos quieres contar...</label>
                    <textarea class="form-control" id="inputAddress" rows="3"></textarea>
                </div>
                
                <div class="form-group">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        No soy un Robot
                    </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mx-auto">Enviar Mensage</button>
            </form>
        </div>   
    </div>
</template>

<script>

    export default {
        name: 'Formulario',
        data(){
            return {
                
            }
        },
        
        mounted() {
            
        }
    }
</script>

<style scoped>
      
</style>