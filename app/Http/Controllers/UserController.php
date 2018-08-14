<?php

namespace App\Http\Controllers;

use App\User;
use App\Profile;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('user.profile', [
            'user' => $user,
            'profile' => Profile::findOrFail($id),
        ]
        );
    }

}