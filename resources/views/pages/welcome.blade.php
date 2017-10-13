@extends('main')

@section('title',' - Homepage')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="jumbotron">
          <h1>Rnsm</h1>
          <p>Thanks for visiting. This is official website of Rnsm.</p>
          <p><a class="btn btn-primary btn-lg" href="/about" role="button">Learn more</a></p>
        </div><!-- END OF JUMBOTRON -->
      </div>
    </div><!-- END OF ROW -->
  </div><!-- END OF container -->

  <div class="row">
    <div class="col-md-8">
      @foreach ($posts as $post)
        <div class="post">
          <hr>
          <h3>{{ $post->title }}</h3>
          <p>{{  str_limit($post->body,300) }}</p>
          <a href="{{ route('blog.single',$post->slug) }}" class="btn btn-primary">Read More</a>
        </div>
      @endforeach
    </div>

    <div class="col-md-3 col-md-offset-1">
      <h2>SideBar</h2>
    </div>
  </div>
@endsection
