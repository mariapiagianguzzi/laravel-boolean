<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   @foreach ($post as $posts)
    <h1>{{$posts->title}}</h1>
    <p>{{$posts->body}}</p>
   @endforeach

</body>
</html>