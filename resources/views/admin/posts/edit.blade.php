@extends('layouts.admin');

@section('content')
<form action="{{route('admin.posts.update',$post->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="Title">Title</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="title" placeholder="Enter title" name="title" value="{{$post->title}}">
      @error('title')
          <div class="alert alert-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="content">Content</label>
      <textarea name="content" class="form-control @error('title') is-invalid @enderror" id="content" cols="30" rows="10" placeholder="A cosa stai pensando?">{{$post->content}}</textarea>
      @error('content')
          <div class="alert alert-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="published" name="published" {{old('published') ? 'checked': ''}} value="{{'checked' ? 1 : 0}}">
      <label class="form-check-label" for="published">Pubblicato</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection