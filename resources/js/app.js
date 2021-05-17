import { createApp, defineAsyncComponent } from 'vue';

require('./bootstrap');

createApp({})
  .component('example-component', defineAsyncComponent(() => import('./components/example-component')))
  .mount('#app');
