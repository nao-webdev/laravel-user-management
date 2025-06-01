<template>
  <div>
    <h1>Hello from Vue!</h1>
    <p>カウント: {{ count }}</p>
    <button @click="count++">増やす</button>
  </div>
</template>

<script setup>
import { ref } from 'vue'

const count = ref(0)
</script>

<style scoped>
h1 {
  color: #42b983;
}
</style>