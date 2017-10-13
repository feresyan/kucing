@extends('main')

@section('title',' | All Posts')

@section('content')

  <div class="row">
    <div class="col-md-10">
      <h1>All POSTS</h1>
    </div>

    <div class="col-md-2">
      <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create New Post</a>
    </div>
    <div class="col-md-12">
      <hr>
    </div>
  </div><!-- END OF ROW -->

  <div class="row">
    <div class="col-md-12">
      <table class="table table-striped">

        <thead>
          <th>#</th>
          <th>Title</th>
          <th>Body</th>
          <th>Created At</th>
          <th></th>
        </thead>

        <tbody>
          @foreach ($posts as $post)
            <tr>
              <th>{{ $post->id }}</th>
              <td>{{ $post->title }}</td>
              <td>{{ str_limit($post->body,50) }}</td>
              <td>{{ $post->created_at->format('j M, Y') }}</td>
              <td><a href="{{ route('posts.show' , $post->id) }}" class="btn btn-default btn-sm">View</a> <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default btn-sm">Edit</a></td>
            </tr>
          @endforeach
        </tbody>

      </table>

      <div class="text-center">
        {!! $posts->links(); !!} <!--  https://laravel.com/docs/5.5/pagination#displaying-pagination-results -->
      </div>

    </div>
  </div> <!-- END OF ROW -->

@endsection
