<template>
    <div class="container container-task">
        <div class="row">
            <div class="col-md-6">
                <h2>Listado de peticiones</h2>
                <table class="table text-center"><!--Creamos una tabla que mostrará todas las tareas-->
                        <thead>
                            <tr>
                                <th scope="col">Codigo</th>
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
                                <td v-text="peticiones.codPeti"></td>
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
                                    <button class="btn btn-success" @click="loadFieldsUpdate(peticiones)">Modificar</button>
                                    <!--Botón que borra la tarea que seleccionemos-->
                                    <button class="btn btn-warning" @click="deleteTask(peticiones)">Borrar</button>


                            </tr>
                        </tbody>
                    </table>

            </div>


        </div>
        <div class="form-group"><!-- Formulario para la creación o modificación de nuestras tareas-->
                    <label hidden>Codigo</label>
                    <input hidden v-model="codPeti" type="text" class="form-control" name="codPeti">
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

                    <button v-if="update != 0" @click="updateTasks()" class="btn btn-warning">Guardar</button>

                </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                codPeti:"",
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
                arrayMujeres:[]

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

            borrasDespuesDeGuardar(codigo){//Esta nos abrirá un alert de javascript y si aceptamos borrará la tarea que hemos elegido

                if (confirm('¿Seguro que deseas borrar esta tarea?'+codigo)) {
                    axios.delete('peticion/borrar/'+codigo
                    ).then(function (response) {
                        me.getTasks();
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
                }
            },

            // saveTasks(){
            //     let me =this;
            //     let url = 'peticion/guardaar'
            //      //Ruta que hemos creado para enviar una tarea y guardarla
            //     axios.post(url,{ //estas variables son las que enviaremos para que crear la tarea

            //         'nombre':this.nombreMujer,
            //         'fechas':this.fechas,
            //         'subArea':this.subArea,
            //         'codZona':this.codZona,
            //         'datos':this.datos,
            //         'enlace':this.enlace,
            //         'codArea':this.codArea,
            //         'zona':this.zona,
            //         'fotografia':this.fotografia,


            //     }).then(function (response) {

            //         me.getTasks();//llamamos al metodo getTask(); para que refresque nuestro array y muestro los nuevos datos
            //         // me.clearFields();//Limpiamos los campos e inicializamos la variable update a 0

            //     })
            //     .catch(function (error) {
            //         console.log(error);
            //     });

            // },

            updateTasks(){/*Esta funcion, es igual que la anterior, solo que tambien envia la variable update que contiene el id de la
                tarea que queremos modificar*/
                let me = this;
                console.log("------>"+me.codPeti);
                axios.post('peticion/guardaar',{

                    'nombre':this.nombreMujer,
                    'fechas':this.fechas,
                    'subArea':this.subArea,
                    'codZona':this.codZona,
                    'datos':this.datos,
                    'enlace':this.enlace,
                    'codArea':this.codArea,
                    'zona':this.zona,
                    'fotografia':this.fotografia,
                    }).then(function (response) {

                //    me.saveTasks();
                   me.borrasDespuesDeGuardar(me.codPeti);
                   me.getTasks();//llamamos al metodo getTask(); para que refresque nuestro array y muestro los nuevos datos
                   me.clearFields();//Limpiamos los campos e inicializamos la variable update a 0
                }).then(function (response) {

                    me.getTasks();//llamamos al metodo getTask(); para que refresque nuestro array y muestro los nuevos datos
                    // me.clearFields();//Limpiamos los campos e inicializamos la variable update a 0

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
                    me.codPeti= response.data.codPeti;
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
