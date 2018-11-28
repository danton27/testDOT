@extends('admin.index')
@section('content')
    <div class="col-md-8 col-md-offset-2">
        <form action="{{route('admin.post.store')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="title">
                </div>
                <div class="form-group">
                    <label for="category_id">Category</label>
                        <select name="category_id" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                        </select>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" rows="5" placeholder="content here" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Create Post</button>
                </div>
        </form>
    </div>
@endsection