@extends('admin.adminheader')
@section('admin')
<br></br>
<br></br>
<br></br>
<div class="col-lg-9 stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Table with contextual classes</h4>
            <p class="card-description">
                <code>View Gallery</code>
            </p>
            <div class="table-responsive pt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>
                                DESCRIPTION
                            </th>
                            <th>
                                IMAGE
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($result as $value)
                        <tr class="table-success">
                            <td>
                                {{$value->id}}
                            </td>
                            <td>
                                {{$value->description}}
                            </td>
                            <td><img class="gallery" src="/image/{{$value->file}}" alt="" width="100%" height="250px">
                            </td>
                            <td><a href="/Editgallery/{{$value->id}}">Edit</a></td>
                            <td><a href="/Delete/{{$value->id}}">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection