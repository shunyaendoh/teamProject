<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Profile;

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
    public function __construct()
    {
        $this->middleware('guest');
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
            'name' => 'required|string|max:255',
            'nickname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'job_id' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // dd($data);
        $newUser = User::create([
            'name' => $data['name'],
            'nickname' => $data['nickname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'job_id' => $data['job_id'],
        ]);

        // dd($newUser->id);

        Profile::create([
            'user_id' => $newUser->id,
            'nickname' => $data['nickname'],
            'age' => 0,
            'job' => '',
            'locate' => '',
            'comment' => '',
            'gender' => 0,
            'picture_path' => '',
        ]);

        return $newUser;

        // return [
        //     User::create([
        //         'name' => $data['name'],
        //         'nickname' => $data['nickname'],
        //         'email' => $data['email'],
        //         'password' => Hash::make($data['password']),
        //         'job_id' => $data['job_id'],
        //     ]),
        //     Profile::create([
        //         'nickname' => $data['nickname'],
        //         'age' => 0,
        //         'job' => '',
        //         'locate' => '',
        //         'comment' => '',
        //         'gender' => 0,
        //     ])
        // ];
    }
}
