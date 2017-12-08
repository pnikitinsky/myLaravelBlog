@extends('main')

@section('title', '| All Posts')
@section('content')
    <div class="row">
        <div class="col-md-10">
            <h1>All Posts</h1>
        </div>
        <div class="col-md-2">
            <a class="btn btn-lg btn-block btn-primary" href="{{ route('posts.create') }}">
                Create New Post
            </a>
        </div>
        <hr/>
    </div> <!-- end of row -->
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created At</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <th>{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ substr($post->body, 0, 50)}}{{ strlen($post->body) > 50 ? "..." : "" }}</td>
                            <td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
                            <td>
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-default">View</a>
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default">Edit</a>
                                {!! Html::linkRoute('posts.destroy', 'Delete', array($post->id), array(
                                'class' => 'btn btn-danger', 'method' => 'delete'))
                                !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop