@extends("master.admin.master")

@section("body")
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">All Contact Me Info</h4>
                <p class="text-center text-success">{{Session::get('message')}}</p>
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Contact's name</th>
                            <th>Contact's email</th>
                            <th>Contact's subject</th>
                            <th>Contact's message</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($contacts as $contact)
                        <tr> 
                            <td>{{$loop->iteration}}</td>
                            <td>{{$contact->name}}</td>
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->subject}}</td>
                            <td>
                                <div style="width: 150px" class="text-wrap">
                                    {{$contact->message}}
                                </div>
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