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
                                    <v-text-field v-model="position" :rules="nameRules" :counter="10"  label="Cargo *" required></v-text-field>
                                </v-col>
                                <v-col md="6">
                                    <v-text-field v-model="cell" :rules="emailRules" label="Celular *" required type="number"></v-text-field>
                                </v-col>
                            </v-row>
                            <v-text-field v-model="email" :rules="emailRules" label="Correo *" required type="email"></v-text-field>
                            <v-text-field v-model="experience" :rules="nameRules" :counter="10"  label="Años de experiencia *" required></v-text-field>
                            <v-file-input label="Hoja de vida"></v-file-input>
                        
                            
                                <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-btn color="success" class="mr-4">Enviar</v-btn>
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
            experience:0,
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
    }
</script>