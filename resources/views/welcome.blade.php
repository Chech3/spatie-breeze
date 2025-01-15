
@extends('layouts.home.app')

@section('title', 'Página de Inicio')

@section('content')
    @if (Route::has('login'))
    <nav class="flex flex-1 justify-center items-center h-screen">
        @auth
            <div class="flex text-md justify-center items-center">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="text-black" href="route('logout')"
                        onclick="event.preventDefault();
                                                        this.closest('form').submit();"
                        class="text-white ring-transparent ">
                        {{ __('Log Out') }}
                    </a>
                </form>
                <a href="{{ url('/dashboard') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]  dark:focus-visible:ring-white">
                    Dashboard
                </a>
            </div>
        @else
            <a href="{{ route('login') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:focus-visible:ring-white">
                Log in
            </a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:focus-visible:ring-white">
                    Register
                </a>
            @endif
        @endauth
    </nav>
@endif

@endsection


