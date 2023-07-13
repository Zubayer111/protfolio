@extends("master.admin.master")

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Update Service Form</h4>
                    <p class="text-center text-success">{{Session::get('message')}}</p>
                    <form action="{{route("service.updete",["id" => $service->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input1" class="col-sm-3 col-form-label">Service Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$service->title}}" name="title" id="horizontal-firstname-input1" required/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="description" id="horizontal-email-input3" required></textarea>
                            </div>
                        </div>
                        
                        
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Update Service</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection