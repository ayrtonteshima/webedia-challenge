<?php

use Illuminate\Http\Request;

Route::resource('posts', 'PostController', [
    'except' => ['show', 'create', 'edit']
]);
