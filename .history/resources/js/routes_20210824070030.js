import index from './components/index';
import VueRouter from 'vue-router';


const routes = [
  {
    path: "/",
    component: index,
    name: 'home'
  }
];

const router = new VueRouter({
  routes,
  mode: history
});

export default router;