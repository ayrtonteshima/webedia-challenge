<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Webedia\Repositories\Contracts\PostInterface;
use Validator;

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

        $validator = Validator::make($postData, [
            'title' => 'required|min:3',
            'subtitle' => 'required|min:3',
            'description' => 'required|min:10',
            'text' => 'required|min:10',
            'image' => 'required|min:10'
        ]);

        if ($validator->fails()) {
            $messagesError = $validator->errors()->all();
            return $this->returnAPIJson('Bad request.', $messagesError, 400);          
        }

        $this->post->save($postData);

        return $this->returnAPIJson('Post stored successfully.', $postData);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    private function returnAPIJson($message, $result, $statusCode = 200)
    {
      $data = array(
          'statusCode'  => $statusCode,
          'message'     => $message,
          'data'        => $result
      );
      return response()->json($data);
    }
}
