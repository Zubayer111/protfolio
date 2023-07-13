@extends('master.admin.master')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Update About Form</h4>
                    <p class="text-center text-success">{{Session::get('message')}}</p>
                    <form action="{{route("updete.about", ["id" => $about->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Long Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="long_description" id="horizontal-email-input3" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input1" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="email" value="{{$about->email}}" id="horizontal-firstname-input1" required/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input1" class="col-sm-3 col-form-label">Number</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="number" value="{{$about->number}}" id="horizontal-firstname-input1" required/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input1" class="col-sm-3 col-form-label">Date of Birth</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="date_of_birth" value="{{$about->date_of_birth}}" id="horizontal-firstname-input1" required/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input1" class="col-sm-3 col-form-label">Nationality</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nationality" value="{{$about->nationality}}" id="horizontal-firstname-input1" required/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input1" class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="address" value="{{$about->address}}" id="horizontal-firstname-input1" required/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label"> Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control-file" name="image" id="horizontal-password-input" />
                                <img src="{{asset($about->image)}}" alt="" height="100" width="150">
                            </div>
                        </div>
                        
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Update About</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
