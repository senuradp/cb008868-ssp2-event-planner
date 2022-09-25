<?php

namespace App\Http\Controllers;

use App\Models\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function show(){
        $user = auth()->user();

        return view('profile',[
            'user' => $user
        ]);
    }

    public function myReviews(){
        // get the authenticated user
        $user = auth()->user();

        // get the user's bookings
        $bookings = $user->bookings;

        return view('reviews', [
            'user' => $user,
            'bookings' => $bookings,
        ]);
    }

    public function udpateProfile(){

        $attributes = request()->validate([
            'user_id' => 'required',
            'name' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            "password" => ['nullable', 'confirmed', Password::min(8)],
            'phone' => 'required',
            'address' => 'nullable',
            'city' => 'nullable',
            'state' => 'nullable',
            'zip' => 'nullable',
            'country' => 'nullable',
            'nic' => 'nullable',
            'avatar' => 'nullable',
        ]);

        $profile = User::where('id',$attributes['user_id'])->first();

        $profile->update([
            'name' => $attributes['name'],
            'first_name' => $attributes['first_name'],
            'last_name' => $attributes['last_name'],
            'email' => $attributes['email'],
            'phone' => $attributes['phone'],
            'address' => $attributes['address'],
            'city' => $attributes['city'],
            'state' => $attributes['state'],
            'zip' => $attributes['zip'],
            'country' => $attributes['country'],
            'nic' => $attributes['nic'],
            'avatar' => $attributes['avatar'],
        ]);

        return redirect()->route('user.profile.show')->with('success','Profile updated successfully !');

    }
}
