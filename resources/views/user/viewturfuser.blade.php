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
                                    @foreach($result as $value)
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$value->id}}</td>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->description}}</td>
                                        <td>{{$value->location}}</td>
                                        <td>{{$value->price}}</td>
                                        <td>
                                            <label class="badge badge-success">{{$value->status}}</label>
                                        </td>
                                        <td><a href="/bookturfuser/{{$value->id}}"><input type="submit" value="BooK" class="btn btn-warning"></a></td>
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