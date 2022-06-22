@extends('layouts.admin');

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <h4>{{$post->title}}</h4>
                <p>{{$post->content}}</p>
            </div>
        </div>
    </div>
</div>
   
@endsection