@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('assets/main.css') }}">

@section('content')
    <section id="main">
        <div class="wrapper">
            <div class="main-con">
                <form action="{{ route('login.user') }}" method="POST">
                    @csrf
                    <div class="field-con">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="field-con password-field">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        <i class="bi bi-eye-slash"></i>
                    </div>
                    <div class="btn-con">
                        <button type="submit" class="btn btn-success">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
