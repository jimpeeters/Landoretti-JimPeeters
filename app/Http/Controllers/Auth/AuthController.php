<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Http\Controllers\Auth\Input;
use Auth;
use View;
use Illuminate\Http\Request;
use Hash;

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

    protected $redirectPath = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required|min:6',
            'country' => 'required|not_in:0',
            'address'         => 'required|max:255',
            'zipcode'         => 'required|max:255',
            'city'            => 'required|max:255',
            'number'          => 'required|max:255',
        ]);

        if ($validator->fails()) 
        {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput()
                        ->with('registerFail', ['fail']);
        }

        $input = $request->all();

        $user = new User();
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->city    = $input['city'];
        $user->address    = $input['address'];
        $user->zipcode    = $input['zipcode'];
        $user->number   = $input['number'];
        $user->password  = Hash::make($input['password']);

        $country = explode(',', $input['country']);
        $user->country     = $country[0];

        $user->save();

        Auth::login($user);

        return redirect('/')->with('success','Account successvol aangemaakt!');
    }

    public function login(request $request)
    {   
        $input = $request->all();

        if (Auth::attempt(['email' => $input['email'], 'password' => $input['password']]))
        {
            return redirect('/');
        }
        else
        {
            return redirect('/')->with('loginFail', ['fail']);
        }
    }

}
