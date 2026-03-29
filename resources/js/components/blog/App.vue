<template>
    <section class="w-full rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
        <p class="text-xs font-semibold uppercase tracking-wider text-slate-500">Blog Dashboard</p>
        <h2 class="mt-2 text-2xl font-semibold text-slate-900">{{ title }}</h2>

        <div class="mt-6 grid gap-3 sm:grid-cols-2">
            <button
                type="button"
                class="rounded-xl border px-4 py-3 text-left text-sm font-semibold transition"
                :class="activeSection === 'posts'
                    ? 'border-slate-900 bg-slate-900 text-white'
                    : 'border-slate-200 bg-slate-50 text-slate-700 hover:bg-slate-100'"
                @click="activeSection = 'posts'"
            >
                Posts
            </button>
            <button
                type="button"
                class="rounded-xl border px-4 py-3 text-left text-sm font-semibold transition"
                :class="activeSection === 'users'
                    ? 'border-slate-900 bg-slate-900 text-white'
                    : 'border-slate-200 bg-slate-50 text-slate-700 hover:bg-slate-100'"
                @click="activeSection = 'users'"
            >
                Users
            </button>
        </div>

        <div class="mt-6">
            <Posts v-if="activeSection === 'posts'" />
            <Users v-else />
        </div>
    </section>
</template>

<script setup>
import { ref } from 'vue';
import Posts from './Posts.vue';
import Users from './Users.vue';

defineProps({
    title: {
        type: String,
        required: true,
    },
});

const activeSection = ref('posts');
</script>
