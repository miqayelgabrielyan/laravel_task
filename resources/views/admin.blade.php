<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="{{route('setUser')}}" method="post">
            @csrf
            User
            <input required type="text" name="userName">
            <input required type="email" name="email">
            <input required type="password" name="password">
            <button>Add</button>
        </form>

        <form action="{{route('setWebsite')}}" method="post">
            @csrf
            Website
            <input required type="text" name="websiteName">
            <button>Add</button>
        </form>

        <form action="{{route('setSubscription')}}" method="post">
            @csrf
            Subscription
            <input required type="number" name="userId">
            <input required type="number" name="websiteId">
            <button>Add</button>
        </form>

        <form action="{{route('setPost')}}" method="post">
            @csrf
            Post
            <input required type="number" name="websiteId">
            <input required type="text" name="postTitle">
            <input required type="text" name="postContent">
            <button>Add</button>
        </form>
    </div>
{{--    cc--}}

</body>
</html>
