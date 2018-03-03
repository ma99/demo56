import VueRouter from 'vue-router';

let routes = [
    {
        //path: '/',
        path: '/main',
        component: require('./views/Home')
    },

    {
        path: '/about',
        component: require('./views/About')
    },

    {
        path: '/contact',
        component: require('./views/Contact')
    }
];

export default new VueRouter({
    routes,
    linkActiveClass: 'active',
    mode: 'history',
    //base: '/'
});