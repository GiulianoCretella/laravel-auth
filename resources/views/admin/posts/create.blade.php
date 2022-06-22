@extends('layouts.admin');

@section('content')
<form action="{{route('admin.posts.store')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="Title">Title</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="title" placeholder="Enter title" name="title" value="{{old('title')}}">
      @error('title')
          <div class="alert alert-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="content">Content</label>
      <textarea name="content" class="form-control @error('title') is-invalid @enderror" id="content" cols="30" rows="10" placeholder="A cosa stai pensando?">{{old('content')}}</textarea>
      @error('content')
          <div class="alert alert-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="published" name="published" {{old('published') ? 'checked': ''}}>
      <label class="form-check-label" for="published">Pubblicato</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection