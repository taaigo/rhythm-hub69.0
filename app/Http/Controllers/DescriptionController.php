<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DescriptionController extends Controller
{
    public function update(Request $request) {
        $aboutme = $request->input('description');

        DB::table('users')
            ->where('id', Auth::user()->id)
            ->update([
            'description' => $aboutme,
        ]);
        return Redirect('/u')->with('status', 'description-updated');
    }
}
