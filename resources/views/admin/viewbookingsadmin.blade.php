@extends('admin.adminheader')
@section('admin')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Bookings</h4>
                        <p class="card-description">
                        </p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>nameturf</th>
                                        <th>location</th>
                                        <th>price</th>
                                        <th>date</th>
                                        <th>time</th>

                                        <th>status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($result as $value)
                                    <tr>
                                        <td>{{$value->id}}</td>
                                        <td>{{$value->nameturf}}</td>
                                        <td>{{$value->location}}</td>
                                        <td>{{$value->price}}</td>
                                        <td>{{$value->date}}</td>
                                        <td>{{$value->time}}</td>
                                        <td>
                                            @if($value->status=='Aproved')<label class="badge badge-success">{{$value->status}}</label>
                                            @elseif($value->status=='Declined')<label class="badge badge-danger">{{$value->status}}</label>
                                            @else($value->status=='paymentrecieved')<label class="badge badge-warning">{{$value->status}}</label>
                                            @endif
                                        </td>
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