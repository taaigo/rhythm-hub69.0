<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use App\Classes\Files;

class ListingController extends Controller
{
    public function index() {
        return view('songs.index', [
            'songs' => Song::paginate(30),
        ]);
    }

    public function show(Song $song, $id) {
        $listing = Song::find($id);

        if ($listing) {
            return view('songs.show', [
                'song' => Song::find($id),
            ]);
        }
    }
}
