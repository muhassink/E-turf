@extends('user.useruserheader')
@section('useruser')
<div class="container">
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Your Payment</h4>
                            <p class="card-description">
                            </p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>booking_id</th>
                                            <th>name_on_card</th>
                                            <th>credit_card_number</th>
                                        </tr>
                                        @foreach($result as $value)
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{$value->id}}</td>
                                            <td>{{$value->booking_id}}</td>
                                            <td>{{$value->name_on_card}}</td>
                                            <td>{{$value->credit_card_number}}</td>
                                            <td><a href="/paymentbill/{{$value->id}}"><button class="btn btn-info"> Bill </button></a></td>
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