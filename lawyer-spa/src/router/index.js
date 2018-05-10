import Vue from 'vue'
import Router from 'vue-router'
import SearchRoute from '@/components/SearchRoute'
import HelloWorld from '@/components/HelloWorld'
import AnotherPage from '@/components/AnotherPage'
import FirstRoute from '@/components/FirstRoute'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'SearchRoute',
      component: SearchRoute
    },
    {
      path: '/hello',
      name: 'HelloWorld',
      component: HelloWorld
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
