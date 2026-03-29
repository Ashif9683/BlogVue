<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog | Laravel + Blade + Vue 3</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-slate-100 text-slate-900 antialiased">
        <main class="mx-auto flex w-full max-w-7xl flex-col gap-6 px-6 py-12">
            <header class="rounded-2xl bg-slate-900 p-8 text-slate-100">
                <h1 class="mt-3 text-3xl font-bold">Blog Starter Project</h1>
                <p class="mt-3 text-sm leading-6 text-slate-300">
                    This page is rendered from <code>packages/Blog</code> to match Bagisto package conventions.
                </p>
                <div class="mt-6">
                    <a
                        href="{{ route('blog.practice') }}"
                        class="inline-flex items-center rounded-full bg-white px-5 py-3 text-sm font-semibold text-slate-900 transition hover:bg-slate-200"
                    >
                        Open Tailwind Practice Page
                    </a>
                </div>
            </header>

            <div id="blog-app" data-title="Blog Home"></div>
        </main>
    </body>
</html>
