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

        //Mann og dame routes
        {
            path: '/herre',
            component: Products
        },

        {
            path: '/herre/:id',
            component: SingleProduct
        },

        {
            path: '/dame',
            component: Products
        },

        {
            path: '/dame/:id',
            component: SingleProduct
        },
    ]
}