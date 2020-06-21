<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Role;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware(['isAdmin']);
        // $this->authorize('viewAny', Auth::user());
        // $this->authorize('create', Auth::user());
        // $this->authorize('view', Auth::user());
        // $this->authorize('update', Auth::user());
        // $this->authorize('delete', Auth::user());
        // $this->authorize('restore', Auth::user());
        // $this->authorize('forceDelete', Auth::user());
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator($request)
    {
        return request()->validate([
            'fname' => 'bail|required|string|max:255',
            'lname' => 'bail|required|string|max:255',
            'state' => 'bail|required|string|max:255',
            'city' => 'bail|required|string|max:255',
            'address' => 'bail|required|string|max:255',
            'postCode' => 'bail|required|string|max:255',
            'email' => 'bail|required|string|email|max:255',
            'fixedPhone' => 'bail|required|string|max:255',
            'phone' => 'bail|required|string|max:255',
            'password' => 'bail|required|string|min:8|confirmed',
            'roles' => 'bail|required|array',
            'companyName' =>'bail|required|string|255',
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

        DB::beginTransaction();
        try {
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
            if($user->email == $data['email']){
                //attach or sync values
                $user->roles()->attach($data['roles']);

                DB::commit();

            }else{
                DB::rollback();
                session()->flash('error','user does not updated  not equal!');
                return back()->withInput();
            }

            // all good
        } catch (\Exception $e) {
            DB::rollback();
            // something went wrong
            session()->flash('error','user does not updated  not equal!');
            return back()->withInput();
        }




        return $user;
    }
}
