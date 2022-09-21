<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auth\Administrator;
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
            'admin' => new Administrator()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "name" => "required|max:255",
            "email" => "required|max:255",
            "password" => ['required', 'confirmed', Password::min(8)],
        ]);

        // check if the password is not emoty and if not then hash it
        if(!is_null($validated['password'])){
            $validated['password'] = bcrypt($validated['password']);
        }else{
            unset($validated['password']);
        }

        $admin = (new Administrator())->create($validated);

        return redirect()->route('admin.administrators.index')->with('success', 'Admin '. $admin->name .' created successfully.');
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
    public function update(Request $request, Administrator $admin)
    {
        $validated = $request->validate([
            "name" => "required|max:255",
            "email" => "required|max:255",
            "password" => ['nullable', 'confirmed', Password::min(8)],
        ]);

        // check if the password is not emoty and if not then hash it
        if(!is_null($validated['password'])){
            $validated['password'] = bcrypt($validated['password']);
        }else{
            unset($validated['password']);
        }

        $admin->update($validated);

        return redirect()->route('admin.administrators.index')->with('success', 'Admin '. $admin->name .' updated successfully.');
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
