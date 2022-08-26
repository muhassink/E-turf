@extends('manager.managerheader')
@section('manager')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">View Bookings</h4>
                        <p class="card-description">
                        </p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>name</th>
                                        <th>location</th>
                                        <th>price</th>
                                        <th>date</th>
                                        <th>time</th>
                                        <th>user name</th>
                                        <th>status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($result3 as $value)
                                    <tr>
                                        <td>{{$value->id}}</td>
                                        <td>{{$value->nameturf}}</td>
                                        <td>{{$value->location}}</td>
                                        <td>{{$value->price}}</td>
                                        <td>{{$value->date}}</td>
                                        <td>{{$value->time}}</td>
                                        <td>{{$value->name}}</td>
                                        <td>
                                            @if($value->status=='Aproved')<label class="badge badge-success">{{$value->status}}</label>
                                            @elseif($value->status=='Declined')<label class="badge badge-danger">{{$value->status}}</label>
                                            @endif
                                        </td>
                                        <td><a href="/Aprove/{{$value->id}}">Aprove</a></td>
                                        <td><a href="/Decline/{{$value->id}}">Decline</a></td>
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