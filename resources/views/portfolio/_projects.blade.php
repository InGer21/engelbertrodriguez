<div class="max-w-4xl mx-auto">
    <h2 class="text-3xl font-bold mb-12 text-center">Proyectos Destacados</h2>

    @php
        $projects = [
            [
                'title' => 'Sistema de Gestión Aeroportuaria',
                'tech' => 'Laravel 12, PostgreSQL, Pest PHP',
                'description' => 'Migración de sistema legacy a Laravel 12 con arquitectura modular multi-DB. Incluye autenticación con hasher MD5 personalizado, módulo VIP con CRUD completo y trazabilidad, y CI/CD con PHPStan nivel 6.',
            ],
            [
                'title' => 'Migración de Pasarela de Mensajería',
                'tech' => 'Odoo, Python, Twilio API, n8n',
                'description' => 'Migración crítica de Twilio API con validaciones de seguridad criptográfica y manejo de webhooks. Automatización de flujos operacionales mediante n8n conectando aplicaciones internas y externas.',
            ],
            [
                'title' => 'Asistente AI Universitario',
                'tech' => 'Python, Django, APIs de IA',
                'description' => 'Motor conversacional conectado a servicios externos de IA para el portal oficial de la Universidad Marítima del Caribe. Integración de APIs y diseño de experiencia conversacional.',
            ],
            [
                'title' => 'Sistema Multijugador Cliente-Servidor',
                'tech' => 'Java, Sockets TCP, WebSockets',
                'description' => 'Sistema multijugador con concurrencia basada en Sockets TCP y WebSockets. Arquitectura cliente-servidor en tiempo real con manejo de conexiones simultáneas.',
            ],
        ];
    @endphp

    <div class="grid sm:grid-cols-2 gap-6">
        @foreach($projects as $project)
            <div class="bg-white dark:bg-gray-900/80 rounded-xl p-6 border border-gray-200 dark:border-gray-800 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center gap-2 mb-3">
                    <span class="w-2 h-2 rounded-full bg-blue-500"></span>
                    <span class="text-xs text-blue-600 dark:text-blue-400 font-medium">{{ $project['tech'] }}</span>
                </div>
                <h3 class="text-lg font-bold mb-2">{{ $project['title'] }}</h3>
                <p class="text-sm text-gray-600 dark:text-gray-300 leading-relaxed">{{ $project['description'] }}</p>
            </div>
        @endforeach
    </div>
</div>
