@extends('admin.index')
@section('content')
    <div class="col-md-8 col-md-offset-2">
        <form action="{{route('admin.post.update',$post)}}" method="post">
            {{csrf_field()}}
            {{method_field('PATCH')}}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{$post->title}}" placeholder="title">
            </div>
            <div class="form-group">
                <label for="category_id">Category</label>
                <select name="category_id" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}"
                                @if($category->id === $post->category_id)
                                        selected
                                        @endif
                        >{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" rows="5" placeholder="content here" class="form-control">{{$post->content}}</textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Edit Post</button>
            </div>
        </form>
    </div>
@endsection