// src/stores/authStore.ts
import { defineStore } from 'pinia'

export const AuthStore = defineStore('auth', {
  // state
  state: () => ({
    isLoggedIn: false,
    albums: ['album1', 'album2', 'album3'],
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