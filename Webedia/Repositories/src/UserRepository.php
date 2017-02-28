<?php

namespace Webedia\Repositories;

use App\Models\User;
use Webedia\Repositories\Contracts\UserInterface;

class UserRepository implements UserInterface {
  public function create($data)
  {
    return User::firstOrCreate($data);
  }
}