<x-layout title="Ninja Details">
    <div class="space-y-8">
        <div class="rounded-[2rem] border border-slate-700/70 bg-slate-900/90 p-8 shadow-2xl shadow-slate-950/20">
            <p class="text-sm uppercase tracking-[0.35em] text-cyan-300">Ninja detail</p>
            <h2 class="mt-4 text-4xl font-semibold text-white">Ninja ID: {{ $id }}</h2>
            <p class="mt-5 max-w-2xl text-lg leading-8 text-slate-400">This page is ready for extra ninja fields, biographies, and action details once you extend the model and views.</p>
            <a href="/ninjas" class="inline-flex rounded-full bg-cyan-500 px-5 py-3 text-sm font-semibold text-slate-950 transition hover:bg-cyan-400">Back to roster</a>
        </div>
    </div>
</x-layout>
