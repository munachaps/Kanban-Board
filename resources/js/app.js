
import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import axios from 'axios';
import {routes} from './routes';
 
Vue.use(VueRouter);
Vue.use(VueAxios, axios);
 
const router = new VueRouter({
    mode: 'history',
    routes: routes
});

require("./bootstrap");

window.Vue = require("vue");

// Register our components
Vue.component("kanban-board", require("./components/KanbanBoard.vue").default);
Vue.component("add-task", require("./components/AddTaskForm.vue"));

const app = new Vue({
  el: "#app",
  router: router,
  render: h => h(App),
});