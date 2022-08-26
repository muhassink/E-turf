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
                            <form action="/AddTurfAction" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Name of Turf</label>
                                    <input type="text" class="form-control" id="" name="name" placeholder="enter name of turf">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Description</label>
                                    <input type="text" class="form-control" id="" name="description" placeholder=" enter description">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Location</label>
                                    <input type="text" class="form-control" id="" name="location" placeholder="enter location">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Price</label>
                                    <input type="text" class="form-control" id="" name="price" placeholder="enter price">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Choose Manager</label>

                                    <select name="manager" id="" class="form-control">
                                        @foreach($result as $value)
                                        <option value="{{$value->id}}" class="form-control">{{$value->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">ADD</button>
                                <button type="reset" class="btn btn-light">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection