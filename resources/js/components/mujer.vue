<template>
    <div class="container container-task">
        <div class="row">
            <div class="col-md-6">
                <h2>Listado de mujeres</h2>
                <table class="table text-center" id="app"><!--Creamos una tabla que mostrará todas las tareas-->
                        <thead>

                             <tr>
                                <th scope="col">codArea</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">datos</th>
                                <th scope="col">datos_eus</th>
                                <th scope="col">datos_ing</th>
                                <th scope="col">enlace</th>
                                <th scope="col">codZona</th>
                                <th scope="col">zona</th>
                                <th scope="col">Fotografia</th>

                            </tr>
                        </thead>
                        <tbody>
                               <tr v-for="mujeres in arrayMujeres" :key="mujeres.id"> <!--Recorremos el array y cargamos nuestra tabla-->
                                <td v-text="mujeres.codArea"></td>
                                <td v-text="mujeres.nombre"></td>
                                <td v-text="mujeres.fechas"></td>
                                <td v-text="mujeres.datos"></td>
                                <td v-text="mujeres.datos_eus"></td>
                                <td v-text="mujeres.datos_ing"></td>
                                <td v-text="mujeres.enlace"></td>
                                <td v-text="mujeres.codZona"></td>
                                <td v-text="mujeres.zona"></td>
                                <td v-text="mujeres.fotografia"></td>
                                    <!--Botón modificar, que carga los datos del formulario con la tarea seleccionada-->
                                    <button class="btn" @click="loadFieldsUpdate(mujeres)">editar</button>
                                    <!--Botón que borra la tarea que seleccionemos-->
                                    <button class="btn" @click="deleteTask(mujeres)">Borrar</button>
                            </tr>
                        </tbody>
                    </table>
            </div>

        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                codArea:"",
                nombre:"", //Esta variable, mediante v-model esta relacionada con el input del formulario
                fechas:"", //Esta variable, mediante v-model esta relacionada con el input del formulario
                subarea:"",
                datos:"", //Esta variable, mediante v-model esta relacionada con el input del formulario
                datos_eus:"", //Esta variable, mediante v-model esta relacionada con el input del formulario
                datos_ing:"", //Esta variable, mediante v-model esta relacionada con el input del formulario
                enlace:"", //Esta variable, mediante v-model esta relacionada con el input del formulario
                codZona:"", //Esta variable, mediante v-model esta relacionada con el input del formulario
                zona:"", //Esta variable, mediante v-model esta relacionada con el input del formulario
                fotografia:"", //Esta variable, mediante v-model esta relacionada con el input del formulario
                update:0, /*Esta variable contrarolará cuando es una nueva tarea o una modificación, si es 0 significará que no hemos seleccionado
                          ninguna tarea, pero si es diferente de 0 entonces tendrá el id de la tarea y no mostrará el boton guardar sino el modificar*/


                arrayMujeres:[], //Este array contendrá las tareas de nuestra bd
            }
        },

        methods:{
            getTasks(){
                let me =this;
                let url = 'mujer' //Ruta que hemos creado para que nos devuelva todas las tareas
                axios.get(url).then(function (response) {
                    //creamos un array y guardamos el contenido que nos devuelve el response
                    me.arrayMujeres = response.data;

                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });
            },

            /////////////////////////////////////////////////

            saveTasks(){
                let me =this;
                let url = 'mujer/guardar' //Ruta que hemos creado para enviar una tarea y guardarla
                axios.post(url,{ //estas variables son las que enviaremos para que crear la tarea

                    'codArea':this.codArea,
                    'nombre':this.nombre,
                    'fechas':this.fechas,
                    'subArea':this.subarea,
                    'datos':this.datos,
                    'datos_eus':this.datos_eus,
                    'datos_ing':this.datos_ing,
                    'enlace':this.enlace,
                    'codZona':this.codZona,
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
                axios.put('mujer/actualizar',{

                    'codArea':this.codArea,
                    'nombre':this.nombre,
                    'fechas':this.fechas,
                    'subArea':this.subarea,
                    'datos':this.datos,
                    'datos_eus':this.datos_eus,
                    'datos_ing':this.datos_ing,
                    'enlace':this.enlace,
                    'codZona':this.codZona,
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
                let url = 'mujer/buscar?id='+this.update;
                axios.get(url).then(function (response) {

                    me.codArea= response.data.codArea;
                    me.nombre= response.data.nombre;
                    me.fechas= response.data.fechas;
                    me.subarea= response.data.subarea;
                    me.datos= response.data.datos;
                    me.datos_eus= response.data.datos_eus;
                    me.datos_ing= response.data.datos_ing;
                    me.enlace= response.data.enlace;
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
                let idM = data.id
                if (confirm('¿Seguro que deseas borrar esta tarea?'+idM)) {
                    axios.delete('mujer/borrar/'+idM
                    ).then(function (response) {
                        me.getTasks();
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
                }
            },
            clearFields(){/*Limpia los campos e inicializa la variable update a 0*/
                this.codArea = "";

                this.nombre = "";
                this.fechas = "";
                this.subarea = "";
                this.datos = "";
                this.datos_eus = "";
                this.datos_ing = "";
                this.enlace = "";
                this.codZona = "";
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
