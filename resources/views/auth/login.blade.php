@extends('auth.layout')

@section('title', 'Login')
@section('heading', 'Welcome Back')
@section('subheading', 'Sign in to your account to continue')
@section('form-title', 'Login')

@section('content')
<form method="POST" action="{{ route('login') }}" class="space-y-6">
    @csrf

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
               autofocus 
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
               autocomplete="current-password"
               class="appearance-none relative block w-full px-4 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 focus:z-10 sm:text-sm transition-colors duration-200 @error('password') border-red-500 @enderror"
               placeholder="Enter your password">
        @error('password')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Remember Me -->
    <div class="flex items-center justify-between">
        <div class="flex items-center">
            <input id="remember_me" 
                   type="checkbox" 
                   name="remember" 
                   class="h-4 w-4 text-red-600 focus:ring-red-500 border-gray-300 rounded">
            <label for="remember_me" class="ml-2 block text-sm text-gray-700">
                Remember me
            </label>
        </div>

        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="text-sm font-medium text-red-600 hover:text-red-700 transition-colors duration-200">
                Forgot password?
            </a>
        @endif
    </div>

    <!-- Submit Button -->
    <div>
        <button type="submit" class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-bold rounded-lg text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                <svg class="h-5 w-5 text-red-300 group-hover:text-red-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                </svg>
            </span>
            Sign In
        </button>
    </div>
</form>
@endsection

@section('footer-links')
<p class="text-sm text-gray-600">
    Don't have an account?
    <a href="{{ route('register') }}" class="font-semibold text-red-600 hover:text-red-700 transition-colors duration-200">
        Register here
    </a>
</p>
@endsection


