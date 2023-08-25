<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        form{
            margin-top: 10px;
        }

        form input{
            display: block;
        }
    </style>
</head>
<body>
    <div>
        <form action="{{route('insertAllData')}}" method="post">
            @csrf
            <button>Insert data</button>
        </form>

        <form action="{{route('setPost')}}" method="post">
            @csrf
            Post
            <input placeholder="Website id" required type="number" name="websiteId">
            <input placeholder="post title" required type="text" name="postTitle">
            <input placeholder="post content" required type="text" name="postContent">
            <button>Add</button>
        </form>
    </div>
{{--    cc--}}

</body>
</html>
