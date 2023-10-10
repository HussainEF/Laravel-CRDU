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
                            <h4 class="mb-5"><i class="fa-solid fa-square-poll-horizontal"></i>  <i class="fa-regular fa-circle-question"></i></h4>
                            <div id="opt1" onclick="test()" class="form-row form-group mb-2 d-flex poll-form-option">
                                <div class="col-md-2 rounded-start ps-1 pe-1 pt-2 pb-2 d-flex justify-content-center show-poll-option-number">Option-1</div>
                                <div class="col-md-10 rounded-end p-2 show-poll-option-detail">
                                </div>
                            </div>
                            <div id="opt2" class="form-row form-group mb-2 d-flex poll-form-option">
                                <div class="col-md-2 rounded-start ps-1 pe-1 pt-2 pb-2 d-flex justify-content-center show-poll-option-number">Option-2</div>
                                <div class="col-md-10 rounded-end p-2 show-poll-option-detail">
                                </div>
                            </div>
                            <div id="opt3" class="form-row form-group mb-2 d-flex poll-form-option">
                                <div class="col-md-2 rounded-start ps-1 pe-1 pt-2 pb-2 d-flex justify-content-center show-poll-option-number">Option-3</div>
                                <div class="col-md-10 rounded-end p-2 show-poll-option-detail">
                                </div>
                            </div>
                            <div id="opt4" class="form-row form-group mb-2 d-flex poll-form-option">
                                <div class="col-md-2 rounded-start ps-1 pe-1 pt-2 pb-2 d-flex justify-content-center show-poll-option-number">Option-4</div>
                                <div class="col-md-10 rounded-end p-2 show-poll-option-detail">
                                </div>
                            </div>
                            <div id="opt5" class="form-row form-group mb-2 d-flex poll-form-option">
                                <div class="col-md-2 rounded-start ps-1 pe-1 pt-2 pb-2 d-flex justify-content-center show-poll-option-number">Option-5</div>
                                <div class="col-md-10 rounded-end p-2 show-poll-option-detail">
                                </div>
                            </div>
                            <div id="opt6" class="form-row form-group mb-4 d-flex poll-form-option">
                                <div class="col-md-2 rounded-start ps-1 pe-1 pt-2 pb-2 d-flex justify-content-center show-poll-option-number">Option-6</div>
                                <div class="col-md-10 rounded-end p-2 show-poll-option-detail">
                                </div>
                            </div>
                            <div class="form-row form-group d-flex mb-4">
                                <div class="col-md-4 d-flex justify-content-start">
                                    Vote Count : 30
                                </div>
                                <div class="col-md-8 d-flex justify-content-end">
                                    <button class="btn btn-style"><i class="fa-regular fa-pen-to-square"></i> Submit</button> 
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
