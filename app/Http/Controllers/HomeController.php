<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Webedia\Repositories\Contracts\PostInterface;

class HomeController extends Controller
{
    private $post;

    public function __construct(PostInterface $post)
    {
      $this->post = $post;
    }
    public function index()
    {
      $posts = $this->post->getAll();
      return view('index', compact('posts'));
    }
}
