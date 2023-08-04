@extends('layouts.app')

@section('content')
<form action='{{ url("discussions/$post->id") }}' method="POST">
    @method('PATCH')
    @csrf
    <h3>Update Post</h3>
    <div class="mb-3">
        <label for="titleDiscussion" class="form-label">Title</label>
        <input type="text" class="form-control" id="titleDiscussion" value="{{ $post->title }}" name="title">
    </div>
    <div class="mb-3">
        <label for="contentDiscussion" class="form-label">Content</label>
        <textarea class="form-control" id="contentDiscussion" rows="3" name="content">{{ $post->content }}</textarea>
    </div>
    <button type="submit" class="btn btn-success">Update</button>
</form>
@endsection