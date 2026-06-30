# Engelbert Rodríguez — Portfolio

[![Laravel](https://img.shields.io/badge/Laravel-13-FF2D20?logo=laravel)](https://laravel.com)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind-4-06B6D4?logo=tailwindcss)](https://tailwindcss.com)
[![Docker](https://img.shields.io/badge/Docker-✓-2496ED?logo=docker)](https://docker.com)

Personal portfolio website built with Laravel 13 + Tailwind CSS v4, containerized with Docker.

## Stack

- **Backend**: Laravel 13 (PHP 8.4)
- **Frontend**: Tailwind CSS v4, Blade, Vite
- **Database**: SQLite
- **Infrastructure**: Docker (multi-stage, nginx + php-fpm, supervisor)

## Quick Start

```bash
cp .env.example .env
docker compose up -d --build
```

The site will be available at `http://localhost:8080`.

### First-time setup

The container runs migrations automatically on startup. No manual steps required.

## Features

- Dark/light theme with system preference detection
- Contact form with validation and SQLite persistence
- CV download endpoint
- Fully responsive

## License

MIT
