@extends('auth.layout')

@section('title', 'Register')
@section('heading', 'Create Account')
@section('subheading', 'Sign up to get started with the Mini Academic Portal')
@section('form-title', 'Registration')

@section('content')
<form method="POST" action="{{ route('register') }}" class="space-y-6">
    @csrf

    <!-- Name -->
    <div>
        <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-2 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
                Full Name
            </div>
        </label>
        <input id="name" 
               type="text" 
               name="name" 
               value="{{ old('name') }}" 
               required 
               autofocus 
               autocomplete="name"
               class="appearance-none relative block w-full px-4 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 focus:z-10 sm:text-sm transition-colors duration-200 @error('name') border-red-500 @enderror"
               placeholder="Enter your full name">
        @error('name')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Email Address -->
    <div>
        <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-2 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                Email Address
            </div>
        </label>
        <input id="email" 
               type="email" 
               name="email" 
               value="{{ old('email') }}" 
               required 
               autocomplete="username"
               class="appearance-none relative block w-full px-4 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 focus:z-10 sm:text-sm transition-colors duration-200 @error('email') border-red-500 @enderror"
               placeholder="Enter your email">
        @error('email')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Password -->
    <div>
        <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-2 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                </svg>
                Password
            </div>
        </label>
        <input id="password" 
               type="password" 
               name="password" 
               required 
               autocomplete="new-password"
               class="appearance-none relative block w-full px-4 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 focus:z-10 sm:text-sm transition-colors duration-200 @error('password') border-red-500 @enderror"
               placeholder="Create a password">
        @error('password')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Confirm Password -->
    <div>
        <label for="password_confirmation" class="block text-sm font-semibold text-gray-700 mb-2">
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-2 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                </svg>
                Confirm Password
            </div>
        </label>
        <input id="password_confirmation" 
               type="password" 
               name="password_confirmation" 
               required 
               autocomplete="new-password"
               class="appearance-none relative block w-full px-4 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 focus:z-10 sm:text-sm transition-colors duration-200"
               placeholder="Confirm your password">
    </div>

    <!-- Submit Button -->
    <div>
        <button type="submit" class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-bold rounded-lg text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                <svg class="h-5 w-5 text-red-300 group-hover:text-red-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                </svg>
            </span>
            Create Account
        </button>
    </div>
</form>
@endsection

@section('footer-links')
<p class="text-sm text-gray-600">
    Already have an account?
    <a href="{{ route('login') }}" class="font-semibold text-red-600 hover:text-red-700 transition-colors duration-200">
        Sign in here
    </a>
</p>
@endsection


