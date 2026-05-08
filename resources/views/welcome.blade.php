<x-layout title="Welcome, Ninja">
    <div class="grid gap-10 lg:grid-cols-[1.3fr_0.9fr] lg:items-center">
        <div class="space-y-6">
            <span class="inline-flex rounded-full bg-cyan-500/10 px-4 py-1 text-xs font-semibold uppercase tracking-[0.35em] text-cyan-300">New Tailwind Experience</span>
            <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl">Welcome to <span class="text-cyan-300">Laravel</span></h1>
            <p class="max-w-2xl text-lg leading-8 text-slate-400">A polished CRUD starter with Blade, Tailwind, and responsive page layouts designed for modern apps.</p>
            <a href="/ninjas" class="inline-flex rounded-full bg-cyan-500 px-7 py-3 text-sm font-semibold text-slate-950 transition hover:bg-cyan-400">View Ninjas</a>
        </div>

        <div class="rounded-[2rem] border border-slate-700/70 bg-slate-900/90 p-8 shadow-2xl shadow-slate-950/30">
            <p class="text-sm uppercase tracking-[0.28em] text-cyan-300">What you get</p>
            <div class="mt-6 grid gap-4">
                <div class="rounded-3xl bg-slate-950/80 p-5 text-slate-100 shadow-inner shadow-slate-950/20">
                    <p class="font-semibold text-white">Beautiful UI</p>
                    <p class="mt-2 text-sm text-slate-400">Clean blades and strong visual hierarchy across the app.</p>
                </div>
                <div class="rounded-3xl bg-slate-950/80 p-5 text-slate-100 shadow-inner shadow-slate-950/20">
                    <p class="font-semibold text-white">Fast navigation</p>
                    <p class="mt-2 text-sm text-slate-400">A responsive, easy-to-scan layout for ninja roster management.</p>
                </div>
                <div class="rounded-3xl bg-slate-950/80 p-5 text-slate-100 shadow-inner shadow-slate-950/20">
                    <p class="font-semibold text-white">Modern styling</p>
                    <p class="mt-2 text-sm text-slate-400">Tailwind-powered components that feel polished and consistent.</p>
                </div>
            </div>
        </div>
    </div>
</x-layout>
