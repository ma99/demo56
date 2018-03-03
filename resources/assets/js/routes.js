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
    },

    //404
    {   
        path: '*',
        //component: fourohfour
        component: require('./views/Fourohfour')
    },

];

export default new VueRouter({
    routes,
    linkActiveClass: 'active',
    mode: 'history',
    //base: '/'
});