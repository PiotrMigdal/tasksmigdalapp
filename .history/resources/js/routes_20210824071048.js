import VueRouter from 'vue-router';
import Index from './components/ExampleComponent';


const routes = [
  {
    path: "/",
    component: Index,
    name: 'home'
  }
];

const router = new VueRouter({
  routes,
  mode: history
});

export default router;