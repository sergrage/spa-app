// import HomeComponent from '../components/HomeComponent';
let HomeComponent = () =>  import(/*webpackChunkName: "home"*/'../components/HomeComponent');
let PostsComponent = () =>  import(/*webpackChunkName: "posts"*/'../components/PostsComponent');

import NotFoundComponent from '../components/NotFoundComponent';

export default {

    mode: 'history',
    linkActiveClass: 'font-bold',
    routes: [
        {
            path: '*',
            component: NotFoundComponent
        },
        {
            path: '/',
            component: HomeComponent,
            name: 'home'
        },
        {
            path: '/posts',
            component: PostsComponent,
            name: 'posts'
        }
    ]
}
