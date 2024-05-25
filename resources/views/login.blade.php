@extends('layouts.public')

@section('title', 'Login')

@section('content')
<div class="static">
    <main>
    <div class="container">
    <form action="">
    <h1>Login</h1>
    <div class="form-group">
        <label for="">Username</label>
        <input type="text" class="form-control" required>
    </div>
    <div class="form-group">
    <label for="">Password</label>
    <input type="password" class="form-control" required>

    </div>
    <input type="submit" class="btn" value="Login">
    <p class="register-link">Non hai un account? <a href="register.html">Registrati</a></p>
    </form>  
    </div>
    </main>
</div>
@endsection
