require('./bootstrap');
import Vue from 'vue'
	import Vuetify from 'vuetify'
	import 'vuetify/dist/vuetify.min.css'

	Vue.use(Vuetify)
	Vue.component('form-component',require('./components/FormComponent.vue').default)

	const app = new Vue({
		vuetify: new Vuetify(),
		el: '#app',
	})
