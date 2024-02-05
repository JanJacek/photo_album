// import { createApp } from 'vue'
// import App from './App.vue'
// import router from './router'

// createApp(App).use(router).mount('#app')
import { createApp } from 'vue';
import App from './App.vue';
import router from './router';
import { createPinia } from 'pinia'; // Import Pinia

const app = createApp(App);

const pinia = createPinia(); // Utwórz instancję Pinia

app.use(pinia); // Użyj Pinia z aplikacją Vue
app.use(router);

app.mount('#app');
