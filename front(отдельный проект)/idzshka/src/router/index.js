import { createRouter, createWebHistory } from 'vue-router'


const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'main',
      component: () => import('../views/main/Index.vue')
    },
    {
      path: '/cathalogs',
      name: 'cathalogs',
      component: () => import('../views/cathalog/Index.vue')
    },
  ]
})

export default router
