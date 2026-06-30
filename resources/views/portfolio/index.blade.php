@extends('layouts.app')

@section('title', 'Engelbert Rodríguez | Software Engineer')

@section('content')
<section id="hero" class="min-h-screen flex items-center justify-center px-4 pt-16">
    @include('portfolio._hero')
</section>

<section id="about" class="py-20 px-4">
    @include('portfolio._about')
</section>

<section id="experience" class="py-20 px-4 bg-gray-50 dark:bg-gray-900/50">
    @include('portfolio._experience')
</section>

<section id="skills" class="py-20 px-4">
    @include('portfolio._skills')
</section>

<section id="projects" class="py-20 px-4 bg-gray-50 dark:bg-gray-900/50">
    @include('portfolio._projects')
</section>

<section id="contact" class="py-20 px-4">
    @include('portfolio._contact')
</section>
@endsection
