@extends('layouts.app')


@section('title', 'Welcome')


@section('content')
    <header class="bg-blue-600 text-white h-screen flex items-center justify-center">
        <div class="container mx-auto px-4 py-16 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Welcome to My Personal Website</h1>
            <p class="text-xl mb-8">I'm a passionate individual creating awesome things</p>
            <div class="flex flex-row gap-4 items-center justify-center">
                <a href="{{ route('team') }}"
                    class="bg-white text-red-600 px-6 py-3 rounded-full font-semibold hover:bg-red-100 transition duration-300">Team</a>
                <a href="/contact"
                    class="bg-white text-green-600 px-6 py-3 rounded-full font-semibold hover:bg-green-100 transition duration-300">Contact
                    Us</a>
                <a href="/about-us"
                    class="bg-white text-blue-600 px-6 py-3 rounded-full font-semibold hover:bg-blue-100 transition duration-300">About
                    Us</a>
            </div>
        </div>
    </header>
@endsection
