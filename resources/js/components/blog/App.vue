<template>
    <section class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
        <p class="text-xs font-semibold uppercase tracking-wider text-slate-500">Vue 3 Component</p>
        <h2 class="mt-2 text-2xl font-semibold text-slate-900">{{ title }}</h2>
        <p class="mt-3 text-sm leading-6 text-slate-600">
            The blog frontend is powered by Vue 3 and compiled with Vite.
        </p>
    </section>
</template>

<script setup>
defineProps({
    title: {
        type: String,
        required: true,
    },
});
</script>
