<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index']);

Route::get('posts/{index}', [PostController::class, 'show']);

Route::get('test', function () {
    Post::create([
        'title' => 'My First Post',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam modi cupiditate consectetur voluptate laudantium, amet recusandae atque necessitatibus quam repellendus consequatur autem, doloribus in nesciunt sint sed ut odit eligendi.'
    ]);

    return 'data berhasil ditambahkan!';
});
