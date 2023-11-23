@extends('layout.template')

@section('konten')
<div class="w-50 center border rounded px-3 py-3 mx-auto">
    <h1>Login</h1>
    <form action="/sesi/login" method="POST"> 
    @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" value="{{ Session::get('email')}}" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="passsword" class="form-label">password</label>
            <input type="password" name="password" class="form-control">
        </div>

        <div class="remember-forgot">
            <label><input type="checkbox">Remember me</label>
            <a href="#">Forgot passsword</a>
        </div>

        <div class="mb-3 d-grid">
            <button name="sumbit" type="submit" class="btn btn-primary">Login</button>
        </div>
        <div class="register-link">
            <p>Don't have an account? <a href="/sesi/register">Register</a></p>
        </div>
      
    </form>
</div>
    
@endsection