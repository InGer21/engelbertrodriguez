<div class="max-w-4xl mx-auto">
    <h2 class="text-3xl font-bold mb-12 text-center">Experiencia</h2>

    <div class="relative">
        <div class="absolute left-4 md:left-1/2 top-0 bottom-0 w-0.5 bg-gray-200 dark:bg-gray-700 transform md:-translate-x-0.5"></div>

        @php
            $experiences = [
                [
                    'title' => 'Backend Developer',
                    'company' => 'Instituto Aeropuerto Internacional de Maiquetía',
                    'location' => 'Maiquetía',
                    'period' => '2026',
                    'items' => [
                        'Migré un sistema legacy PHP a Laravel 12 con arquitectura modular de dos bases de datos PostgreSQL independientes.',
                        'Implementé un sistema de autenticación multi-DB con hasher MD5 personalizado para preservar credenciales existentes.',
                        'Desarrollé un módulo completo de gestión de servicios protocolares para pasajeros VIP (CRUD, pasajeros, cambios de estado, logs de auditoría).',
                        'Implementé un sistema de administración multi-entidad con soft-delete, validación cross-database y buenas prácticas de seguridad.',
                        'Configuré integración continua (PHPStan nivel 6, Pint PSR-12, tests con Pest) y entornos de testing aislados.',
                    ],
                ],
                [
                    'title' => 'Backend Developer / System Integrations',
                    'company' => 'Markdebrand Worldwide',
                    'period' => '2025 - 2026',
                    'items' => [
                        'Desarrollo y refactorización de lógica de negocio sobre módulos empresariales complejos en ecosistema Odoo (Python).',
                        'Diseño y ejecución de migraciones críticas de pasarelas de mensajería (Twilio API), implementando validaciones de seguridad criptográfica y manejo de webhooks.',
                        'Orquestación de flujos de automatización operacional mediante arquitecturas en n8n, entrelazando aplicaciones internas y externas.',
                    ],
                ],
                [
                    'title' => 'Desarrollador Backend',
                    'company' => 'Universidad Marítima del Caribe',
                    'period' => '2022 - 2024',
                    'items' => [
                        'Desarrollo de Asistente AI e Integración de APIs (Python/Django): Diseño de un motor conversacional conectado a servicios externos de IA.',
                        'Implementación de un Sistema Multijugador Cliente-Servidor (Java) soportando concurrencia basada en Sockets TCP y WebSockets.',
                    ],
                ],
            ];
        @endphp

        @foreach($experiences as $i => $exp)
            <div class="relative mb-12 md:mb-16 {{ $i % 2 === 0 ? 'md:pr-12 md:text-right md:ml-auto md:w-1/2' : 'md:pl-12 md:ml-0 md:w-1/2' }}">
                <div class="absolute left-4 md:left-auto {{ $i % 2 === 0 ? 'md:right-0' : 'md:left-0' }} top-1 w-3 h-3 rounded-full bg-blue-600 dark:bg-blue-400 border-2 border-white dark:border-gray-950 shadow"></div>
                <div class="ml-10 md:ml-0 bg-white dark:bg-gray-900/80 rounded-xl p-6 border border-gray-200 dark:border-gray-800 shadow-sm">
                    <span class="text-sm text-blue-600 dark:text-blue-400 font-medium">{{ $exp['period'] }}</span>
                    <h3 class="text-lg font-bold mt-1">{{ $exp['title'] }}</h3>
                    <p class="text-gray-500 dark:text-gray-400 text-sm mb-3">{{ $exp['company'] }} @isset($exp['location'])· {{ $exp['location'] }} @endisset</p>
                    <ul class="space-y-2 {{ $i % 2 === 0 ? 'md:text-left' : '' }}">
                        @foreach($exp['items'] as $item)
                            <li class="text-sm text-gray-600 dark:text-gray-300 flex {{ $i % 2 === 0 ? '' : '' }} gap-2">
                                <span class="text-blue-500 mt-1 flex-shrink-0">•</span>
                                <span>{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
</div>
