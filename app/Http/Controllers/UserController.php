<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index() {
        return view('users.index', [
            'users' => User::paginate(30),
        ]);
    }

    public function show(User $user, $id) {
        $u = User::find($id);

        if ($u) {
        return view('users.show', [
            'user' => User::find($id),
        ]);
        }
    }

    public function findYou() {
        $id = Auth::user()->id;
        return Redirect::to('/u/'.$id);
    }
}
