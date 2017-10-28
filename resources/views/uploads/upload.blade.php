@extends('main')

@section('title','- Upload')

@section('content')
  <h1>UPLOAD FILE</h1>
  <form class="" action="{{ route('uploads.store') }}" method="post"  enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="file" name="file" value="" multiple>
    <br>
    <input type="submit" name="" value="UPLOAD">
  </form>
@endsection
