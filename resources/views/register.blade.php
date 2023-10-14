@extends('layouts.default')
@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-md-5">
        <form action="{{url('post-register')}}" method="POST" class="bg-light pt-2 ps-3 pe-3 pb-2 rounded" name="registerForm" id="register">
            {{ csrf_field() }}
            <h1 class="d-flex justify-content-center mb-5">Polling System</h1>
            <div class="row mb-2">
                <div class="col-md-12 form-control">
                    <label for="name"><i class="fa-solid fa-user"></i></label>
                    <input type="text" id="name" name="name" class="" placeholder="Name">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-12 form-control">
                    <label for="email"><i class="fa-solid fa-envelope"></i></label>
                    <input type="email" id="email" name="email" class="" placeholder="name@company.com">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-12 form-control">
                    <label for="contact"><i class="fa-solid fa-phone"></i></label>
                    <input type="phone" id="contact" name="contact" class="" placeholder="03000000000">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-12 form-control">
                    <label for="password"><i class="fa-solid fa-key"></i></label>
                    <input type="password" name="password" class="" placeholder="Password">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-12 d-flex">
                    <div class="me-4">Gender:-</div>
                    <div class="">
                        <input type="radio" id="male" name="gender" value="Male">
                        <label for="male" class="me-2"><i class="fa fa-male" aria-hidden="true"></i> Male</label>
                        <input type="radio" id="female" name="gender" value="Female">
                        <lablel for="female" class="me-2"><i class="fa fa-female" aria-hidden="true"></i> Female</lablel>
                        <input type="radio" id="other" name="gender" value="other">
                        <lablel for="other" class="me-2"><i class="fa fa-transgender" aria-hidden="true"></i> Other</lablel>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-4">
                    <button type="submit" class="form-control btn btn-style"><i class="fa-solid fa-user-plus"></i> Register</button>
                </div>
            </div>
        </form>
        <div class="row mt-3">
            <div class="col-md-12 d-flex justify-content-center">
                <div class="me-2">Already Registered?</div>
                <a href="/login" class="btn btn-style"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
            </div>
        </div>
    </div>
</div>
@endsection
