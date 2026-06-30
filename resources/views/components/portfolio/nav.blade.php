<nav class="fixed top-0 left-0 right-0 z-50 bg-white/80 dark:bg-gray-950/80 backdrop-blur-md border-b border-gray-200 dark:border-gray-800">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <a href="#hero" class="text-lg font-bold tracking-tight hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                ER<span class="text-blue-600 dark:text-blue-400">.</span>
            </a>
            <div class="hidden sm:flex items-center gap-8 text-sm font-medium">
                <a href="#about" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Sobre mí</a>
                <a href="#experience" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Experiencia</a>
                <a href="#skills" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Stack</a>
                <a href="#projects" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Proyectos</a>
                <a href="#contact" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Contacto</a>
            </div>
            <button id="theme-toggle" class="p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors" aria-label="Cambiar tema">
                <svg class="w-5 h-5 hidden dark:block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                </svg>
                <svg class="w-5 h-5 block dark:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
                </svg>
            </button>
        </div>
    </div>
</nav>

<script>
document.getElementById('theme-toggle')?.addEventListener('click', function() {
    if (document.documentElement.classList.contains('dark')) {
        document.documentElement.classList.remove('dark');
        localStorage.setItem('theme', 'light');
    } else {
        document.documentElement.classList.add('dark');
        localStorage.setItem('theme', 'dark');
    }
});
</script>
