@extends('admin.adminheader')
@section('admin')
<div class="col-sm-9">
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add Turf</h4>
                            <br></br>
                            @foreach($turf as $value)
                            <form action="/UpdateTurfAction/{{$value->id}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Name of Turf</label>
                                    <input type="text" class="form-control" id="" name="name" value="{{$value->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Description</label>
                                    <input type="text" class="form-control" id="" name="description" value="{{$value->description}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Location</label>
                                    <input type="text" class="form-control" id="" name="location" value="{{$value->location}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Price</label>
                                    <input type="text" class="form-control" id="" name="price" value="{{$value->price}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Choose Manager</label>

                                    <select name="manager" id="" class="form-control" value="$value->manager">
                                        @foreach($manager as $value)
                                        <option value="{{$value->name}}" class="form-control">{{$value->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">UPDATE</button>
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
@endsection