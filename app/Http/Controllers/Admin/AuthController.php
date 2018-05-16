<?php

namespace App\Http\Controllers\Admin;

use App\Admin_users;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
   /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $guard = 'admin';
    protected $loginView = 'back-end.auth.login';
    protected $registerView = 'back-end.auth.register';
    protected $passwordView = 'back-end.auth.password.email';
    protected $emailView = 'back-end.auth.login';
    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin/home';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:admin_users',
            'password' => 'required|min:6|confirmed',
        ],

        [
            'name.required' => 'Enter your name',
            'name.max' => 'Maximum is 255 character',
            'email.required' => 'Enter your email',
            'email.email' => 'Email is not valid',
            'email.max' => 'Maximum is 255 character',
            'email.unique' => 'Email is already in used',
            'password.required' => 'Enter your password',
            'password.min' => 'Password is at least 6 character',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return Admin_users::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'level' => '1',
        ]);
    }   
    public function email($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    } 
}
