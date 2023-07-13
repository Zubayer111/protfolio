@extends('master.admin.master')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Add Protfolio Form</h4>
                    <p class="text-center text-success">{{Session::get('message')}}</p>
                    <form action="{{route("protfilio.new")}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input1" class="col-sm-3 col-form-label">Protfolio title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="protfolio_title"  required/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label" required>Short Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="short_description"  ></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label"> Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control-file" name="image"   />
                            </div>
                        </div>
                        
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Add Protfolio</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
