<template>
    <section class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
        <div class="flex items-center justify-between gap-3 border-b border-slate-200 pb-4">
            <h3 class="text-xl font-semibold text-slate-900">All Users</h3>
            <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700">
                {{ users.length }} records
            </span>
        </div>

        <p 
            v-if="loading" 
            class="mt-4 text-sm text-slate-500"
        >
            Loading users...
        </p>
        <p 
            v-else-if="error"  
            class="mt-4 text-sm text-red-600"
        >
            {{ error }}
        </p>

        <ul 
            v-else 
            class="mt-4 grid gap-3 md:grid-cols-2"
        >
            <li 
                v-for="user in users" 
                :key="user.id" 
                class="rounded-xl border border-slate-200 bg-slate-50 p-4"
            >
                <p class="font-semibold text-slate-900">{{ user.name }}</p>
                <p class="mt-1 text-sm text-slate-600">{{ user.email }}</p>
                <p class="mt-2 text-xs text-slate-500">User ID: {{ user.id }}</p>
            </li>
        </ul>
    </section>
</template>

<script setup>
import { onMounted, ref } from 'vue';

const users = ref([]);
const loading = ref(false);
const error = ref('');

const loadUsers = async () => {
    loading.value = true;
    error.value = '';

    try {
        const response = await fetch('/api/v1/users');
        const payload = await response.json();

        if (!response.ok) {
            throw new Error(payload.message || 'Failed to fetch users.');
        }

        users.value = payload.data ?? [];
    } catch (err) {
        error.value = err.message || 'Something went wrong while loading users.';
    } finally {
        loading.value = false;
    }
};

onMounted(() => {
    loadUsers();
});
</script>
