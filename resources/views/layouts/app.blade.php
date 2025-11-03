 
{{-- 
    Empresa: CETAM
    Proyecto: ST
    Archivo: app.blade.php
    Fecha de creación: 02/11/25
    Realizado por: Alfonso Angel García Hernández
    Validado por: Alfonso Angel García Hernández
--}}
@extends('layouts.base')

@section('content')
    @php($routeName = request()->route()?->getName())
    @php($prefix = config('proj.route_name_prefix', 'proj'))
    @php($isAppShell = in_array($routeName, [
        // Rutas app principales con navegación completa
        $prefix . '.dashboard.index', $prefix . '.profile.index', $prefix . '.profile.example', $prefix . '.users.index',
        $prefix . '.ui.bootstrap-tables', $prefix . '.billing.transactions', $prefix . '.ui.buttons', $prefix . '.ui.forms',
        $prefix . '.ui.modals', $prefix . '.ui.notifications', $prefix . '.ui.typography', $prefix . '.marketing.upgrade-to-pro',
    ]))
    @php($isAuthShell = in_array($routeName, [
        // Rutas de autenticación/landing
        $prefix . '.auth.register', $prefix . '.examples.register', $prefix . '.auth.login', $prefix . '.examples.login',
        $prefix . '.auth.forgot-password', $prefix . '.examples.forgot-password', $prefix . '.auth.reset-password', $prefix . '.examples.reset-password',
    ]))
    @php($isMinimalShell = in_array($routeName, [
        // Páginas minimalistas
        $prefix . '.errors.404', $prefix . '.errors.500', $prefix . '.auth.lock',
    ]))

    @if($isAppShell)
        {{-- Nav --}}
        @include('layouts.nav')
        {{-- SideNav --}}
        @include('layouts.sidenav')
        <main class="content">
            {{-- TopBar --}}
            @include('layouts.topbar')
            @hasSection('page')
                @yield('page')
            @else
                {{ $slot ?? '' }}
            @endif
            {{-- Footer --}}
            @include('layouts.footer')
        </main>
    @elseif($isAuthShell)
        @hasSection('page')
            @yield('page')
        @else
            {{ $slot ?? '' }}
        @endif
        {{-- Footer alternativo --}}
        @include('layouts.footer2')
    @elseif($isMinimalShell)
        @hasSection('page')
            @yield('page')
        @else
            {{ $slot ?? '' }}
        @endif
    @else
        {{-- Fallback: contenido plano --}}
        @hasSection('page')
            @yield('page')
        @else
            {{ $slot ?? '' }}
        @endif
    @endif
@endsection