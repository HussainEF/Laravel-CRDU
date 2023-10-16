                    <div class="rounded show-poll p-3">
                    @foreach ($pollsData as $data)
                        <form method="post" action="{{route('polling', $data->id)}}">
                            {{ csrf_field() }}
                            <h4 class="mb-5"><i class="fa-solid fa-square-poll-horizontal"></i> {{$data->question}} <i class="fa-regular fa-circle-question"></i></h4>
                            <!-- <div class="form-row form-group mb-2 d-flex">
                                <div class="col-md-2 rounded-start ps-1 pe-1 pt-2 pb-2 d-flex justify-content-center show-poll-option-number">Option-1</div>
                                <div class="col-md-10 rounded-end p-2 show-poll-option-detail">
                                    {{$data->option1}}
                                </div>
                            </div> -->
                            <div class="input-group mb-2">
                                <div class="input-group-text option-number"><label for="opt1">Option-1</label></div>                    
                                <input type="text" id="opt1" name="option1" class="form-control option-detail" value="{{$data->option1}}" disabled="disabled">
                                <button class="btn btn-style edit" type="button"><i class="fa-regular fa-pen-to-square"></i> Edit</button>
                            </div>
                            <div class="input-group mb-2">
                                <span class="input-group-text option-number"><label for="opt2">Option-2</label></span>                    
                                <input type="text" id="opt2" name="option2" class="form-control option-detail" value="{{$data->option2}}" disabled="disabled">
                                <button class="btn btn-style edit" type="button" id="2"><i class="fa-regular fa-pen-to-square"></i> Edit</button>
                            </div>
                            <div class="input-group mb-2">
                                <span class="input-group-text option-number"><label for="opt3">Option-3</label></span>                    
                                <input type="text" id="opt3" name="option3" class="form-control option-detail" value="{{$data->option3}}" disabled="disabled">
                                <button class="btn btn-style edit" type="button" id="3"><i class="fa-regular fa-pen-to-square"></i> Edit</button>
                            </div>
                            <div class="input-group mb-2">
                                <span class="input-group-text option-number"><label for="opt4">Option-4</label></span>                    
                                <input type="text" id="opt4" name="option4" class="form-control option-detail" value="{{$data->option4}}" disabled="disabled">
                                <button class="btn btn-style edit" type="button" id="4"><i class="fa-regular fa-pen-to-square"></i> Edit</button>
                            </div>
                            <div class="input-group mb-2">
                                <span class="input-group-text option-number"><label for="opt5">Option-5</label></span>                    
                                <input type="text" id="opt5" name="option5" class="form-control option-detail" value="{{$data->option5}}" disabled="disabled">
                                <button class="btn btn-style edit" type="button" id="5"><i class="fa-regular fa-pen-to-square"></i> Edit</button>
                            </div>
                            <div class="input-group mb-4">
                                <span class="input-group-text option-number"><label for="opt6">Option-6</label></span>                    
                                <input type="text" id="opt6" name="option6" class="form-control option-detail" value="{{$data->option6}}" disabled="disabled">
                                <button class="btn btn-style edit" type="button" id="6"><i class="fa-regular fa-pen-to-square"></i> Edit</button>
                            </div>
                            <div class="form-row form-group d-flex mb-4">
                                <div class="col-md-4 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-style"><i class="fa-solid fa-share"></i> Share</button>
                                </div>
                                <div class="col-md-4 d-flex justify-content-center">
                                    <button type="button" class="btn btn-style">
                                    <i class="fa-regular fa-floppy-disk"></i> Save Changes
                                    </button>
                                </div>
                                <div class="col-md-4 d-flex justify-content-center">
                                    <button type="button" onclick="deleteQuestion('delete-question', {{$data->id}})" class="btn btn-style"><i class="fa-solid fa-trash-can"></i> Delete</button>
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
                        </form>
                    </div>
                    @endforeach

