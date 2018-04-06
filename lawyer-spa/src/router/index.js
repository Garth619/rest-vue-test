import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '@/components/HelloWorld'
import AnotherPage from '@/components/AnotherPage'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'HelloWorld',
      component: HelloWorld
    },
    {
      path: '/anotherpage',
      name: 'Another Page',
      component: AnotherPage
    }
  ]
})
