@extends('main')

@section('title', ' | View Post')

@section('content')

<div class="row">
  <div class="col-md-8">
    <h1>{{ $post->title }}</h1>
    <p class="lead">{{ $post->body }}</p>
  </div>

  <div class="col-md-4">
    <div class="well">

      <dl class="dl-horizontal">
        <dt>Create at :</dt>
        <dd>{{ $post->created_at->format('j M, Y H:i') }}</dd>
      </dl>

      <dl class="dl-horizontal">
        <dt>last updated :</dt>
        <dd>{{ $post->updated_at->format('j M, Y H:i') }}</dd>
      </dl>

      <hr>

      <div class="row">
        <div class="col-sm-4">
          <a href="{{ route('posts.index') }}" class="btn btn-default btn-block">Back</a>
        </div>
        <div class="col-sm-4">
          <a href="{{ route('posts.edit',$post->id) }}" class="btn btn-primary btn-block">Edit</a>
        </div>
        <div class="col-sm-4">
          <form action="{{ route('posts.destroy',$post->id) }}" method="post">
            <input type="submit" value="delete" class="btn btn-danger btn-block"></button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
            {{ method_field('DELETE') }}
          </form>
        </div>
      </div>

    </div>
  </div>
</div>

@endsection
