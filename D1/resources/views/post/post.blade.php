<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Facebook Post UI</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 py-10">
    <div class="max-w-xl mx-auto space-y-6">

        <!-- Post Card -->
        @foreach ($facebookPosts as $post)
            <div class="bg-white rounded-xl shadow p-5">
                <div class="flex items-center space-x-4">
                    <div
                        class="w-10 h-10 bg-blue-500 text-white flex items-center justify-center rounded-full font-bold">
                        {{ $post['author'][0] }}
                    </div>
                    <div>
                        <p class="font-semibold">{{ $post['author'] }}</p>
                        <p class="text-sm text-gray-500">{{ $post['timestamp'] }}</p>
                    </div>
                </div>
                <div class="mt-4 text-gray-800">
                    {{ $post['content'] }}
                </div>
                <div class="mt-4 flex justify-between text-sm text-gray-600">
                    <span>👍 {{ $post['likes'] }} Likes</span>
                    <span>💬 {{ count($post['comments']) }} Comments</span>
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>
