@extends('main')

@section('title',"| Blog")

@section('content')

  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1>Blog</h1>
    </div>
  </div>

  @foreach ($posts as $post)
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <hr>
        <h2>{{ $post->title }}</h2>
        <h5>Published: {{ $post->created_at->format('j M, Y  H:i') }}</h5>

        <p>{{str_limit($post->body,300)}}</p>

        <a href="{{ route('blog.single',$post->slug) }}" class="btn btn-primary btn">Read More</a>
      </div>
    </div>
  @endforeach

  <div class="row">
    <div class="col-md-12">
      <div class="text-center">
        {!! $posts->links() !!}
      </div>
    </div>
  </div>
@endsection
