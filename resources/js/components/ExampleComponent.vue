<template>
    <div class="container">
        <label for="estu">Estudios:</label>
        <select class="form-control " name="estu" id="estu" onchange="filtroEstudios()">
            <option value="0">Sin Filtro</option>
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



         <h6 style="display: flex;justify-content: center;align-items: center;color:white">Leyenda</h6>
        <div class="leyenda">
            <div class="row d-flex justify-content-center" style="margin-bottom: 20px;">
                <div class="circulo border-top border-left" style="background-color:#bf8000;">Historia</div>
                <div class="circulo border-top border-left" style="background-color:white;">Derecho</div>
                <div class="circulo border-top border-left" style="background-color:#ff8000;">Antropología</div>
                <div class="circulo border-top border-left" style="background-color:#e30400;">Geografía</div>
                <div class="circulo border-top border-left" style="background-color:#780053;color:white;">Filosofía</div>
                <div class="circulo border-top border-left" style="background-color: #004cb0;">Psicología</div>
                <div class="circulo border-top border-left" style="background-color:#ff6171;">Economía</div>
                <div class="circulo border-top border-left" style="background-color:#ffea00;">Sociología</div>
                <div class="circulo border-top border-left" style="background-color:#1aab00;">Pedagogía</div>
            </div>
        </div>
        <div class="row">
            <div v-for="mujer in mujeres" :key="mujer">
                <div class="card text-white bg-dark mb-3 cartamujer" style="max-width: 18rem;" v-bind:class="elegirClase(mujer)">
                    <img v-if="mujer.fotografia" class="card-img-top imagenMujer" v-bind:src="mujer.fotografia">
                    <img v-else class="card-img-top imagenMujer" src="https://image.flaticon.com/icons/png/512/23/23030.png">

                    <div class="card-body">
                                                <h5 class="colorLetra card-title">{{mujer.codArea}}</h5>
                        <h5 class="colorLetra card-title">{{mujer.nombre}}</h5>
                        <h6 class="colorLetra">Año/Siglo: {{mujer.fechas}}</h6>
                        <h6 class="colorLetra">Zona: {{mujer.zona}}</h6>
                        <h6 class="colorLetra">Estudios: {{mujer.subarea}}</h6>
                         <a class="btn btn-secondary" :href="mujer.enlace">Fuente</a>
                        <a :href="'imprimirInformacionMujer/'+mujer.id" class="btn btn-dark" role="button" aria-pressed="true">Información</a>
                    </div>
                </div>

            </div>
        </div>
        
    </div>
</template>
<style scoped>

</style>

<script>
    export default {
        props: {
            mujeres: { },
        },
        mounted() {
            console.log("HOLA ESTU______"+document.getElementById("estu").value);
        },
        data() {
            return{
                estilo: ['historia','derecho','antropologia','geografia','filosofia','psicologia','economia','sociologia','pedagogia']
            } 
        },
        computed:{

           
      
          

        },
        methods:{
         elegirClase(mujer){
                console.log(mujer);
                return this.estilo[mujer.codArea-1];    
            },
        // filtroEstudios(){
        //     return this.mujeres.filter((mujer) => mujer.codArea.includes(this.codArea));
        //     }
           
        }
        }

    </script>

