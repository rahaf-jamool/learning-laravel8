<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
<div class="container mt-5">
    <div class="m-5">
        <a href="{{route('posts.add')}}"><button type="button" class="btn btn-primary">Create Post</button></a>
    </div>
    <table class="table">
        <div class="card-body">
            @if(Session::has('delete_post'))
                <div class="alert alert-danger">
                    {{Session::get('delete_post')}}
                </div>
            @endif
        </div>
        <thead>
        <tr>
            <th style="width: 10%" scope="col"><h3>ID</h3></th>
            <th style="width: 20%" scope="col"><h3>Title</h3></th>
            <th style="width: 40%" scope="col"><h3>Description</h3></th>
            <th style="width: 40%" scope="col"><h3>Action</h3></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($posts as $key => $post)
            <tr>
                <td style="width: 10%" scope="row">{{$post->id}}</td>
                <td style="width: 20%">{{$post->title}}</td>
                <td style="width: 40%">{{$post->body}}</td>
                <td style="width: 40%" class="col">
                    <a href="{{route('post.view',$post->id)}}"><button type="button" class="btn btn-info">View</button></a>
                    <a href="{{route('posts.edit',$post->id)}}"><button type="button" class="btn btn-success">Edit</button></a>
                    <a href="{{route('post.deletepost',$post->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
