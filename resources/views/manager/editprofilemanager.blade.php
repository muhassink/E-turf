@extends('manager.managerheader')
@section('manager')
<div class="col-sm-9">
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">update profile</h4>
                            <br></br>
                            @foreach($manager as $value)
                            <form action="/EditProfileAction/{{$value->id}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Name</label>
                                    <input type="text" class="form-control" id="" name="name" value="{{$value->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Contact No.</label>
                                    <input type="text" class="form-control" id="" name="contactnumber" value="{{$value->contactnumber}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Email</label>
                                    <input type="text" class="form-control" id="" name="email" value="{{$value->email}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Password</label>
                                    <input type="text" class="form-control" id="" name="password" value="{{$value->password}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Location</label>
                                    <input type="text" class="form-control" id="" name="location" value="{{$value->location}}">
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