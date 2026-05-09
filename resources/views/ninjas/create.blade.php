<x-layout title="Create Ninja">
    <div class="mb-10">
        <p class="text-sm uppercase tracking-[0.35em] text-cyan-300">Create ninja</p>
        <h1 class="text-4xl font-extrabold text-white">Add New Ninja</h1>
    </div>

    <form class="rounded-[2rem] border border-slate-700/70 bg-slate-900/90 p-8 shadow-2xl shadow-slate-950/20">
        @csrf

        <div class="space-y-6">
            <div>
                <label for="name" class="block text-sm font-semibold text-slate-200">Name</label>
                <input type="text" id="name" name="name" class="mt-2 block w-full rounded-xl border border-slate-700/70 bg-slate-950/80 px-4 py-3 text-slate-100 placeholder-slate-500 focus:border-cyan-400 focus:ring-cyan-400" placeholder="Enter ninja name" required>
            </div>

            <div>
                <label for="skill" class="block text-sm font-semibold text-slate-200">Skill</label>
                <input type="text" id="skill" name="skill" class="mt-2 block w-full rounded-xl border border-slate-700/70 bg-slate-950/80 px-4 py-3 text-slate-100 placeholder-slate-500 focus:border-cyan-400 focus:ring-cyan-400" placeholder="Enter skill level" required>
            </div>

            <div>
                <label for="strength" class="block text-sm font-semibold text-slate-200">Strength</label>
                <input type="number" id="strength" name="strength" class="mt-2 block w-full rounded-xl border border-slate-700/70 bg-slate-950/80 px-4 py-3 text-slate-100 placeholder-slate-500 focus:border-cyan-400 focus:ring-cyan-400" placeholder="Enter strength value" required>
            </div>

            <button type="submit" class="inline-flex rounded-full bg-cyan-500 px-6 py-3 text-sm font-semibold text-slate-950 transition hover:bg-cyan-400">Create Ninja</button>
        </div>
    </form>
</x-layout>