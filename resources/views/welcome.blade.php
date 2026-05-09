<x-layout title="Welcome, Ninja">
    <div class="relative grid gap-10 lg:grid-cols-[1.3fr_0.9fr] lg:items-center">
        <div class="space-y-6">
            <span class="inline-flex rounded-full bg-cyan-500/10 px-4 py-1 text-xs font-semibold uppercase tracking-[0.35em] text-cyan-300">New Tailwind Experience</span>
            <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl">Welcome to <span class="text-cyan-300">Laravel</span></h1>
            <p class="max-w-2xl text-lg leading-8 text-slate-400">A polished CRUD starter with Blade, Tailwind, and responsive page layouts designed for modern apps.</p>
            <a href="/ninjas" class="inline-flex rounded-full bg-cyan-500 px-7 py-3 text-sm font-semibold text-slate-950 transition hover:bg-cyan-400">View Ninjas</a>
        </div>

        <!-- Animated Ninja Shurikens -->
        <div class="shuriken absolute top-0 left-0 w-12 h-12 opacity-20 pointer-events-none transition-transform duration-700 ease-out" style="transform: translate(-50px, -50px);">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2L14 10H22L16 14L18 22L12 16L6 22L8 14L2 10H10L12 2Z" fill="#06b6d4"/>
            </svg>
        </div>
        <div class="shuriken absolute top-0 left-0 w-10 h-10 opacity-15 pointer-events-none transition-transform duration-500 ease-out" style="transform: translate(-40px, -40px);">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2L14 10H22L16 14L18 22L12 16L6 22L8 14L2 10H10L12 2Z" fill="#0891b2"/>
            </svg>
        </div>
        <div class="shuriken absolute top-0 left-0 w-8 h-8 opacity-10 pointer-events-none transition-transform duration-300 ease-out" style="transform: translate(-30px, -30px);">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2L14 10H22L16 14L18 22L12 16L6 22L8 14L2 10H10L12 2Z" fill="#0e7490"/>
            </svg>
        </div>

        <!-- Autonomous ninja motion accents -->
        <div class="accent float-small absolute top-16 right-10 w-14 h-14 opacity-20 pointer-events-none">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="12" r="10" stroke="#38bdf8" stroke-width="2" fill="none"/>
                <path d="M12 5V19" stroke="#22d3ee" stroke-width="2" stroke-linecap="round"/>
                <path d="M5 12H19" stroke="#22d3ee" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </div>
        <div class="accent float-medium absolute bottom-20 left-12 w-16 h-12 opacity-18 pointer-events-none">
            <svg viewBox="0 0 28 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 16C2 16 8 3 14 3C20 3 26 16 26 16" stroke="#60a5fa" stroke-width="2" stroke-linecap="round" fill="none"/>
                <path d="M4 14C4 14 8 8 14 8C20 8 24 14 24 14" stroke="#38bdf8" stroke-width="2" stroke-linecap="round" fill="none"/>
            </svg>
        </div>
        <div class="accent float-diagonal absolute top-24 right-24 w-12 h-12 opacity-16 pointer-events-none">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 20L10 4L20 6L14 22L4 20Z" fill="#0ea5e9"/>
                <path d="M6 18L12 6L18 18" stroke="#e0f2fe" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
        </div>
        <div class="accent float-spark absolute top-10 left-16 w-10 h-10 opacity-18 pointer-events-none">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2L14.5 9.5L22 10.5L16 15.5L17.5 23L12 19L6.5 23L8 15.5L2 10.5L9.5 9.5L12 2Z" fill="#38bdf8" opacity="0.85"/>
            </svg>
        </div>
        <div class="accent float-wisp absolute bottom-24 right-14 w-14 h-10 opacity-12 pointer-events-none">
            <svg viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 10C6 2 14 2 18 10C22 18 28 18 28 18" stroke="#7dd3fc" stroke-width="2" stroke-linecap="round" fill="none"/>
                <path d="M4 12C8 6 14 6 18 12C22 18 26 18 26 18" stroke="#38bdf8" stroke-width="1.5" stroke-linecap="round" fill="none"/>
            </svg>
        </div>
    </div>

    <style>
        .float-small {
            animation: float-small 4s ease-in-out infinite alternate;
        }
        .float-medium {
            animation: float-medium 5.2s ease-in-out infinite alternate;
        }
        .float-diagonal {
            animation: float-diagonal 6.5s ease-in-out infinite alternate;
        }
        .float-spark {
            animation: float-spark 3.8s ease-in-out infinite alternate;
        }
        .float-wisp {
            animation: float-wisp 5.8s ease-in-out infinite alternate;
        }
        @keyframes float-small {
            from { transform: translate(0, 0) rotate(0deg); }
            to { transform: translate(12px, -12px) rotate(15deg); }
        }
        @keyframes float-medium {
            from { transform: translate(0, 0) rotate(0deg); }
            to { transform: translate(-18px, 14px) rotate(-12deg); }
        }
        @keyframes float-diagonal {
            from { transform: translate(0, 0) rotate(0deg); }
            to { transform: translate(18px, 18px) rotate(25deg); }
        }
        @keyframes float-spark {
            from { transform: translate(0, 0) rotate(0deg); }
            to { transform: translate(-8px, -18px) rotate(15deg); }
        }
        @keyframes float-wisp {
            from { transform: translate(0, 0) rotate(0deg); }
            to { transform: translate(14px, 10px) rotate(-10deg); }
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const shurikens = document.querySelectorAll('.shuriken');
            let mouseX = 0, mouseY = 0;

            document.addEventListener('mousemove', (e) => {
                mouseX = e.clientX;
                mouseY = e.clientY;

                shurikens.forEach((shuriken, index) => {
                    const delay = index * 100; // Stagger the animations
                    setTimeout(() => {
                        const offsetX = (index + 1) * 20;
                        const offsetY = (index + 1) * 20;
                        shuriken.style.transform = `translate(${mouseX - offsetX}px, ${mouseY - offsetY}px)`;
                    }, delay);
                });
            });

            // Optional: Fade in on load
            shurikens.forEach((shuriken, index) => {
                setTimeout(() => {
                    shuriken.style.opacity = '0.3';
                }, index * 200);
            });
        });
    </script>
</x-layout>
