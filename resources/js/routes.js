import Home from './components/Home'
import About from './components/About'
import Contact from './components/Contact'
import Products from './components/Products'
import SingleProduct from './components/SingleProduct'

export default {

    mode: 'history',
    linkActiveClass: 'font-bold',

    
    routes: [
        {
            path: '/',
            component: Home
        },

        {
            path: '/omoss',
            component: About
        },

        {
            path: '/kontakt',
            component: Contact
        },

        // Herre routes
        {
            path: '/herre',
            component: Products
        },

        {
            path: '/herre/:catId',
            component: Products
        },

        {
            path: '/produkt/:id',
            component: SingleProduct
        },

        // Dame routes
        {
            path: '/dame',
            component: Products
        },

        {
            path: '/dame/:catId',
            component: Products
        },

        {
            path: '/produkt/:id',
            component: SingleProduct
        },
    ]
}