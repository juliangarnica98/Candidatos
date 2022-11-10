<template>
        <v-card class="mx-auto" max-width="500">
            <v-container>
                <v-row dense>
                    <v-col cols="12">
                        <v-card class="mx-auto">
                            <v-img height="250" src="https://ccplazacentral.com/wp-content/uploads/2021/07/LOGO-LILI-PINK.jpg"></v-img>
                            <v-form class="pa-4 pb-2" ref="form" v-model="valid" lazy-validation>
                            <v-row>
                                <v-col md="6">           
                                    <v-text-field v-model="name" :counter="10" :rules="nameRules" label="Nombres *" required></v-text-field>                  
                                </v-col>    
                                <v-col md="6">           
                                    <v-text-field v-model="last_name" :counter="10" :rules="nameRules" label="Apellidos *" required></v-text-field>
                                </v-col> 
                            </v-row>
                            <v-row>
                                <v-col md="6">
                                    <v-select v-model="type_ide" :items="items" label="Tipo de identificación"></v-select>
                                </v-col>
                                <v-col md="6">
                                    <v-text-field v-model="ide" :rules="nameRules" :counter="10"  label="numero de identificación *" required></v-text-field>
                                </v-col>
                            </v-row>  
                            <v-row>
                                <v-col md="6">
                                    <v-text-field v-model="position" :counter="20"  label="Cargo *" required></v-text-field>
                                </v-col>
                                <v-col md="6">
                                    <v-text-field v-model="cell" label="Celular *" required type="number"></v-text-field>
                                </v-col>
                            </v-row>
                            <v-text-field v-model="email" :rules="emailRules" label="Correo *" required type="email"></v-text-field>
                            <v-text-field v-model="experiencie" :rules="nameRules" :counter="10"  label="Años de experiencia *" required></v-text-field>
                            <v-file-input label="Hoja de vida"></v-file-input>
                        
                            
                                <v-card-actions>
                                <v-btn color="error" @click="clearFields()" class="mr-4">Limpiar</v-btn>
                                <v-spacer></v-spacer>
                                <v-btn color="success" @click="saveCandidate()" class="mr-4">Enviar</v-btn>
                                </v-card-actions>
                            
                            </v-form>
                        </v-card>
                    </v-col>
                </v-row>
            </v-container>
        </v-card> 
    
</template>
<script>
    export default {
        data: () => ({
            valid: false,
            name: '',
            last_name: '',
            email: '',
            cell:'',
            type_ide:'Cedula de cuidadania',
            ide:'',
            position:'',
            experiencie:0,
            update:0, 
            items: ['Cedula de cuidadania', 'Cedula extranjera', 'pasaporte' ,'Otro'],
            nameRules: [
                v => !!v || 'Name is required',
                v => v.length <= 10 || 'Name must be less than 10 characters',
            ],
            email: '',
            emailRules: [
                v => !!v || 'E-mail is required',
                v => /.+@.+/.test(v) || 'E-mail must be valid',
            ],
        }),
        methods:{
            saveCandidate(){
                let url = '/candidato' //Ruta que hemos creado para enviar una tarea y guardarla
                axios.post(url,{ //estas variables son las que enviaremos para que crear el candidato
                    name:this.name,
                    last_name:this.last_name,
                    email:this.email,
                    cell:this.cell,
                    type_ide:this.type_ide,
                    ide:this.ide,
                    position:this.position,
                    experiencie:this.experiencie,
                }).then(function (response) {
                    me.clearFields();//Limpiamos los campos e inicializamos la variable update a 0
                
                })
                .catch(function (error) {
                    console.log(error);
                });   
            },
            clearFields(){/*Limpia los campos e inicializa la variable update a 0*/
                    this.name='',
                    this.last_name='',
                    this.email='',
                    this.cell=0,
                    this.type_ide='',
                    this.ide='',
                    this.position='',
                    this.experiencie=0
            }
        }
    }
</script>