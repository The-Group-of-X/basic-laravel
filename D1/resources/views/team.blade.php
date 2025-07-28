@extends('layouts.app')

@section('title', 'Our Teams')

@section('content')
    <!-- Header -->
    <header class="bg-blue-600 text-white">
        <div class="container mx-auto px-4 py-12 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Meet Our Team</h1>
            <p class="text-xl">A group of passionate individuals working together to achieve greatness</p>
        </div>
    </header>

    <!-- Team Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Team Member 1 -->
                <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                    <img src="https://placehold.co/400x400" alt="Team Member"
                        class="w-32 h-32 rounded-full mx-auto mb-4 object-cover">
                    <h3 class="text-xl font-semibold">John Doe</h3>
                    <p class="text-gray-600">Lead Developer</p>
                    <p class="text-gray-500 mt-2">John is a skilled developer with over 10 years of experience in
                        building robust web applications.</p>
                </div>
                <!-- Team Member 2 -->
                <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                    <img src="https://placehold.co/400x400" alt="Team Member"
                        class="w-32 h-32 rounded-full mx-auto mb-4 object-cover">
                    <h3 class="text-xl font-semibold">Jane Smith</h3>
                    <p class="text-gray-600">UI/UX Designer</p>
                    <p class="text-gray-500 mt-2">Jane crafts intuitive and beautiful designs to enhance user
                        experiences.</p>
                </div>
                <!-- Team Member 3 -->
                <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                    <img src="https://placehold.co/400x400" alt="Team Member"
                        class="w-32 h-32 rounded-full mx-auto mb-4 object-cover">
                    <h3 class="text-xl font-semibold">Alex Johnson</h3>
                    <p class="text-gray-600">Project Manager</p>
                    <p class="text-gray-500 mt-2">Alex ensures projects are delivered on time and exceed client
                        expectations.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; {{ date('Y') }} Your Company. All rights reserved.</p>
        </div>
    </footer>
@endsection
