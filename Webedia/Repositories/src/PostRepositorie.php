<?php

namespace Webedia\Repositories;

use Webedia\Repositories\Contracts\PostInterface;

class PostRepository implements PostInterface {
  public function getAll()
  {
    return 'all';
  };

  public function save($post)
  {
    return 'save';
  }

  public function update($id, $data) 
  {
    return 'update';
  }

  public function find($id)
  {
    return 'find';
  }

  public function delete($id)
  {
    return 'delete';
  }
}