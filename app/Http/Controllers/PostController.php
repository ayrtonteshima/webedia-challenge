<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Webedia\Repositories\Contracts\PostInterface;

class PostController extends Controller
{
    private $post;

    public function __construct(PostInterface $post)
    {
        $this->post = $post;
    }

    public function index()
    {
        $message = 'Posts returned successfully.';
        return $this->returnAPIJson($message, $this->post->getAll());
    }

    public function store(Request $request)
    {
        $postData = $request->all();
        $this->post->save($postData);

        return $this->returnAPIJson('Post stored successfully.', array());
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    private function returnAPIJson($message, $result)
    {
      $data = array(
          'statusCode'  => 200,
          'message'     => $message,
          'data'        => $result
      );
      return response()->json($data);
    }
}
