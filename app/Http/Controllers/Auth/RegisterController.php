<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';

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
            'name' => 'required|string|max:30',
            'familyname' => 'required|string|max:30',
            'identitycode' => 'required|string|max:20',
            'gender' => 'required|string|max:10',
            'birthdate' => 'required|string|max:50',
            'grade' => 'required|string|max:30',
            'university' => 'required|string|max:30',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:100',
            'email' => 'required|string|email|max:50|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'englishname' => 'required|string|max:30',
            'englishfamilyname' => 'required|string|max:30',

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
        return User::create([
            'name' => $data['name'],
            'familyname' => $data['familyname'],
            'englishname' => $data['englishname'],
            'englishfamilyname' => $data['englishfamilyname'],
            'identitycode' => $data['identitycode'],
            'gender' => $data['gender'],
            'birthdate' => $data['birthdate'],
            'grade' => $data['grade'],
            'university' => $data['university'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            
        ]);
    }
}
