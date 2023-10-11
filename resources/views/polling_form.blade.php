@extends('layouts.default')
@section('content') 
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 blueish-color ">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center">
                    <h1>Voter Information</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="">
                        <div class="border-1 rounded ">
                            <div class="form-group mb-2">
                                <label for="name">Name</label>
                                <input type="text" id="name" class="form-control" placeholder="Voter Name">
                            </div>
                            <div class="from-group mb-2">
                                <label for="contact">Contact</label>
                                <input type="text" id="contact" class="form-control" placeholder="03042676602">
                            </div>
                            <div class="form-group mb-2">
                                <label for="email">Email</label>
                                <input type="email" id="email" class="form-control" placeholder="abc@company.com">
                            </div>
                        </div>
                        <hr>
                        <div class="poll-form-border rounded p-3">
                            @foreach ($data as $data)
                            <h4 class="mb-5"><i class="fa-solid fa-square-poll-horizontal"></i> {{$data->question}} <i class="fa-regular fa-circle-question"></i></h4>
                            <div class="form-row form-group mb-2 d-flex poll-form-option">
                                <input id="opt1" type="radio" name="vote" class="col-md-2 rounded-start ps-1 pe-1 pt-2 pb-2 d-flex justify-content-center">
                                <label for="opt1" class="col-md-10 rounded-end p-2">
                                    {{$data->option1}}
                                </label>
                            </div>
                            <div class="form-row form-group mb-2 d-flex poll-form-option">
                                <input id="opt2" type="radio" name="vote" class="col-md-2 rounded-start ps-1 pe-1 pt-2 pb-2 d-flex justify-content-center">
                                <label for="opt2" class="col-md-10 rounded-end p-2">
                                    {{$data->option2}}
                                </label>
                            </div>
                            <div class="form-row form-group mb-2 d-flex poll-form-option">
                                <input id="opt3" type="radio" name="vote" class="col-md-2 rounded-start ps-1 pe-1 pt-2 pb-2 d-flex justify-content-center">
                                <label for="opt3" class="col-md-10 rounded-end p-2">
                                    {{$data->option3}}
                                </label>
                            </div>
                            <div class="form-row form-group mb-2 d-flex poll-form-option">
                                <input id="opt4" type="radio" name="vote" class="col-md-2 rounded-start ps-1 pe-1 pt-2 pb-2 d-flex justify-content-center">
                                <label for="opt4" class="col-md-10 rounded-end p-2">
                                    {{$data->option4}}
                                </label>
                            </div>
                            <div class="form-row form-group mb-2 d-flex poll-form-option">
                                <input id="opt5" type="radio" name="vote" class="col-md-2 rounded-start ps-1 pe-1 pt-2 pb-2 d-flex justify-content-center">
                                <label for="opt5" class="col-md-10 rounded-end p-2">
                                    {{$data->option5}}
                                </label>
                            </div>
                            <div class="form-row form-group mb-2 d-flex poll-form-option">
                                <input id="opt6" type="radio" name="vote" class="col-md-2 rounded-start ps-1 pe-1 pt-2 pb-2 d-flex justify-content-center">
                                <label for="opt6" class="col-md-10 rounded-end p-2">
                                    {{$data->option6}}
                                </label>
                            </div>
                            <div class="form-row form-group d-flex mb-4">
                                <div class="col-md-4 d-flex justify-content-start">
                                    Vote Count : 30
                                </div>
                                <div class="col-md-8 d-flex justify-content-end">
                                    <button class="btn btn-style"><i class="fa-regular fa-pen-to-square"></i> Submit</button> 
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
