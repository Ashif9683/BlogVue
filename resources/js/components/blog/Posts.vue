<template>
    <section class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
        <div class="flex items-center justify-between gap-3 border-b border-slate-200 pb-4">
            <h3 class="text-xl font-semibold text-slate-900">All Posts</h3>
            <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700">
                {{ posts.length }} records
            </span>
        </div>

        <p v-if="loading" class="mt-4 text-sm text-slate-500">Loading posts...</p>
        <p v-else-if="error" class="mt-4 text-sm text-red-600">{{ error }}</p>

        <ul v-else class="mt-4 space-y-3">
            <li v-for="post in posts" :key="post.id" class="rounded-xl border border-slate-200 bg-slate-50 p-4">
                <p class="font-semibold text-slate-900">{{ post.title }}</p>
                <p class="mt-2 text-sm leading-6 text-slate-600">{{ post.excerpt || trimText(post.content, 180) }}</p>
                <p class="mt-2 text-xs text-slate-500">Author: {{ post.user?.name || 'N/A' }}</p>
            </li>
        </ul>
    </section>
</template>

<script setup>
import { onMounted, ref } from 'vue';

const posts = ref([]);
const loading = ref(false);
const error = ref('');

const loadPosts = async () => {
    loading.value = true;
    error.value = '';

    try {
        const response = await fetch('/api/v1/posts');
        const payload = await response.json();

        if (!response.ok) {
            throw new Error(payload.message || 'Failed to fetch posts.');
        }

        posts.value = payload.data ?? [];
    } catch (err) {
        error.value = err.message || 'Something went wrong while loading posts.';
    } finally {
        loading.value = false;
    }
};

onMounted(() => {
    loadPosts();
});

const trimText = (value, maxLength) => {
    if (!value) {
        return '';
    }

    return value.length > maxLength ? `${value.slice(0, maxLength)}...` : value;
};
</script>
