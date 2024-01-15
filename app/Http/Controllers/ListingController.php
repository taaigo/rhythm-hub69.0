<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\User;
use App\Classes\Files;
use App\Models\Comment;
use App\Models\Songcomments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ListingController extends Controller
{
    public function index() {
        return view('songs.index', [
            'songs' => Song::paginate(30),
        ]);
    }

    public function show($id) {
        $listing = Song::find($id);
        $username = User::find($listing->submitter_id)->username;


        if ($listing) {
            return view('songs.show', [
                'song' => $listing,
                'comments' => Songcomments::where('song', $id)->paginate(15),
                'username' => $username,
            ]);
        }
    }

    public function upload($song) {

        Songcomments::create([
            'content' => request('comment'),
            'user' => Auth::user()->id,
            'username' => Auth::user()->username,
            'song' => $song,
        ]);
        return redirect('/songs/'.$song);
    }
}
