<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
<div class="container mt-5 center">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card center">
                <div class="card-header">
                    Update Post
                </div>
                <div class="card-body">
                    @if(Session::has('post_updated'))
                        <div class="alert alert-success">
                            {{Session::get('post_updated')}}
                        </div>
                    @endif
                    <form action="{{route('posts.update')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$post->id}}">
                        <div class="form-group">
                            <label for="title">Update Title</label>
                            <input id="title" type="text" class="form-control" name="title" value="{{$post->title}}">
                        </div>
                        <div class="form-group">
                            <label for="body">body</label>
                            <textarea id="body" class="form-control" name="body">{{$post->body}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Update Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
