<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use Illuminate\Http\Request;
use App\Models\Auth\Administrator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Password;

class AdminController extends Controller
{
    public function home(){
        return view('admin.dashboard');
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = (new Administrator())
            ->newQuery()
            ->paginate(1);

        return view('admin.administrators.index',[
            'admins' => $admins
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.administrators.form', [
            'administrator' => new Administrator()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminRequest $request)
    {
        // check if the password is not empty and if not then hash it
         if($request->get('password')){
            $request->offsetSet('password', bcrypt($request->password));
        }else{
            $request->offsetUnset('password');
        }

        // get the validated data
        $validated = $request->all();

        if($request->file('avatar')){
            $validated['avatar'] = $request->file('avatar')->store('avatars');
        }

        $administrator = (new Administrator())->create($validated);

        return redirect()
            ->route('admin.administrators.index')
            ->with('success', 'Admin '. $administrator->name .' created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.administrators.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Administrator $administrator)
    {
        // dd($administrator);
        return view('admin.administrators.form', [
            'administrator' => $administrator
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminRequest $request, Administrator $administrator)
    {
        // dd($request);

        // check if the password is not empty and if not then hash it
        if($request->get('password')){
            $request->offsetSet('password', bcrypt($request->password));
        }else{
            $request->offsetUnset('password');
        }

        // dd($request->all());

        // get the validated data
        $validated = $request->all();

        if($request->file('avatar')){

            // check if the file exists in the duirectory and delete it
            if($administrator->avatar){
                Storage::delete($administrator->avatar);
            }

            $validated['avatar'] = $request->file('avatar')->store('avatars');
        }

        // dd($path);

        $administrator->update($validated);

        return redirect()
            ->route('admin.administrators.index')
            ->with('success', 'Admin '. $administrator->name .' updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        // check if the admin id is the id of the current logged in admin and prevent deletion of the current admin

        if($id == auth()->id()){
            return redirect()->route('admin.administrators.index')->with('error', 'You cannot delete yourself');
        }


        (new Administrator())->newQuery()->find($id)->delete();
        return redirect()->route('admin.administrators.index');
    }


}
