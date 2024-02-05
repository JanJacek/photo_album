// Import Vue Router
import { createRouter, createWebHistory, RouteRecordRaw } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import LoginViewVue from '@/views/LoginView.vue'
import CmsPanelView from '@/views/CmsPanelView.vue'
// Import funkcji do tworzenia sklepu, nie instancji sklepu
import { AuthStore } from '@/pinia/authStore'

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
    meta: { requiresAuth: true }
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

// Globalna straż przed każdą nawigacją
router.beforeEach((to, from, next) => {
  // Odwołaj się do sklepu Pinia wewnątrz funkcji nawigacyjnej
  const authStore = AuthStore();

  // Sprawdź, czy trasa wymaga autoryzacji
  if (to.matched.some(record => record.meta.requiresAuth)) {
    if (!authStore.isLoggedIn) {
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
