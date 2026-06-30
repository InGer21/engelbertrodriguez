<div class="max-w-3xl mx-auto text-center">
    <div class="mb-8">
        @if (\Illuminate\Support\Facades\Storage::disk('public')->exists('photo.jpg'))
            <div class="relative inline-block">
                <div class="absolute -inset-2 w-40 h-40 lg:w-44 lg:h-44 mx-auto rounded-full bg-gradient-to-br from-blue-500 to-purple-600 opacity-15 blur-2xl"></div>
                <img src="{{ asset('storage/photo.jpg') }}" alt="Engelbert Rodríguez"
                     class="relative w-40 h-40 lg:w-44 lg:h-44 mx-auto rounded-full object-cover ring-4 ring-white dark:ring-gray-950 ring-offset-2 ring-offset-blue-500/20 shadow-2xl shadow-blue-500/20 hover:scale-105 transition-transform duration-300">
            </div>
        @else
            <div class="w-40 h-40 lg:w-44 lg:h-44 mx-auto rounded-full bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center text-white text-5xl font-bold mb-4 shadow-2xl shadow-blue-500/20 ring-4 ring-white dark:ring-gray-950 ring-offset-2 ring-offset-blue-500/20">
                ER
            </div>
        @endif
    </div>
    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold tracking-tight mb-4">
        Engelbert Rodríguez
    </h1>
    <p class="text-xl sm:text-2xl text-blue-600 dark:text-blue-400 font-medium mb-3">
        Software Engineer · Backend Developer
    </p>
    <p class="text-gray-500 dark:text-gray-400 mb-8">
        Caracas, Venezuela
    </p>
    <div class="flex flex-wrap justify-center gap-4">
        <a href="#contact" class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-medium transition-colors shadow-lg shadow-blue-600/20">
            Contactarme
        </a>
        <a href="{{ route('cv.download') }}" class="px-6 py-3 border border-gray-300 dark:border-gray-700 hover:border-blue-500 dark:hover:border-blue-500 rounded-lg font-medium transition-colors">
            Descargar CV
        </a>
    </div>
</div>
