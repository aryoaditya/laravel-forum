@extends('layouts.app')

@section('content')
<article class="blog-post">
    <h2 class="display-5 link-body-emphasis mb-1">{{ $post->title }}</h2>
    <p class="blog-post-meta"><small>Last updated at {{ date('M d, Y'), strtotime($post->updated_at) }}</small> </p>
    <p>{{ $post->content }}</p>
</article>
<small class="text-muted"> {{ $total_comments }} comments </small>
@foreach($comments as $comment)
<div class="card mb-3">
    <div class="card-body">
        <p style="font-size:8pt"> {{ $comment->comment }} </p>
    </div>
</div>
@endforeach
<div class="text-center">
    <a href='{{ url("discussions") }}' class="btn btn-primary btn-sm mx-2 my-2" style="width: 60px;">Back</a>
    <a href='{{ url("discussions/$post->id/edit") }}' class="btn btn-warning btn-sm mx-2 my-2" style="width: 60px;">Edit</a>
    <form action='{{ url("discussions/$post->id") }}' method="POST">
        @method('DELETE')
        @csrf
        <button class="btn btn-danger btn-sm mx-2 my-2" style="width: 60px;">Delete</button>
    </form>
</div>
@endsection