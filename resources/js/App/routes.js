import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from './components/home/Home';
import ProductosXCategoria from './components/categorias/ProductosXCategoria';
import Panel from './components/dashboard/Panel';
import Mensages from './components/message/Mensages';
import Contactenos from './components/contactactenos/Contactenos';
import Productos from './components/productos/Productos'

Vue.use(VueRouter);

export const routes = [
    {
        path : '/',
        component: Home,

    },
    {
        path : '/productosxcategoria/:id',
        name : 'productosxcategoria',
        component: ProductosXCategoria,

    },
    {
        path : '/panel',
        component: Panel,

    },
    {
        path : '/mensage',
        component: Mensages,

    },
    {
        path : '/contactenos',
        component: Contactenos,

    },
    {
        path : '/productos',
        component: Productos,

    },
    

];