import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '@/components/searchRoute'
import AnotherPage from '@/components/AnotherPage'
import FirstRoute from '@/components/FirstRoute'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'searchRoute',
      component: searchRoute
    },
    {
      path: '/anotherpage',
      name: 'Another Page',
      component: AnotherPage
    },
    {
      path: '/firstroute/:categories',
      name: 'FirstRoute',
      component: FirstRoute
    }
  ]
})
