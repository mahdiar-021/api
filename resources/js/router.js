import VueRouter from 'vue-router';
import Home from './components/admin/Home.vue';


/**
 * route of products
 */
import IndexProduct from './components/admin/product/IndexProduct.vue'
import CreateProduct from './components/admin/product/CreateProduct.vue'
import ShowProduct from './components/admin/product/ShowProduct.vue'
import EditProduct from './components/admin/product/EditProduct.vue';




let routes = [
    /**
     * start route of products
     */
            {
                path : '/',
                component : Home
            },
            {
                path:'/index_product',
                component:IndexProduct
            },
            {
                path:'/create_product',
                component:CreateProduct
            },
            {
                path:'/edit_product',
                component:EditProduct
            },
            {
                path:'/show_product',
                component:ShowProduct
            },
      /**
     * start route of cat
     */
    ];

    export default new VueRouter({
        routes
    });