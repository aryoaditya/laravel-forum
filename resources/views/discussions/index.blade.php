<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discussion Forum</title>
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" crossorigin="anonymous">
    <style>
        .updateTime{
            color: grey;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h3>Discussion Forum <a href="{{ url('discussions/create') }}" class="btn btn-primary">New Post</a></h3>
        @foreach($posts as $post)
        @php($slicedContent = substr($post->content, 0, 100))
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
    </div>
    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
</body>
</html>