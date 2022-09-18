<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auth\Administrator as Admin;

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
        $admins = (new Admin())
            ->newQuery()
            ->paginate(1);

        return view('admin.admins.index',[
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
        return view('admin.admins.form');
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
    public function show($id)
    {
        return view('admin.admins.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.admins.form');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        // check if the user id is the id of the current logged in user and prevent deletion of the current user

        if($id == auth()->id()){
            return redirect()->route('admin.users.index')->with('error', 'You cannot delete yourself');
        }


        (new Admin())->newQuery()->find($id)->delete();
        return redirect()->route('admin.admins.index');
    }


}
