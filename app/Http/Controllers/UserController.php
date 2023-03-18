<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Hash, Validator, Storage};

class UserController extends Controller
{
    public function password(Request $request)
    {
        $rules = Validator::make( $request->all() , [
            'old_password' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (!Hash::check($value, auth()->user()->password)) {
                        return $fail('Kata sandi lama tidak benar');
                    }
                },
            ],
            'new_password' => 'required|string|different:old_password',
            'password_confirmation' => 'required|string|same:new_password'
        ]);
        if($rules->fails()){
            return back()->withInput()->withErrors($rules, 'profile_password');
        }
        $validatedData = $rules->validated();
        $password = Hash::make($validatedData['new_password']);
        $user = User::find(auth()->user()->id);
        $user->update(['password' => $password]);
        return back()->with('success', 'Password has changed');
    }
}
