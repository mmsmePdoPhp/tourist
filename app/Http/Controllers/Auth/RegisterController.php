<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Location;
use App\Providers\RouteServiceProvider;
use App\Role;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
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
        //if isseted roleId
        if($request['roleId'] == 3){

            return $this->wholesalerValidation();

        }elseif($request['roleId'] == 2){

            return $this->retailValidation();

        }else{
            dd('hi choni someyieh gyan');
            return request()->validate(['roleId'=>'required']);

        }



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

            // dd($data['state_id'] .'**'.  $data['city_id']);

            //get location id by state_id and city_id
            $cityId = DB::select('SELECT id FROM tourist.locations where state=(SELECT state FROM tourist.locations where id=:stateId ) And id=:cityId;',
            [   'stateId' => $data['state_id'] ,
                'cityId' => $data['city_id'] ,
            ]);


            if(count($cityId) <=0){
                DB::rollBack();
                session()->flash('error','user does not updated  not equal!');
                return back()->withInput();
            }else{
                if($cityId[0]->id == $data['city_id']){
                    //go next part
                }else{
                    DB::rollBack();
                    session()->flash('error','user does not updated  not equal!');
                    return back()->withInput();
                }
            }

            // if iformation was saved
            $nationalCard = Storage::put('nationalCard', $data['nationalCardImage']);
            $contractImage = Storage::put('contract', $data['contractImage']);

            $user = User::create([
                'fname' => $data['fname'],
                'lname' => $data['lname'],
                'location_id' => $cityId[0]->id,
                'address' => $data['address'],
                'postCode' => $data['postCode'],
                'fixednumber' => $data['FixedNumber'],
                'phone' => $data['phone'],
                'companyName' => $data['companyName'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'nationalCard' => $nationalCard,
                'contractImage' => $contractImage,

            ]);

            if($user->email == $data['email']){
                //attach or sync values
                $user->roles()->attach([$data['roleId']]);


                DB::commit();

            }else{
                DB::rollback();
                session()->flash('error','user does not updated  not equal!');
                return back()->withInput();
            }

            // all good
        } catch (\Exception $e) {
            DB::rollback();
            dd($e);
            // something went wrong
            session()->flash('error','user does not updated  not equal!');
            return back()->withInput();
        }




        return $user;
    }

    /**
     * validation for user type retail
     */
    private function retailValidation(){
        return request()->validate([
            'fname' => 'bail|required|string|max:45|min:3',
            'lname' => 'bail|required|string|max:45|min:3',

            'state_id' => 'bail|required|numeric',
            'city_id' => 'bail|required|numeric',

            'city' => 'bail|required|string|max:80|min:3',
            'state' => 'bail|required|string|max:80|min:3',

            'address' => 'bail|required|string|max:80|min:10',
            'postCode' => 'bail|required|string|max:20|min:10',
            'email' => 'bail|required|string|email|max:255|unique:users,email',
            'FixedNumber' => 'bail|required|string|max:15|min:11',
            'phone' => 'bail|required|string|max:15|min:11',
            'password' => 'bail|required|string|min:8|confirmed',
            'roleID' => 'bail|required|array',
            'nationalCardImage' => 'bail|required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'contractImage' => 'bail|required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
    }


    /**
     * validation for user type wholesaler
     */
    private function wholesalerValidation(){
        return request()->validate([
            'fname' => 'bail|required|string|max:45|min:3',
            'lname' => 'bail|required|string|max:45|min:3',

            'state_id' => 'bail|required|numeric',
            'city_id' => 'bail|required|numeric',
            'city' => 'bail|required|string|max:80|min:3',
            'state' => 'bail|required|string|max:80|min:3',

            'address' => 'bail|required|string|max:80|min:10',
            'postCode' => 'bail|required|string|max:20|min:10',
            'email' => 'bail|required|string|email|max:255',
            'FixedNumber' => 'bail|required|string|max:15|min:11',
            'phone' => 'bail|required|string|max:15|min:11',
            'password' => 'bail|required|string|min:8|confirmed',
            'roleId' => 'bail|required|integer',
            'companyName' =>'bail|required|string|max:45|min:5',
            'nationalCardImage' => 'bail|required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'contractImage' => 'bail|required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
    }
}
