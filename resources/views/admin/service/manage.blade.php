@extends("master.admin.master")

@section("body")
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">All Service Info</h4>
                <p class="text-center text-success">{{Session::get('message')}}</p>
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Service Title</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($services as $service)
                        <tr> 
                            <td>{{$loop->iteration}}</td>
                            <td>{{$service->title}}</td>
                            <td>
                                <div style="width: 150px" class="text-wrap">
                                    {{$service->description}}
                                </div>
                            </td>

                            <td>
                                
                                <a href="{{route("edit.service", ["id" => $service->id])}}" class="btn btn-success btn-sm" title="Edit Service">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{route("service.delete", ["id" => $service->id])}}" class="btn btn-danger btn-sm" title="Delete Service">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
@endsection