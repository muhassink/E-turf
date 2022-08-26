@extends('admin.adminheader')
@section('admin')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">All Managers</h4>
                        <p class="card-description">
                        </p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>name</th>
                                        <th>contactnumber</th>
                                        <th>email</th>
                                        <th>password</th>
                                        <th>location</th>
                                        <th>status</th>
                                    </tr>
                                    @foreach($result as $value)
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$value->id}}</td>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->contactnumber}}</td>
                                        <td>{{$value->email}}</td>
                                        <td>{{$value->password}}</td>
                                        <td>{{$value->location}}</td>
                                        <td>
                                            @if($value->status=='Declined')<label class="badge badge-danger">{{$value->status}}</label>
                                            @elseif($value->status=='Aproved')<label class="badge badge-success">{{$value->status}}</label>
                                            @else<label class="badge badge-warning">{{$value->status}}</label>
                                            @endif</td>
                                        <td><a href="/Approve/{{$value->id}}">Aprove</a></td>
                                        <td><a href="/Deccline/{{$value->id}}">Decline</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection