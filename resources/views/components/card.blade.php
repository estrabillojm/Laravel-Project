@props(['highlight' => false])
<div @class([
    'rounded-3xl border border-slate-700/70 bg-slate-900/90 p-6 shadow-lg shadow-slate-950/20 transition duration-300',
    'ring-2 ring-cyan-400/40' => $highlight,
    'ring-1 ring-slate-700/60' => ! $highlight,
])>
    <div class="space-y-4 text-slate-100">
        {{ $slot }}
    </div>
    <a {{ $attributes }} class="mt-6 inline-flex items-center justify-center rounded-full bg-cyan-500 px-5 py-2 text-sm font-semibold text-slate-950 transition hover:bg-cyan-400">View Details</a>
</div>
