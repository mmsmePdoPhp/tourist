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
        $user = User::withTrashed()->where('id',$id)->first();
        //trash user or remove it just for now
        if($user->trashed()){
            //remove all roles that has
            $user->roles()->sync([]);
            //force delete
            if($user->forceDelete()){
                session()->flash('success','user successfully complete forceDeleted!');
                return back();
            }else{
                session()->flash('error','user does not complete forceDeleted!!');
                return back();
            }
        }else{
            if($user->delete()){
                session()->flash('success','user successfully deleted!');
                return back();
            }else{
                session()->flash('error','user does not deleted!');
                return back();
            }
        }

    }

    /**
     * show trashed view for removed users
     */
    public function trashed(){
        $users = User::onlyTrashed()->paginate(9);
        return view('users.trashed', compact('users'));
    }

    /**
     * restore user by post type
     */
    public function restore(Request $request){
        //validate
        $validatedData = $request->validate([
            'id' => 'bail|required|integer'
        ]);
        $user= User::onlyTrashed()->where('id',$validatedData['id'])->first();
        if($user->restore()){
            session()->flash('success','user successfully restored!');
            return back();
        }else{
            session()->flash('error','user does not restored!');
            return back();
        }
    }

    /**
     * check id in array for select option user roles
     * @return string
     */
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
