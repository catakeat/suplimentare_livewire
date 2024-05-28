@extends('pages.template')
@section('custom-css')
<style>
    .container {
        display: flex;
        justify-content: center;
    }

    form {
        display: flex;
        flex-direction: column;
        margin-top: 10px;
    }

    .form-row {
        margin-top: 10px;
    }

    .login-form {
        margin-top: 10px;
        background-color: #3F87A6;
        padding: 20px;
    }

    .login-form input {
        margin: auto;
        width: 90%;

    }
</style>
@endsection
@section('content')
<div class='container-fluid'>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
          <span>  @if(Session::has("error"))
            {{Session::get("error")}}
            @endif
          </span>
        </div>
        <div class="col-2"></div>
    </div> <!--  inchid row -->


    <div class="row">
        <div class="col-2"></div>

        <div class="col-8">
           <br><br>
            <form action="{{route('add_login')}}" method="POST" class="mt-1 login-form">
             @csrf
                <input type='text' name='username' required autofocus placeholder='username' class='form-group'>
                <input type='password' name='password' required class='form-group'>
                <input type='submit' value="Login" id='login' class='form-group mb-2'>
            </form>
        </div>
        <div class="col-2"></div>
    </div> <!--inchid row -->
</div>
@endsection('content')