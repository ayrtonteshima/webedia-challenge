<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Webedia\Repositories\Contracts\UserInterface;

class LoginController extends Controller
{
    private $user;

    use AuthenticatesUsers;

    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserInterface $user)
    {
        $this->user = $user;
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function login()
    {
        return view('admin.login');
    }

    public function redirectToProvider()
    {
        return \Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        $userSocial = \Socialite::driver('google')->user();

        $userDB = $this->user->create(array(
            'name' => $userSocial->getName(),
            'email' => $userSocial->getEmail(),
            'password' => null
        ));

        \Auth::login($userDB);
        
        return redirect()->route('admin.index');
    }
}
