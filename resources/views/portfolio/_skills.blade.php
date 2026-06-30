<div class="max-w-4xl mx-auto">
    <h2 class="text-3xl font-bold mb-12 text-center">Stack Tecnológico</h2>

    @php
        $skillGroups = [
            'Lenguajes' => ['Python', 'PHP', 'JavaScript', 'Java'],
            'Frameworks' => ['Laravel', 'Django', 'Odoo ERP'],
            'Bases de Datos' => ['PostgreSQL', 'MySQL', 'SQLite', 'Diseño Relacional'],
            'Arquitectura & Tools' => ['APIs REST', 'Webhooks', 'n8n', 'Git', 'Semgrep/SAST'],
        ];
    @endphp

    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach($skillGroups as $group => $skills)
            <div class="bg-white dark:bg-gray-900/80 rounded-xl p-6 border border-gray-200 dark:border-gray-800 shadow-sm">
                <h3 class="text-sm font-semibold text-blue-600 dark:text-blue-400 uppercase tracking-wider mb-4">{{ $group }}</h3>
                <ul class="space-y-2">
                    @foreach($skills as $skill)
                        <li class="flex items-center gap-2 text-sm text-gray-700 dark:text-gray-300">
                            <svg class="w-4 h-4 text-blue-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            {{ $skill }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>
</div>
