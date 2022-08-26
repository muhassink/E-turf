@extends('manager.managerheader')
@section('manager')
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
                                <table class="table" border="2">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>booking_id</th>
                                            <th>userid</th>
                                            <th>name_on_card</th>
                                            <th>credit_card_number</th>
                                            <th>exp_month</th>
                                            <th>exp_year</th>
                                            <th>status</th>
                                        </tr>
                                        @foreach($result as $value)
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{$value->id}}</td>
                                            <td>{{$value->booking_id}}</td>
                                            <td>{{$value->userid}}</td>
                                            <td>{{$value->name_on_card}}</td>
                                            <td>{{$value->credit_card_number}}</td>
                                            <td>{{$value->exp_month}}</td>
                                            <td>{{$value->exp_year}}</td>
                                            <td>{{$value->status}}</td>
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