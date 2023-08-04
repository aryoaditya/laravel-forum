@extends('layouts.app')

@section('title', 'Discussions | Create New Post')

@section('content')
<form action='{{ url("discussions") }}' method="POST">
    @csrf
    <h3>Add a new content</h3>
    <div class="mb-3">
        <label for="titleDiscussion" class="form-label">Title</label>
        <input type="text" class="form-control" id="titleDiscussion" placeholder="Your title" name="title">
    </div>
    <div class="mb-3">
        <label for="contentDiscussion" class="form-label">Content</label>
        <textarea class="form-control" id="contentDiscussion" rows="3" placeholder="Type your content here..." name="content"></textarea>
    </div>
    <button type="submit" class="btn btn-success">Upload</button>
</form>
@endsection