<div class="max-w-2xl mx-auto">
    <h2 class="text-3xl font-bold mb-4 text-center">Contacto</h2>
    <p class="text-gray-500 dark:text-gray-400 text-center mb-10">
        ¿Tienes un proyecto en mente? Hablemos.
    </p>

    @if(session('success'))
        <div class="mb-8 p-4 bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 rounded-lg text-green-700 dark:text-green-400 text-sm text-center">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid sm:grid-cols-2 gap-8 mb-10">
        <div class="flex items-center gap-3 text-sm text-gray-600 dark:text-gray-300">
            <svg class="w-5 h-5 text-blue-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            <a href="mailto:engelbertrodriguez21@gmail.com" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">engelbertrodriguez21@gmail.com</a>
        </div>
        <div class="flex items-center gap-3 text-sm text-gray-600 dark:text-gray-300">
            <svg class="w-5 h-5 text-blue-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
            </svg>
            <span>0412-8067686</span>
        </div>
    </div>

    <form method="POST" action="{{ route('contact') }}" class="space-y-6">
        @csrf
        <div class="grid sm:grid-cols-2 gap-6">
            <div>
                <label for="name" class="block text-sm font-medium mb-2">Nombre</label>
                <input type="text" name="name" id="name" required
                    value="{{ old('name') }}"
                    class="w-full px-4 py-2.5 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all text-sm @error('name') border-red-500 @enderror"
                    placeholder="Tu nombre">
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="email" class="block text-sm font-medium mb-2">Email</label>
                <input type="email" name="email" id="email" required
                    value="{{ old('email') }}"
                    class="w-full px-4 py-2.5 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all text-sm @error('email') border-red-500 @enderror"
                    placeholder="tu@email.com">
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div>
            <label for="message" class="block text-sm font-medium mb-2">Mensaje</label>
            <textarea name="message" id="message" rows="5" required
                class="w-full px-4 py-2.5 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all text-sm @error('message') border-red-500 @enderror"
                placeholder="Cuéntame de tu proyecto...">{{ old('message') }}</textarea>
            @error('message')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="w-full sm:w-auto px-8 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-medium transition-colors shadow-lg shadow-blue-600/20 text-sm">
            Enviar mensaje
        </button>
    </form>
</div>
