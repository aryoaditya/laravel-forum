<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discussion Forum</title>
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
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
    </div>
    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
</body>
</html>