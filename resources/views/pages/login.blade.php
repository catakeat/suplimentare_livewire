@extends('pages.template')
@section('custom-css')
<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .login-form {
        background-color: #3F87A6;
        padding: 20px;
        width: 600px;
        border-radius: 8px;
    }

    .login-form input {
        height: 35px;
        margin-bottom: 20px;
        width: 100%;
        border-radius: 4px;
        padding-left: 15px;
    }

    .login-form input[type='submit'] {
        width: auto;
        cursor: pointer;
    }
</style>
@endsection

@section('content')
<div class='container'>
    <div class="col-md-6">
        @if(Session::has("error"))
        <span>{{ Session::get("error") }}</span>
        @endif
        <form action="{{ route('add_login') }}" method="POST" class="login-form">
            @csrf
            <input type='text' name='username' required autofocus placeholder='Username' class='form-group'>
            <input type='password' name='password' required placeholder='Password' class='form-group'>
            <input type='submit' value="Login" id='login' class='btn btn-primary'>
        </form>
    </div>
</div>
@endsection