@extends('admin.index')
@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-8 col md-offset-2">
                    <form action="{{route('admin.profile.update')}}" enctype="multipart/form-data" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" value="{{auth()->user()->name}}">
                        </div>
                        <div class="form-group">
                            <label for="avatar">Profile Picture  </label>
                            <img src="{{asset('storage/'.auth()->user()->avatar)}}" width="200" alt="">
                            <input type="file" name="avatar" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
@endsection