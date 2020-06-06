<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\CssSelector\Node\FunctionNode;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id','desc')->paginate(9);
        return view('users.users',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $roles = Role::all();
        return view('users.show',compact('user','roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validatedData =  $request->validate ([
            'name' => 'bail|required|string|max:255',
            'email' => 'bail|required|string|email|max:255',
            'password' => 'bail|required|string|min:8|confirmed',
            'roles' => 'bail|required|array',
        ]);




        DB::beginTransaction();
        try {

            $user->name = $validatedData['name'];
            $user->email = $validatedData['email'];
            $user->password = Hash::make($validatedData['password']);

            if($user->save()){
                //attach or sync values
                $user->roles()->sync($validatedData['roles']);

                DB::commit();

                //flsh message
                $request->session()->flash('success','user successfully updated!');

                return redirect(route('users.index'));

            }else{
                DB::rollback();
                $request->session()->flash('error','user does not updated!');
                return back()->withInput();


            }

            // all good
        } catch (\Exception $e) {
            DB::rollback();
            // something went wrong
            $request->session()->flash('error','user does not updated!');
            return back()->withInput();


        }



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public static function hanyMethod($id, $current=null,array $old =null){
        if($old !==null){
            if(in_array($id,$old)){
                return 'selected';
            }else{
                return null;
            }
        }else if($current !==null){
            $current = $current->pluck('id')->toArray();
            if(in_array($id,$current)){
                return 'selected';
            }else{
                return null;
            }
        }else{
            return null;
        }
    }

}
