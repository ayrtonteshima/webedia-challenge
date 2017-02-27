<?php

namespace Webedia\Repositories\Contracts;

interface PostInterface {
  public function getAll();
  public function save($post);
  public function update($id, $data);
  public function find($id);
  public function delete($id);
}