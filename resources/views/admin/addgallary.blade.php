@extends('admin.adminheader')
@section('admin')
<div class="col-sm-9">
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add Gallery</h4>
                            <br></br>
                            <form action="/AddGalleryAction" class="forms-sample" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Discription</label>
                                    <input type="text" class="form-control" id="exampleInputUsername1" name="description" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Upload file</label>
                                    <input type="file" class="form-control" id="exampleInputUsername1" name="file" placeholder="Username">
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
</div>
@endsection