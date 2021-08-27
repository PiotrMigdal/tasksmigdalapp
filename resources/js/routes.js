import VueRouter from 'vue-router';
import Portfolio from './portfolio/Portfolio';


const routes = [
  {
    path: "/",
    component: Portfolio,
    name: 'home'
  }
];

const router = new VueRouter({
  routes,
  mode: "history"
});

export default router;