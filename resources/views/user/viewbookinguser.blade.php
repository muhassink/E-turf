@extends('user.useruserheader')
@section('useruser')
<div class="container">
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">All turfs</h4>
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
                                            <th>status</th>
                                        </tr>
                                        @foreach($result2 as $value)
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{$value->id}}</td>
                                            <td>{{$value->nameturf}}</td>
                                            <td>{{$value->description}}</td>
                                            <td>{{$value->location}}</td>
                                            <td>{{$value->price}}</td>
                                            <td>
                                                @if($value->status=='Aproved')<label class="badge badge-success">{{$value->status}}</label>
                                                @elseif($value->status=='Declined')<label class="badge badge-danger">{{$value->status}}</label>
                                                @else($value->status=='pending')<label class="badge badge-warning">{{$value->status}}</label>
                                                @endif</td>
                                            @if($value->status=='Aproved')<td><a href="/Paymentturf/{{$value->id}}"><button class="btn btn-primary"> Pay Now </button></a></td>@endif
                                            @if($value->status=='payment recieved')<td><a href="/viewpayment/{{$value->id}}"><button class="btn btn-info">ViewPayment</button></a></td>@endif
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
</div>
@endsection