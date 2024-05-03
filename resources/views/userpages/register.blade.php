@extends('layouts.app')

@section('content')
    <div class="form-container">
        <h1>Registration</h1>
        <form method="POST" action="{{ route('register') }}" class="register-form">
            @csrf

            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" class="form-input" required autofocus>
            </div>

            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" class="form-input" required>
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input id="password" type="password" name="password" class="form-input" required autocomplete="new-password">
            </div>

            <div class="form-group">
                <label for="password-confirm" class="form-label">Confirm Password</label>
                <input id="password-confirm" type="password" name="password_confirmation" class="form-input" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">Register</button>
            </div>
        </form>
    </div>
@endsection

<style>
body {
    font-family: Arial, sans-serif;

}
.body .h1 {
    justify-content: center;
}
.form-container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: white;
}

.form-container form {
    font-size: 14px; 
}

.form-container h1 {
    font-size: 24px; 
    text-align: center;
}


.form-group {
    margin-bottom: 20px;
}

.form-label {
    display: block;
    margin-bottom: 5px;
}

.form-input {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box;
}

.btn {
    display: inline-block;
    padding: 8px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    text-decoration: none;
    font-size: 14px;
    justify-content: center;
}

.btn-success {
    justify-content: center;
}

.btn-success:hover {
    background-color: #0056b3;
}

</style>