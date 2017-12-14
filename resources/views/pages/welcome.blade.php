@extends('main')
@section('title', '| Homepage')


@section('content')
    <div class="row">
      <div class="jumbotron">
        <div class="container">
            <h1>Hello, Welcome to {{ $data['first'] }}'s Blog</h1>
            <p class="lead">Thankyou for being a part of my test blog</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
        </div>
      </div>
    </div><!-- end row -->
    <div class="row">
        <div class="col-md-8">
            @foreach($posts as $post)

                <div class="post">
                    <h3>{{ $post->title }}</h3>
                    <p>{{ substr($post->body, 0, 300) }}{{ strlen($post->body) > 300 ? "..." : "" }}</p>
{{--                    <a href="{{ route('pages.single', $post->id)  }}" class="btn btn-primary">Read more</a>--}}
                </div>

                <hr/>
            @endforeach
        </div>
        <div class="col-md-3 col-md-offset-1">
            <h2>Sidebar</h2>
        </div>
    </div> <!-- end of .row -->
@endsection