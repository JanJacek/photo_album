// src/stores/authStore.ts
import { defineStore } from 'pinia'

export const AuthStore = defineStore('auth', {
  // state
  state: () => ({
    isLoggedIn: false,
    albums: ['Słonie', 'Żyrafy', 'Żółć'],
  }),

  // actions
  actions: {
    logIn() {
      this.isLoggedIn = true;
    },
    logOut() {
      this.isLoggedIn = false;
    },
  },
})