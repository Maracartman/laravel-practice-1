<html>
<head>
    <meta charset="UTF-8">
    <title>{{$article->title}}</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/general.css')}}">
</head>
<body>
<h1>{{$article->title}}</h1>

<br>
<br>

{{$article->content}}
<br>
<br>
{{$article->user->name}}
<br>
<br><br>
<br>
{{$article->category->name}}<br>
<br>
<br>
<h1>Tags</h1>
<br>
<br>
<br>
@foreach($article->tags as $tag)
    {{$tag->name}}<br>


@endforeach
</body>
</html>