@extends('layouts.main')

@section('hero')
<h1>Register</h1>
<h4>Welcome To RayBlog</h4>
@endsection

@section('content')


<section class="section-margin--small section-margin">
    <div class="container">
        <div class="row">
            <div class="col-12">

                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-danger">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <form action="{{ route('register') }}" class="form-contact contact_form" method="POST" novalidate>
                    @csrf

                    <div class="row">
                        <div class="col-6">

                            <div class="form-group">
                                <input
                                    class="form-control border @error('name') is-invalid @elseif(old('name')) is-valid @enderror"
                                    name="name"
                                    type="text"
                                    value="{{ old('name') }}"
                                    placeholder="Enter your name">
                            </div>

                            <div class="form-group">
                                <input
                                    class="form-control border @error('email') is-invalid @elseif(old('email')) is-valid @enderror"
                                    name="email"
                                    type="email"
                                    value="{{ old('email') }}"
                                    placeholder="Enter email address">
                            </div>

                        </div>

                        <div class="col-6">

                            <div class="form-group">
                                <input
                                    class="form-control border @error('password') is-invalid @enderror"
                                    name="password"
                                    type="password"
                                    placeholder="Enter your password">
                            </div>


                            <div class="form-group">
                                <input
                                    class="form-control border @error('password_confirmation') is-invalid @enderror"
                                    name="password_confirmation"
                                    type="password"
                                    placeholder="Confirm your password">
                            </div>

                        </div>
                    </div>

                    <div class="form-group text-center text-md-right mt-3">

                        <a href="{{ route('login') }}" class="button button--active button-contactForm"
                           style="background: white; color: orange; border: 1px solid orange;">
                            Already have an account?
                        </a>

                        <button type="submit" class="button button--active button-contactForm">
                            Register
                        </button>

                    </div>

                </form>
            </div>
        </div>
    </div>
</section>

@endsection
