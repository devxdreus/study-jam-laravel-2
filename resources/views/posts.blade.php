<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Blogs</title>

    @vite('resources/css/app.css')
</head>

<body>
    <div class="max-w-screen-md mx-auto pt-8">
        <h1 class="text-4xl font-bold mb-8">Welcome to My Blog</h1>

        @foreach ($posts as $index => $post)
            <div class="mb-8">
                <a href="/posts/{{ $index }}" class="text-3xl font-bold">{{ $post['title'] }}</a>
                <p>{{ $post['body'] }}</p>
            </div>
        @endforeach
    </div>
</body>

</html>
