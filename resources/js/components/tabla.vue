<template>
    <div class="container container-task">
        <div class="row">
            <div class="col-md-6">
                <h2>Listado de peticiones</h2>
                <table class="table text-center"><!--Creamos una tabla que mostrará todas las tareas-->
                        <thead>
                            <tr>
                                <th scope="col">Nombre Mujer</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Subarea</th>
                                <th scope="col">Area</th>
                                <th scope="col">Datos</th>
                                <th scope="col">Enlace</th>
                                <th scope="col">Cod Zona</th>
                                <th scope="col">Continente</th>
                                <th scope="col">pais</th>
                                <th scope="col">Fotografia</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="peticiones in arrayPeticiones" :key="peticiones.codPeti"> <!--Recorremos el array y cargamos nuestra tabla-->
                                <td v-text="peticiones.nombreMujer"></td>
                                <td v-text="peticiones.fechas"></td>
                                <td v-text="peticiones.codArea"></td>
                                <td v-text="peticiones.subArea"></td>
                                <td v-text="peticiones.datos"></td>
                                <td v-text="peticiones.enlace"></td>
                                <td v-text="peticiones.codZona"></td>
                                <td v-text="peticiones.zona"></td>
                                <td v-text="peticiones.fotografia"></td>
                                    <!--Botón modificar, que carga los datos del formulario con la tarea seleccionada-->
                                    <button class="btn" @click="loadFieldsUpdate(peticiones)">Modificar</button>
                                    <!--Botón que borra la tarea que seleccionemos-->
                                    <button class="btn" @click="deleteTask(peticiones)">Borrar</button>

                                    <button v-if="update == 0" @click="saveTasks()" class="btn btn-success">añadir</button>

                            </tr>
                        </tbody>
                    </table>

                            <tr v-for="mujeres in arrayMujeres" :key="mujeres.id"> <!--Recorremos el array y cargamos nuestra tabla-->
                                <td v-text="mujeres.nombre"></td>
                                <td v-text="mujeres.fechas"></td>
                                <td v-text="mujeres.codArea"></td>
                                <td v-text="mujeres.subarea"></td>
                                <td v-text="mujeres.datos"></td>
                                <td v-text="mujeres.enlace"></td>
                                <td v-text="mujeres.codZona"></td>
                                <td v-text="mujeres.zona"></td>
                                <td v-text="mujeres.fotografia"></td>
                            </tr>
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

                    'nombreMujer':this.nombre,
                    'fechas':this.fechas,
                    'subArea':this.subarea,
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

            updateTasks(){/*Esta funcion, es igual que la anterior, solo que tambien envia la variable update que contiene el id de la
                tarea que queremos modificar*/
                let me = this;
                axios.put('peticion/actualizar',{
                    'codPeti':this.update,
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
            loadFieldsUpdate(data){ //Esta función rellena los campos y la variable update, con la tarea que queremos modificar
                this.update = data.codPeti
                let me =this;
                let url = 'peticion/buscar?codPeti='+this.update;
                axios.get(url).then(function (response) {
                    me.nombreMujer= response.data.nombreMujer;
                    me.fechas= response.data.fechas;
                    me.subArea= response.data.subArea;
                    me.datos= response.data.datos;
                    me.enlace= response.data.enlace;
                    me.codArea=response.data.codArea
                    me.codZona= response.data.codZona;
                    me.zona= response.data.zona;
                    me.fotografia= response.data.fotografia;


                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });
            },
            deleteTask(data){//Esta nos abrirá un alert de javascript y si aceptamos borrará la tarea que hemos elegido
                let me =this;
                let codigoPeticion = data.codPeti
                if (confirm('¿Seguro que deseas borrar esta tarea?'+codigoPeticion)) {
                    axios.delete('peticion/borrar/'+codigoPeticion
                    ).then(function (response) {
                        me.getTasks();
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
                }
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
