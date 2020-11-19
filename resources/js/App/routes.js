import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from './components/home/Home';
import ProductosXCategoria from './components/categorias/ProductosXCategoria';
import Panel from './components/dashboard/Panel';
import Mensages from './components/message/Mensages';
import Contactenos from './components/contactactenos/Contactenos';
import Productos from './components/productos/Productos'
import RolesPanel from './components/dashboard/componentes/Roles';
import UsuarioPanel from './components/dashboard/componentes/Usuarios';
import CategoriasPanel from './components/dashboard/componentes/Categorias';
import ProductosPanel from './components/dashboard/componentes/Productos';
import BannerPanel from './components/dashboard/componentes/Banner';

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
    {
        path : '/roles-panel',
        component: RolesPanel,

    },
    {
        path : '/usuarios-panel',
        component: UsuarioPanel,

    },
    {
        path : '/categorias-panel',
        component: CategoriasPanel,

    },
    {
        path : '/productos-panel',
        component: ProductosPanel,

    },
    {
        path : '/banner-panel',
        component: BannerPanel,

    },
    

];