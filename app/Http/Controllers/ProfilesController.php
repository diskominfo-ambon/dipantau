<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProfileUserRequest;

class ProfilesController extends Controller
{
    public function edit(){
        return view('users.profiles.index');
    }

    public function update(ProfileUserRequest $request) {

        Auth::user()
            ->update($request->validationData());

        return redirect()
            ->back()
            ->with('message', 'Berhasil menyimpan perubahan.');
    }
}
