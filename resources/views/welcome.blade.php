@extends('layouts.app')

@section('content')
    <form action="" method="POST">
        @csrf
        <div class="field-con">
            <label for="email">email</label>
            <input type="text" name="email" placeholder="Email" required>
        </div>
        <div class="field-con">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-success">Login</button>
    </form>
@endsection
