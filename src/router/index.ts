// Import Vue Router and your store
import { createRouter, createWebHistory, RouteRecordRaw } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import LoginViewVue from '@/views/LoginView.vue'
import CmsPanelView from '@/views/CmsPanelView.vue'

const routes: Array<RouteRecordRaw> = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/cms',
    name: 'login',
    component: LoginViewVue
  },
  {
    path: '/cms/panel',
    name: 'cms-panel',
    component: CmsPanelView,
    meta: { requiresAuth: true } // Ustaw meta flagę, aby wskazać, że trasa wymaga autoryzacji
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

// Globalna straż przed każdą nawigacją
router.beforeEach((to, from, next) => {
  // Sprawdź, czy trasa wymaga autoryzacji
  if (to.matched.some(record => record.meta.requiresAuth)) {
    // Tutaj sprawdź stan zalogowania użytkownika, np. z Vuex store
    if (store.getters.isLoggedIn) { // Zakładając, że masz getter `isLoggedIn` w swoim store
      // Jeśli użytkownik nie jest zalogowany, przekieruj go na stronę logowania
      next({ name: 'login' })
    } else {
      // Jeśli użytkownik jest zalogowany, kontynuuj nawigację
      next()
    }
  } else {
    // Dla tras, które nie wymagają autoryzacji, po prostu kontynuuj nawigację
    next()
  }
})

export default router
