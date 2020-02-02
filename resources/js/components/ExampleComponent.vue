<template>
    <div class="container cartasContainer">
        
        <h2>Listado modo carta</h2>

        Filtrado <select class="form-control " name="estu" id="estu" v-model="estu">
        <!-- <select class="form-control " name="estu" id="estu" @change="filtroEstudios()"> -->
            <option value="">Sin Filtro</option>
            <option value="1">Historia</option>
            <option value="2">Derecho</option>
            <option value="3">Antropología</option>
            <option value="4">Geografía</option>
            <option value="5">Filosofía</option>
            <option value="6">Psicología</option>
            <option value="7">Economía</option>
            <option value="8">Sociología</option>
            <option value="9">Pedagogía</option>
        </select>

        <h6 class="leyendaTxt">Leyenda</h6>
        <div class="leyenda">
            <div class="row d-flex justify-content-center" style="margin-bottom: 20px;">
                <div class="circulo border-top border-left historia">Historia</div>
                <div class="circulo border-top border-left derecho">Derecho</div>
                <div class="circulo border-top border-left antropologia">Antropología</div>
                <div class="circulo border-top border-left geografia">Geografía</div>
                <div class="circulo border-top border-left filosofia">Filosofía</div>
                <div class="circulo border-top border-left psicologia">Psicología</div>
                <div class="circulo border-top border-left economia">Economía</div>
                <div class="circulo border-top border-left sociologia">Sociología</div>
                <div class="circulo border-top border-left pedagogia">Pedagogía</div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div v-for="mujer in filtroEstudios" :key="mujer" class="cartas">
                <div class="card text-white bg-dark mb-3 cartamujer" v-bind:class="elegirClase(mujer)">
                    <img v-if="mujer.fotografia" class="card-img-top imagenMujer" v-bind:src="mujer.fotografia">
                    <img v-else class="card-img-top imagenMujer" src="https://image.flaticon.com/icons/png/512/23/23030.png">

                    <div class="card-body">
                        <h5 class="colorLetra card-title">{{mujer.nombre}}</h5>
                        <h6 class="colorLetra">Año/Siglo: {{mujer.fechas}}</h6>
                        <h6 class="colorLetra">Zona: {{mujer.zona}}</h6>
                        <h6 class="colorLetra">Estudios: {{mujer.subarea}}</h6>
                        <a class="btn btn-secondary btnCarta" :href="mujer.enlace" target="_blank">Fuente</a>
                        <a :href="'imprimirInformacionMujer'+mujer.id" class="btn btn-dark btnCarta" role="button" aria-pressed="true">Información</a>
                    </div>
                </div>

            </div>
        </div>        
    </div>
</template>
<style scoped>

</style>

<style scoped>
</style>

<script>
    export default {
        props: {
            mujeres: { },
            mujeresFiltrado: { },
        },
        mounted() {
        },
        data() {
            return{
                estu:'',
                estilo: ['historia','derecho','antropologia','geografia','filosofia','psicologia','economia','sociologia','pedagogia']
            } 
        },
        computed:{
            filtroEstudios(){                
                if(this.estu!==''){
                    return this.mujeres.filter((mujer) => mujer.codArea == this.estu);
                }
                else{
                    return this.mujeres;
                }
                
            }        
        },
        methods:{
            elegirClase(mujer){
                console.log(mujer);
                return this.estilo[mujer.codArea-1];    
            },
            
        }
    }
    </script>