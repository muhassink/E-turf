@extends('admin.adminheader')
@section('admin')
<div class="col-sm-9">
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Gallery</h4>
                            <br></br>
                            @foreach($result as $value)
                            <form action="/GalleryUpdateAction/{{$value->id}}" class="forms-sample" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Discription</label>
                                    <input type="text" class="form-control" id="exampleInputUsername1" name="description" value="{{$value->description}}">
                                </div>
                                <div class="form-group">
                                    <label for="">Upload file</label>
                                    <input type="file" class="form-control" name="file" value="{{$value->file}}">
                                    <img src="/image/{{$value->file}}" width="100px" height="100px" alt="">
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
</div>
@endsection