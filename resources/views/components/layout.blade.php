@props(['title' => 'Dashboard'])

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title }}</title>
        @vite('resources/css/app.css')
    </head>
    <body class="min-h-screen bg-slate-950 text-slate-100 antialiased">
        <div class="min-h-screen bg-[radial-gradient(circle_at_top,_rgba(56,189,248,0.18),_transparent_25%),linear-gradient(180deg,_#020617_0%,_#0f172a_100%)]">
            <header class="border-b border-slate-800/60 bg-slate-950/80 backdrop-blur-xl">
                <div class="mx-auto flex max-w-7xl flex-col gap-4 px-6 py-5 sm:flex-row sm:items-center sm:justify-between">
                    <div>
                        <a href="/" class="text-2xl font-semibold tracking-tight text-cyan-300">Ninja CRUD</a>
                        <p class="text-sm text-slate-500">A sleek Laravel Tailwind experience</p>
                    </div>
                    <nav class="flex flex-wrap items-center gap-3 text-sm text-slate-300">
                        <a href="/" class="rounded-full px-4 py-2 transition hover:bg-slate-700/80 hover:text-white">Home</a>
                        <a href="/ninjas" class="rounded-full px-4 py-2 transition hover:bg-slate-700/80 hover:text-white">All Ninjas</a>
                        <a href="/ninjas/create" class="rounded-full bg-cyan-500 px-4 py-2 font-semibold text-slate-950 transition hover:bg-cyan-400">Create Ninja</a>
                    </nav>
                </div>
            </header>

            <main class="mx-auto max-w-6xl px-6 py-10 sm:py-14">
                <section class="rounded-[2rem] border border-slate-700/70 bg-slate-950/80 p-8 shadow-2xl shadow-slate-950/30 backdrop-blur-xl">
                    {{ $slot }}
                </section>
            </main>
        </div>
    </body>
</html>
