<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts - {{ config('app.name', 'Laravel') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] min-h-screen p-6 lg:p-8">
        <div class="max-w-6xl mx-auto">
            <h1 class="text-3xl font-bold mb-6">Posts</h1>

            @if($posts->isEmpty())
                <div class="bg-white dark:bg-[#161615] p-6 rounded-lg shadow-sm border border-[#e3e3e0] dark:border-[#3E3E3A]">
                    <p class="text-[#706f6c] dark:text-[#A1A09A]">No posts found in the database.</p>
                </div>
            @else
                <div class="bg-white dark:bg-[#161615] rounded-lg shadow-sm border border-[#e3e3e0] dark:border-[#3E3E3A] overflow-hidden">
                    <table class="w-full border-collapse">
                        <thead class="bg-[#f5f5f3] dark:bg-[#1f1f1d]">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-[#706f6c] dark:text-[#A1A09A] uppercase tracking-wider border border-[#e3e3e0] dark:border-[#3E3E3A]">ID</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-[#706f6c] dark:text-[#A1A09A] uppercase tracking-wider border border-[#e3e3e0] dark:border-[#3E3E3A]">Title</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-[#706f6c] dark:text-[#A1A09A] uppercase tracking-wider border border-[#e3e3e0] dark:border-[#3E3E3A]">Text</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-[#706f6c] dark:text-[#A1A09A] uppercase tracking-wider border border-[#e3e3e0] dark:border-[#3E3E3A]">Category ID</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-[#706f6c] dark:text-[#A1A09A] uppercase tracking-wider border border-[#e3e3e0] dark:border-[#3E3E3A]">Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                                <tr class="hover:bg-[#fafafa] dark:hover:bg-[#1a1a18]">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-[#1b1b18] dark:text-[#EDEDEC] border border-[#e3e3e0] dark:border-[#3E3E3A]">{{ $post->id }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-[#1b1b18] dark:text-[#EDEDEC] border border-[#e3e3e0] dark:border-[#3E3E3A]">{{ $post->title }}</td>
                                    <td class="px-6 py-4 text-sm text-[#1b1b18] dark:text-[#EDEDEC] border border-[#e3e3e0] dark:border-[#3E3E3A]">{{ $post->text }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-[#1b1b18] dark:text-[#EDEDEC] border border-[#e3e3e0] dark:border-[#3E3E3A]">{{ $post->category_id }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-[#1b1b18] dark:text-[#EDEDEC] border border-[#e3e3e0] dark:border-[#3E3E3A]">{{ $post->created_at->format('Y-m-d H:i:s') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </body>
</html>

