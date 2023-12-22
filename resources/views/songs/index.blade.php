@extends('layout')

@section('title', 'songs')
@section('style')
<link rel="stylesheet" href="{{ asset('css/songs.css') }}">
@endsection

@section('content')
<div class="arrange_flex">
    @if(count($songs) == 0)

    @endif
    
    @foreach($songs as $song)
        <x-songs.song-card :song="$song" />
    @endforeach
</div>
    @endsection
    
    @section('pagination')
    <div class="container paginator_container">
        {{ $songs->links('vendor.pagination.default') }}
    </div>
@endsection