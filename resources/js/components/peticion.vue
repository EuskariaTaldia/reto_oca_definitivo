<template>
    <div class="container container-task">
        <div class="row">
            <div class="col-md-6">
                <h2>realizar peticion</h2>
            </div>
            <div class="col-md-6">
                <div class="form-group"><!-- Formulario para la creación o modificación de nuestras tareas-->
                    <label>Nombre de mujer</label>
                    <input v-model="nombreMujer" type="text" class="form-control" name="nombreMujer">

                    <label>Fecha</label>
                    <input v-model="fechas" type="text" class="form-control" name="fechas">

                    <label>codArea</label>
                    <select v-model="codArea" name="codArea" class="form-control">
                        <option value="1">Historia</option>
                        <option value="2">Derecho</option>
                        <option value="3">Antropología</option>
                        <option value="4">Geografía</option>
                        <option value="5">Filosofía</option>
                        <option value="6">Psicología</option>
                        <option value="7">Economía</option>
                        <option value="8">Sociología</option>
                        <option value="9">Pedalogía</option>
                    </select>

                    <label>subArea</label>
                    <input v-model="subArea" type="text" class="form-control" name="subArea">


                    <label>Datos</label>
                    <input v-model="datos" type="text" class="form-control" name="datos">

                    <label>Enlace</label>
                    <input v-model="enlace" type="text" class="form-control" name="enlace">

                    <label>continente</label>
                    <select v-model="codZona" name="codZona" class="form-control">
                        <option value="1">Europa</option>
                        <option value="2">Norte America</option>
                        <option value="3">America Latina</option>
                        <option value="4">Asia</option>
                        <option value="5">Oceania</option>
                        <option value="6">africa</option>
                    </select>

                    <label>zona</label>
                    <input v-model="zona" type="text" class="form-control" name="zona">


                    <label>fotografia</label>
                    <input v-model="fotografia" type="text" class="form-control" name="fotografia">

                </div>
                <div class="container-buttons">
                    <!-- Botón que añade los datos del formulario, solo se muestra si la variable update es igual a 0-->
                    <button v-if="update == 0" @click="saveTasks()" class="btn btn-success">enviar</button>
                    <!-- Botón que modifica la tarea que anteriormente hemos seleccionado, solo se muestra si la variable update es diferente a 0-->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                nombreMujer:"", //Esta variable, mediante v-model esta relacionada con el input del formulario
                fechas:"", //Esta variable, mediante v-model esta relacionada con el input del formulario
                codArea:"",
                subArea:"", //Esta variable, mediante v-model esta relacionada con el input del formulario
                datos:"", //Esta variable, mediante v-model esta relacionada con el input del formulario
                enlace:"", //Esta variable, mediante v-model esta relacionada con el input del formulario
                codZona:"", //Esta variable, mediante v-model esta relacionada con el input del formulario
                zona:"", //Esta variable, mediante v-model esta relacionada con el input del formulario
                fotografia:"", //Esta variable, mediante v-model esta relacionada con el input del formulario
                update:0, /*Esta variable contrarolará cuando es una nueva tarea o una modificación, si es 0 significará que no hemos seleccionado
                          ninguna tarea, pero si es diferente de 0 entonces tendrá el id de la tarea y no mostrará el boton guardar sino el modificar*/
                arrayPeticiones:[], //Este array contendrá las tareas de nuestra bd


            }
        },
        methods:{
            getTasks(){
                let me =this;
                let url = 'peticion' //Ruta que hemos creado para que nos devuelva todas las tareas
                axios.get(url).then(function (response) {
                    //creamos un array y guardamos el contenido que nos devuelve el response
                    me.arrayPeticiones = response.data;
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });
            },
            saveTasks(){
                let me =this;
                let url = 'peticion/guardar' //Ruta que hemos creado para enviar una tarea y guardarla
                axios.post(url,{ //estas variables son las que enviaremos para que crear la tarea
                    'nombreMujer':this.nombreMujer,
                    'fechas':this.fechas,
                    'subArea':this.subArea,
                    'codZona':this.codZona,
                    'datos':this.datos,
                    'enlace':this.enlace,
                    'codArea':this.codArea,
                    'zona':this.Zona,
                    'fotografia':this.fotografia,


                }).then(function (response) {
                    me.getTasks();//llamamos al metodo getTask(); para que refresque nuestro array y muestro los nuevos datos
                    me.clearFields();//Limpiamos los campos e inicializamos la variable update a 0
                })
                .catch(function (error) {
                    console.log(error);
                });

            },
            
            clearFields(){/*Limpia los campos e inicializa la variable update a 0*/
                this.nombreMujer = "";
                this.fechas = "";
                this.subArea = "";
                this.codZona = "";
                this.datos = "";
                this.enlace = "";
                this.codArea = "";
                this.zona = "";
                this.fotografia = "";

                this.update = 0;
            }
        },
        mounted() {
           this.getTasks();
        }
    }
</script>
