{{--
  Empresa: CETAM
  Proyecto: ST
  Archivo: sidenav.blade.php
  Fecha de creación: 02/11/25
  Modificado: 03/11/25
  Realizado por: Alfonso Angel García Hernández
  Validado por: Alfonso Angel García Hernández
--}}

@php
    $userRole = auth()->user()->role ?? 'basic';
@endphp

@if($userRole === 'admin' || $userRole === 'secretary')
    @include('layouts.sidenav-admin')
@elseif($userRole === 'worker')
    @include('layouts.sidenav-worker')
@else
    @include('layouts.sidenav-basic')
@endif
