@extends('admin.index')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{$post->title}} | <small>{{$post->category->name}}</small> | By : {{auth()->user()->name}} | {{$post->created_at->diffForHumans()}}
                    </div>
                    <div class="panel-body">
                        {{$post->content}}
                    </div>
                </div>
                @foreach($post->comment()->get() as $comment)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            {{$comment->user->name}} | {{$comment->created_at->diffForHumans()}}
                        </div>
                        <div class="panel-body">
                            {{$comment->message}}
                        </div>
                    </div>
                @endforeach
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tambahkan Komentar
                    </div>
                    <div class="panel-body">
                        <form action="{{route('admin.post.comment',$post)}}" method="post">
                            {{csrf_field()}}
                            <textarea name="message" class="form-control" cols="30" rows="5" placeholder="Komentar.."></textarea>
                            <br>
                            <button type="submit" class="btn btn-primary">Komentar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection