<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Webedia\Repositories\Contracts\PostInterface;

class AdminController extends Controller
{
    private $post;

    public function __construct(PostInterface $post)
    {
        $this->post = $post;
    }
    public function index()
    {
      $posts = $this->post->getAll();
      return view('admin.index', compact('posts'));
    }
}
