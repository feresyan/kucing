@extends('main')

@section('title','- Create New Post')

@section('stylesheets')

  <!--<link rel="stylesheet" href="http://parsleyjs.org/src/parsley.css">-->
  <link rel="stylesheet" href="{{URL::asset('css/parsley.css')}}">

@endsection

@section('content')
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h1>Create New Post</h1>
        <hr>
          <form data-parsley-validate action="{{ route('posts.store') }}" method="post">

            <div class="form-group">
              <label>Title:</label>
              <input type="text" name="title" class="form-control" required maxlength="30">
            </div>

            <div class="form-group">
              <label>Post Body:</label>
              <textarea id="body" name="body" rows="10" class="form-control" required minlength="20"></textarea>
            </div>
              <input type="submit" value="Create Post" class="btn btn-success btn-lg btn-block"></input>
              <input type="hidden" name="_token" value="{{ Session::token() }}">
          </form>
      </div>
    </div>
@endsection

@section('scripts')
   <!--<script type="text/javascript" src="http://parsleyjs.org/dist/parsley.min.js"></script>﻿-->
   <script type="text/javascript" src="{{URL::asset('js/parsley.min.js')}}"></script>﻿
@endsection
