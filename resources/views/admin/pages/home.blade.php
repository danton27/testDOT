@extends('admin.index')
@section('content')

                    @foreach($posts as $post)
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a href="{{route('admin.post.show',$post)}}">{{$post->title}}</a>
                                        <div class="pull-right">
                                            <a href="{{route('admin.post.edit',$post->id)}}" style="display:inline" class="btn btn-xs btn-primary">Edit</a>
                                            <a href="{{route('admin.post.delete',$post)}}" style="display: inline" class="btn btn-xs btn-danger"
                                               onclick="event.preventDefault();
                                    getElementById('post-delete').submit(); ">Delete</a>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        {{str_limit($post->content, 100, ' ...')}}
                                    </div>
                                    <form action="{{route('admin.post.delete',$post)}}" id="post-delete" method="post">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
@endsection