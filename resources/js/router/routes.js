// import Baner from "../components/Baner.vue";
// import Differences from "../components/Differences.vue";



export default [

    {
        path: '/',
        name: 'About',
        component: () =>
            import ("@/components/About.vue")
    },

    {
        path: '/',
        name: 'Demo',
        component: () =>
            import ("@/components/Demo.vue")
    },
    {
        path: '/',
        name: 'Tabs',
        component: () =>
            import ("@/components/Tabs.vue")
    },
    {
        path: '/',
        name: 'Base',
        component: () =>
            import ("@/components/Base.vue")
    },
    {
        path: '/',
        name: 'Partners',
        component: () =>
            import ("@/components/Partners.vue")
    },

    {
        path: '/',
        name: 'Work',
        component: () =>
            import ("@/components/Work.vue")
    },


    {
        path: '/',
        name: 'Unique',
        component: () =>
            import ("@/components/Unique.vue")
    }

]