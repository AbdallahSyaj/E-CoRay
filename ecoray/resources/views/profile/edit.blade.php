@extends('layouts.main')

@section('head')
<link rel="stylesheet" href="css/profile.css">
@endsection

@section('hero')
<h1>Profile</h1>
<h3>Welcome, {{ Auth::user()->name }} to your profile</h3>
@endsection

@section('content')
<div class="profile-container">

    <!-- Update Profile -->
    <div class="profile-card">
        @include('profile.partials.update-profile-information-form')
    </div>

    <!-- Update Password -->
    <div class="profile-card">
        @include('profile.partials.update-password-form')
    </div>

    <!-- Delete User -->
    <div class="profile-card delete-box">
        @include('profile.partials.delete-user-form')
    </div>

    <!-- User's Blogs -->
    @include('profile.partials.user-blogs')

    
    <form action="{{ route('logout') }}" method="Post">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>

</div>

@endsection





