@extends('layouts.default')
@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-md-5">
        <form action="" class="bg-light pt-2 ps-3 pe-3 pb-2 rounded">
            <h1 class="d-flex justify-content-center mb-5">Laravel Crud</h1>
            <div class="row mb-2">
                <div class="col-md-12">
                    <input type="text" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-12">
                    <input type="email" class="form-control" placeholder="username@company.com">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-12">
                    <input type="phone" class="form-control" placeholder="03000000000">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-12">
                    <input type="password" class="form-control" placeholder="Password">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-12">
                    <div class="">Gender:-</div>
                    <label for="male">Male</label>
                    <input type="radio" id="male" value="Male">
                    <lablel for="female">Female</lablel>
                    <input type="radio" id="female" value="Female">
                    <lablel for="other">Other</lablel>
                    <input type="radio" id="other" value="other">
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-4">
                    <button class="form-control btn btn-secondary">Register</button>
                </div>
            </div>
        </form>
        <div class="row d-flex justify-content-center mt-3">
            <div class="column-md-12">
                <div class="">Already Registered?</div>
                <button class="btn btn-primary">Login</button>
            </div>
        </div>
    </div>
</div>
@endsection
