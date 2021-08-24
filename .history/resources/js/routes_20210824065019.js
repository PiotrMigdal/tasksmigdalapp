import index from './components/index';
import VueRouter from 'vue-router';


const routes = [
  {
    path: "/",
    component: index
  }
];

const router = new VueRouter({
  routes,
});

export default router;