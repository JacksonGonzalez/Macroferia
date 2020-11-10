import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from './components/Home';
import ProductosXCategoria from './components/ProductosXCategoria';
import Panel from './components/Panel';
import Mensages from './components/Mensages';
import Contactenos from './components/Contactenos';
// import Client from './components/Client';
// import Income from './components/Income';
// import IncomeReport from './components/IncomeReport.vue';
// import Order from './components/Order.vue';
// import Product from './components/Product.vue';
// import Rol from './components/Rol.vue';
// import Sale from './components/Sale.vue';
// import SaleReport from './components/SaleReport.vue';
// import Supplier from './components/Supplier.vue';
// import User from './components/User.vue';

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
    // {
    //     path : '/productos',
    //     component: Product,

    // },
    // {
    //     path : '/ingresos',
    //     component: Income,

    // },
    // {
    //     path : '/proveedor',
    //     component: Supplier,

    // },
    // {
    //     path : '/pedidos',
    //     component: Order,

    // },
    // {
    //     path : '/ventas',
    //     component: Sale,

    // },
    // {
    //     path : '/clientes',
    //     component: Client,

    // },
    // {
    //     path : '/usuarios',
    //     component: User,

    // },
    // {
    //     path : '/roles',
    //     component: Rol,

    // },
    // {
    //     path : '/reporte-ingreso',
    //     component: IncomeReport,

    // },
    // {
    //     path : '/reporte-ventas',
    //     component: SaleReport,

    // },

];