<template>
  <main class="min-h-screen bg-slate-50 px-5 py-10 text-slate-800">
    <header class="mx-auto mb-8 w-full max-w-4xl">
      <p class="mb-2 text-xs font-bold uppercase tracking-[0.08em] text-blue-600">My Blog</p>
      <h1 class="mb-3 text-3xl font-bold md:text-4xl">Api Vue Development</h1>
    </header>

    <div>
      <ul>
        <li 
          v-for="item in data" 
          :key="item.id"
          class="mb-4 rounded-lg bg-white p-4 shadow"
        >
          <h2 class="font-bold text-lg">{{ item.title }}</h2>
          <p class="text-sm text-gray-600">{{ item.body }}</p>
        </li>
      </ul>
    </div>
  </main>
</template>

<script>
import axios from 'axios';

export default {
  name: 'App',

  data() {
    return {
      data: [], 
    };
  },

  async mounted() {
    try {
      let result = await axios.get('https://jsonplaceholder.typicode.com/posts');
      this.data = result.data; 
      console.log(this.data);
    } catch (error) {
      console.log(error);
    }
  },
}
</script>
