@extends('master.admin.master')

@section('body')
<style>
    
</style>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Protfolio Info</h4>
                    <p class="text-center text-success">{{Session::get('message')}}</p>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>Protfolio Title</th>
                                <th>Short Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($protfolios as $protfolio)
                            <tr> 
                                <td>{{$loop->iteration}}</td>
                                <td>{{$protfolio->protfolio_title}}</td>
                                <td>
                                    <div style="width: 150px" class="text-wrap">
                                        {{$protfolio->short_description}}
                                    </div>
                                </td>
                                <td><img src="{{asset($protfolio->image)}}" alt="" height="50" width="80"/></td>

                                <td>
                                    <a href="{{route("edit.protfolio", ["id" => $protfolio->id])}}" class="btn btn-success btn-sm" title="Edit Protfolio">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{route("delete.protfolio", ["id" => $protfolio->id])}}" class="btn btn-danger btn-sm" title="Delete Protfolio">
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
