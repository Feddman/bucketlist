<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>My bucket list!</h1>
        @if( session('message') )
            <p class="alert alert-success">{{ session('message') }}</p>
        @endif

        <ul class="list-group">
            @foreach( $items as $item )
                <li class="list-group-item"> {{ $item->title }} </li>
            @endforeach
        </ul>
        <a href="{{route('items.create')}}" class="btn btn-primary">Create new Item!</a>
    </div>

</body>
</html>
