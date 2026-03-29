<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tailwind Practice</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-linear-to-br from-amber-50 via-white to-cyan-100 text-slate-900 antialiased">
        <main class="mx-auto flex min-h-screen w-full max-w-7xl flex-col gap-8 px-6 py-12">
            <div class="flex items-center justify-between gap-4">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.3em] text-cyan-700">Learn Tailwind</p>
                    <h1 class="mt-3 text-4xl font-black tracking-tight text-slate-900">Your practice playground</h1>
                </div>

                <a
                    href="{{ route('blog.home') }}"
                    class="inline-flex items-center rounded-full border border-slate-300 bg-white px-4 py-2 text-sm font-semibold text-slate-700 transition hover:border-slate-900 hover:text-slate-900"
                >
                    Back Home
                </a>
            </div>

            <section class="bg-slate-900 grid h-screen">
                <h1 class="text-white text-4xl m-6">Practice</h1>
                <div>
                    <div class="p-6 max-w-sm mx-auto bg-white rounded-lg shadow-md flex items-center space-x-4">
                        <div>
                            <img class="h-20 w-20 rounded-lg" src="https://imgs.search.brave.com/NcqJG9P0iYtR0i_E5XbBOavj2PjmGpjfRNH6-DcKwKk/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly9maXZl/cnItcmVzLmNsb3Vk/aW5hcnkuY29tL2Zf/YXV0byxxX2F1dG8s/Y19maWxsLGdfY2Vu/dGVyL3YxL2F0dGFj/aG1lbnRzL2dlbmVy/aWNfYXNzZXQvYXNz/ZXQvNzAxMzVjMmQ0/N2I0YTQ4OTI4OTc1/MjRlYjAwZTZhOWEt/MTY1MjQ0NzE1NTAz/MC9sb2dvLTQucG5n" alt="logo">
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold">Learning Tailwind</h2>
                            <p class="text-slate-600 font-medium">Practice with PW</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>
