@extends('admin.adminheader')
@section('admin')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Users View</h4>
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
                                    </tr>
                                    @foreach($user as $value)
                                </thead>
                                <tbody>
                                    <tr class="table-success">
                                        <td>{{$value->id}}</td>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->contactnumber}}</td>
                                        <td>{{$value->email}}</td>
                                        <td>{{$value->password}}</td>
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