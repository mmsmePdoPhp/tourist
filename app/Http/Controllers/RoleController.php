<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::orderBy('id','desc')->paginate(9);
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roles.new');
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trashed()
    {
        $roles = Role::onlyTrashed()->orderBy('id','desc')->paginate(9);
        return view('roles.trashed', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //validation
       $validatedData = $request->validate([
        'name' => 'required|string|min:3|max:80|unique:roles'
        ]);

        //store
        $role = new Role();
            $role->name = $validatedData['name'];
        $result = $role->save();

        // flash message
        if($result){
            $request->session()->flash('success','new role was successfully created.');
        }else{
            $request->session()->flash('error','new role does not created.');
        }

        //redirect index
        return redirect(route("role.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return view('roles.show',compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        //validation
       $validatedData = $request->validate([
            'name' => 'required|string|min:3|max:80|unique:roles'
        ]);

        //store
        $role->name = $validatedData['name'];
        $result = $role->save();

        // flash message
        if($result){
            $request->session()->flash('success','new role was successfully created.');
        }else{
            $request->session()->flash('error','new role does not created.');
        }

        //redirect index
        return redirect(route("role.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //get role from database
        $role = Role::withTrashed()->where('id',$id)->first();
        //if belogs to any user
        if($role->users !=null && $role->users->count() == 0){
            //does not belogs to any user

            if($role->trashed()){
                //force delete
                if( $role->forceDelete()){
                    session()->flash('success','role successfully complete deleted !');
                    return back();
                }else{
                    session()->flash('error','role does not complete deleted !');
                    return back();
                }
            }else{
                //soft delete
                if( $role->delete()){
                    session()->flash('success','role successfully deleted !');
                    return back();
                }
            }
        }else{
            //we cant force delete it
            session()->flash('error','role does not deleted');
            return back();

        }
        session()->flash('error','role does not deleted');
        return back();

    }


   /**
     * restore user by post type
     */
    public function restore(Request $request){
        //validate
        $validatedData = $request->validate([
            'id' => 'bail|required|integer'
        ]);
        $role= Role::onlyTrashed()->where('id',$validatedData['id'])->first();
        if($role->restore()){
            session()->flash('success','role successfully restored!');
            return back();
        }else{
            session()->flash('error','role does not restored!');
            return back();
        }
    }

}
