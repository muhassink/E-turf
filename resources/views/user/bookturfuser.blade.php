@extends('user.useruserheader')
@section('useruser')
<section class="pb-5">
    <div class="container">
        <div class="col-sm-9">
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Turfs</h4>
                                    <br></br>
                                    @foreach($result1 as $value)
                                    <form action="/BookTurfAction/{{$value->id}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Name of Turf</label>
                                            <input type="" class="form-control" value="{{$value->name}}" readonly>
                                            <input type="hidden" class="form-control" id="" name="nameturf" value="{{$value->name}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Description</label>
                                            <input type="" class="form-control" value="{{$value->description}}" readonly>
                                            <input type="hidden" class="form-control" id="" name="description" value="{{$value->description}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Location</label>
                                            <input type="" class="form-control" value="{{$value->location}}" readonly>
                                            <input type="hidden" class="form-control" id="" name="location" value="{{$value->location}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Price</label>
                                            <input type="" class="form-control" value="{{$value->price}}" readonly>
                                            <input type="hidden" class="form-control" id="" name="price" value="{{$value->price}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Date</label>
                                            <input type="date" class="form-control" id="" name="date">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Time</label>
                                            <input type="time" class="form-control" id="" name="time">
                                        </div>
                                        <button type="submit" class="btn btn-success mr-2">BooK</button>
                                        <button type="reset" class="btn btn-light">Cancel</button>
                                    </form>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection