<x-layout title="Ninja Roster">
    <div class="mb-10 flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <p class="text-sm uppercase tracking-[0.35em] text-cyan-300">Ninja roster</p>
            <h1 class="text-4xl font-extrabold text-white">All Ninjas</h1>
        </div>
        <a href="/ninjas/create" class="inline-flex rounded-full bg-slate-700 px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-cyan-500/10 transition hover:bg-slate-600">Create Ninja</a>
    </div>

    <ul class="grid gap-6 md:grid-cols-2">
        @foreach ($ninjas as $ninja)
            @if($ninja['skill'] != 'x')
                <li class="list-none">
                    <x-card href="ninjas/{{ $ninja['id'] }}" :highlight="$ninja['strength'] > 70">
                        <div class="space-y-3">
                            <h3 class="text-2xl font-semibold text-white">{{ $ninja['name'] }}</h3>
                            <p class="text-sm text-slate-400">Skill: <span class="font-medium text-slate-200">{{ $ninja['skill'] }}</span></p>
                            <p class="text-sm text-slate-400">Strength: <span class="font-medium text-slate-200">{{ $ninja['strength'] }}</span></p>
                        </div>
                    </x-card>
                </li>
            @endif
        @endforeach
    </ul>

    <div class="mt-12 rounded-[2rem] border border-slate-700/70 bg-slate-900/90 p-8 shadow-2xl shadow-slate-950/20">
        <p class="text-sm uppercase tracking-[0.35em] text-cyan-300">Featured fighter</p>
        <h2 class="mt-2 text-3xl font-semibold text-white">Best Ninja, {{ $ninja_object->name }}</h2>
        <p class="mt-3 text-slate-400">This ninja stands out as the strongest team member with clean combat style and exceptional skill.</p>
    </div>
</x-layout>
