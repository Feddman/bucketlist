@extends('layouts.base')
@section('content')
        <h1>My bucket list!</h1>
        @if( session('message') )
            <p class="alert alert-success">{{ session('message') }}</p>
        @endif

        <ul class="list-group">
            @foreach( $items as $item )
                <li class="list-group-item d-flex justify-content-between">
                    <p><a href="{{route('items.show', $item)}}">{{ $item->title }}</a></p>
                    <div class="buttons d-flex">
                        <a href="{{route('items.edit', $item)}}" class="btn btn-warning" >Edit</a>
                        <a href="" class="btn btn-success" >Mark as done</a>
                        <form method="POST" action="{{route('items.destroy', $item)}}">
                            @csrf
                            @method('delete')
                            <input class="btn btn-danger" type="submit" value="Delete">
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
        <a href="{{route('items.create')}}" class="btn btn-primary">Create new Item!</a>
@endsection
