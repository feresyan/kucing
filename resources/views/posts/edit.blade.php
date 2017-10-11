@extends('main')

@section('title', ' | Edit Blog Post')

@section('content')

<div class="row">
  <form method="POST" action="{{ route('posts.update', $post->id) }}">
    <div class="col-md-8">
      <div class="form-group">
        <label for="title">Title:</label>
        <textarea type="text" class="form-control input-lg" id="title" name="title" rows="1" style="resize:none;">{{ $post->title }}</textarea>
      </div>
      <div class="form-group">
        <label for="body">Body:</label>
        <textarea type="text" class="form-control input-lg" id="body" name="body" rows="20">{{ $post->body }}</textarea>
      </div>
    </div>

    <div class="col-md-4">
      <div class="well">
        <div class="row">
          <div class="col-sm-6">
            <a href="{{ route('posts.show' , $post->id) }}" class="btn btn-primary btn-block">Cancel</a>
          </div>
          <div class="col-sm-6">
            <button type="submit" class="btn btn-success btn-block">Save</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
            {{ method_field('PUT') }}
          </div>
        </div>
      </div> <!-- END OF WELL -->
    </div>

  </form> <!-- END OF FORM -->
</div> <!-- END OF ROW -->

@endsection
