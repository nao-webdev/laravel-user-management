import '../css/app.css';
import './bootstrap';
import Alpine from 'alpinejs';
import { createApp } from 'vue';
import HelloTest from './components/HelloTest.vue'

window.Alpine = Alpine;

Alpine.start();

createApp(HelloTest).mount('#app')