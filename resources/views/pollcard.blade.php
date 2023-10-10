                    <div class="rounded show-poll p-3">
                        <form action="">
                            @foreach ($pollsData as $data)
                            <h4 class="mb-5"><i class="fa-solid fa-square-poll-horizontal"></i> {{$data->question}} <i class="fa-regular fa-circle-question"></i></h4>
                            <div class="form-row form-group mb-2 d-flex">
                                <div class="col-md-2 rounded-start ps-1 pe-1 pt-2 pb-2 d-flex justify-content-center show-poll-option-number">Option-1</div>
                                <div class="col-md-10 rounded-end p-2 show-poll-option-detail">
                                    {{$data->option1}}
                                </div>
                            </div>
                            <div class="form-row form-group mb-2 d-flex">
                                <div class="col-md-2 rounded-start ps-1 pe-1 pt-2 pb-2 d-flex justify-content-center show-poll-option-number">Option-2</div>
                                <div class="col-md-10 rounded-end p-2 show-poll-option-detail">
                                    {{$data->option2}}
                                </div>
                            </div>
                            <div class="form-row form-group mb-2 d-flex">
                                <div class="col-md-2 rounded-start ps-1 pe-1 pt-2 pb-2 d-flex justify-content-center show-poll-option-number">Option-3</div>
                                <div class="col-md-10 rounded-end p-2 show-poll-option-detail">
                                    {{$data->option3}}
                                </div>
                            </div>
                            <div class="form-row form-group mb-2 d-flex">
                                <div class="col-md-2 rounded-start ps-1 pe-1 pt-2 pb-2 d-flex justify-content-center show-poll-option-number">Option-4</div>
                                <div class="col-md-10 rounded-end p-2 show-poll-option-detail">
                                    {{$data->option4}}
                                </div>
                            </div>
                            <div class="form-row form-group mb-2 d-flex">
                                <div class="col-md-2 rounded-start ps-1 pe-1 pt-2 pb-2 d-flex justify-content-center show-poll-option-number">Option-5</div>
                                <div class="col-md-10 rounded-end p-2 show-poll-option-detail">
                                    {{$data->option5}}
                                </div>
                            </div>
                            <div class="form-row form-group mb-5 d-flex">
                                <div class="col-md-2 rounded-start ps-1 pe-1 pt-2 pb-2 d-flex justify-content-center show-poll-option-number">Option-6</div>
                                <div class="col-md-10 rounded-end p-2 show-poll-option-detail">
                                    {{$data->option6}}
                                </div>
                            </div>
                            <div class="form-row form-group d-flex mb-4">
                                <div class="col-md-4 d-flex justify-content-center">
                                    <a href="{{url('polling')}}" class="btn btn-style"><i class="fa-solid fa-share"></i> Share</a>
                                </div>
                                <div class="col-md-4 d-flex justify-content-center">
                                    <button class="btn btn-style"><i class="fa-regular fa-pen-to-square"></i> Update</button> 
                                </div>
                                <div class="col-md-4 d-flex justify-content-center">
                                    <button class="btn btn-style"><i class="fa-solid fa-trash-can"></i> Delete</button>
                                </div>
                            </div>
                            <div class="form-row form-group d-flex">
                                <div class="col-md-6 d-flex justify-content-start">
                                    Vote Count : 30
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    {{$data->created_at}}
                                </div>
                            </div>
                            @endforeach
                        </form>
                    </div>

