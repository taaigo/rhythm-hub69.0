@extends('layout')

@section('title', 'users')
@section('container-title', 'Users')
@section('style')
<link rel="stylesheet" href="{{ asset('css/users.css') }}">
@endsection

@section('content')
<div class="arrange_flex">
    @if(count($users) == 0)

    @endif
    
    @foreach($users as $user)
        <x-users.user-card :user="$user" />
    @endforeach
</div>
    @endsection
    
    @section('pagination')
    <div class="container paginator_container">
        {{ $users->links('vendor.pagination.default') }}
    </div>
@endsection