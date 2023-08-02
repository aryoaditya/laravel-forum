<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discussion Forum</title>
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" crossorigin="anonymous">
    <link href="{{ url('css/blog-css.css') }}" rel="stylesheet">
    <style>
        .updateTime{
            color: grey;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <article class="blog-post">
            <h2 class="display-5 link-body-emphasis mb-1">{{ $post->title }}</h2>
            <p class="blog-post-meta"><small>Last updated at {{ date('M d, Y'), strtotime($post->updated_at) }}</small> </p>
            <p>{{ $post->content }}</p>
        </article>
        <div class="text-center">
            <a href='{{ url("discussions") }}' class="btn btn-primary btn-sm mx-2 my-2" style="width: 60px;">Back</a>
            <a href='{{ url("discussions/$post->id/edit") }}' class="btn btn-warning btn-sm mx-2 my-2" style="width: 60px;">Edit</a>
            <form action='{{ url("discussions/$post->id") }}' method="POST">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger btn-sm mx-2 my-2" style="width: 60px;">Delete</button>
            </form>
        </div>
    </div>
    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
</body>
</html>