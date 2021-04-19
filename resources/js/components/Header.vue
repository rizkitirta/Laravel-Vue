<template>
  <nav>
    <router-link :to="{ name: 'Home' }">Home</router-link>
    <router-link v-bind:to="{ name: 'About' }">About</router-link>
    <router-link v-bind:to="{ name: 'User' }">User</router-link>
  </nav>
</template>
