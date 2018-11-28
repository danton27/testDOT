@extends('admin.index')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col md-offset-2">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" readonly value="{{auth()->user()->name}}">
                <br>
                        <label for="avatar">Profile Picture  </label>
                <br>
                        <img src="{{asset('storage/'.auth()->user()->avatar)}}" width="200" alt="">
                <br>
                <br>
                    <label for="Emain">Email</label>
                    <input type="text" class="form-control" readonly value="{{auth()->user()->email}}">

            </div>
        </div>
    </div>
@endsection