require('./bootstrap');
	import Vue from 'vue'
	import Vuetify from 'vuetify'
	import VueSweetalert2 from 'vue-sweetalert2';

	import 'vuetify/dist/vuetify.min.css'
	import 'sweetalert2/dist/sweetalert2.min.css';

	const options = {
		confirmButtonColor: '#ed008c',
		cancelButtonColor: '#ff7674',
	  };

	Vue.use(Vuetify)
	Vue.use(VueSweetalert2,options);
	Vue.component('form-component',require('./components/FormComponent.vue').default)
	Vue.component('main-component',require('./components/Main.vue').default)

	const app = new Vue({
		vuetify: new Vuetify(),
		el: '#app',
	})
