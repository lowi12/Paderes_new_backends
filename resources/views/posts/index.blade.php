<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts - {{ config('app.name', 'Laravel') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] min-h-screen p-6 lg:p-8">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl font-bold mb-6">Posts</h1>

            @if($posts->isEmpty())
                <div class="bg-white dark:bg-[#161615] p-6 rounded-lg shadow-sm border border-[#e3e3e0] dark:border-[#3E3E3A]">
                    <p class="text-[#706f6c] dark:text-[#A1A09A]">No posts found in the database.</p>
                </div>
            @else
                <div class="space-y-4">
                    @foreach($posts as $post)
                        <div class="bg-white dark:bg-[#161615] p-6 rounded-lg shadow-sm border border-[#e3e3e0] dark:border-[#3E3E3A]">
                            <h2 class="text-xl font-semibold mb-2">{{ $post->title }}</h2>
                            <p class="text-[#706f6c] dark:text-[#A1A09A] mb-3">{{ $post->text }}</p>
                            <div class="flex items-center gap-4 text-sm">
                                @if($post->category)
                                    <span class="inline-block px-3 py-1 bg-[#1b1b18] dark:bg-[#3E3E3A] text-white dark:text-[#EDEDEC] rounded-sm">
                                        Category #{{ $post->category->id }}
                                    </span>
                                @endif
                                <span class="text-[#706f6c] dark:text-[#A1A09A]">
                                    {{ $post->created_at->format('M d, Y') }}
                                </span>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </body>
</html>

