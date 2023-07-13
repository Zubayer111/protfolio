@extends('master.admin.master')

@section('body')
<style>
    
</style>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All About Info</h4>
                    <p class="text-center text-success">{{Session::get('message')}}</p>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>Long Description</th>
                                <th>Email</th>
                                <th>Number</th>
                                <th>Date of Birth</th>
                                <th>Nationality</th>
                                <th>Address</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($abouts as $about)
                            <tr> 
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    <div style="width: 150px" class="text-wrap">
                                        {{$about->long_description}}
                                    </div>
                                </td>
                                <td>{{$about->email}}</td>
                                <td>{{$about->number}}</td>
                                <td>{{$about->date_of_birth}}</td>
                                <td>{{$about->nationality}}</td>
                                <td>{{$about->address}}</td>
                                <td><img src="{{asset($about->image)}}" alt="" height="50" width="80"/></td>

                                <td>
                                    <a href="{{route("edit.about", ["id" => $about->id])}}" class="btn btn-success btn-sm" title="Edit About">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{route("delete.about", ["id" => $about->id])}}" class="btn btn-danger btn-sm" title="Delete About">
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
