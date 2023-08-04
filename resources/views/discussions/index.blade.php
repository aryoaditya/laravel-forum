@extends('layouts.app')

@section('title', 'Discussions')

@section('content')
<h3>Discussion Forum <a href="{{ url('discussions/create') }}" class="btn btn-primary">New Post</a></h3>
@foreach($posts as $post)
@php($slicedContent = substr($post->content, 0, 150))
<div class="card my-2 mx-auto" style="width: 90%;">
    <div class="card-body">
        <h5 class="card-title">{{ $post->title }}</h5>
        <p class="card-text">{{ $slicedContent }}...</p>
        <p class="updateTime"><small>Last updated {{ date('d M Y H:i'), strtotime($post->updated_at) }}</small> </p>
        <div class="text-end">
            <a href='{{ url("discussions/$post->id") }}' class="btn btn-primary btn-sm mx-auto">more</a>
        </div>
    </div>
</div>
@endforeach

@endsection
    