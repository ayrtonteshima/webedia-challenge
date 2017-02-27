<?php

namespace Webedia\Repositories;

use App\Models\Post;
use Webedia\Repositories\Contracts\PostInterface;

class PostRepository implements PostInterface {
  public function getAll()
  {
    return Post::all();
  }

  public function save($post)
  {
    return Post::create($post);
  }

  public function update($id, $data) 
  {
    return Post::where('id', $id)->update($data);
  }

  public function find($id)
  {
    return Post::find($id);
  }

  public function delete($id)
  {
    return Post::find($id)->delete();
  }
}