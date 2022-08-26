@extends('admin.adminheader')
@section('admin')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Turf</h4>
                        <p class="card-description">
                        </p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>name</th>
                                        <th>description</th>
                                        <th>location</th>
                                        <th>price</th>
                                        <th>manager</th>
                                        <th>status</th>
                                    </tr>
                                    @foreach($result as $value)
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$value->id}}</td>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->description}}</td>
                                        <td>{{$value->location}}</td>
                                        <td>{{$value->price}}</td>
                                        <td>{{$value->manager}}</td>
                                        <td>
                                            @if($value->status=='pending')<label class="badge badge-danger">{{$value->status}}</label>
                                            @elseif($value->status=='Aproved')<label class="badge badge-success">{{$value->status}}</label>
                                            @else<label class="badge badge-warning">{{$value->status}}</label>
                                            @endif</td>
                                        <td><a href="/editeditturf/{{$value->id}}">Edit</a></td>
                                        <td><a href="/Deleteturf/{{$value->id}}">Delete</a></td>
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