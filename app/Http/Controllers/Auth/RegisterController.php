<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $method = $request->method();

        if ($request->isMethod('post')) {
            $this->middleware('guest');
        }

        if ($request->isMethod('get')) {
            $url   = $request->fullUrl();
            $query = explode('&', parse_url($url, PHP_URL_QUERY));

            if ($query[0] != "") {
                $token = explode('=', $query[0]);

                $tokenUser = 'wedding2019%24Olive%25Mari';//TokenRegister::find($id[1]);

                if ($tokenUser === null) {
                    $this->middleware('auth');

                    return redirect('/');
                }

                if ($token[1] === $tokenUser) {
                    $this->middleware('guest');
                } else {
                    $this->middleware('auth');

                    return redirect('/');
                }
            } else {
                $this->middleware('auth');

                return redirect('/');
            }
        }
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make(
            $data,
            [
                'name'     => 'required|string|max:255',
                'email'    => 'required|string|email|max:255|unique:users_wedding',
                'password' => 'required|string|min:6|confirmed',
            ]
        );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create(
            [
                'name'     => $data['name'],
                'email'    => $data['email'],
                'password' => bcrypt($data['password']),
            ]
        );
    }
}
