@extends('layouts.base')
@section('content')

        <a href="{{route('items.index')}}" class="btn btn-primary">Terug naar overzicht</a>
        <h1>My bucket list!</h1>
        <h2>{{$item->title}}</h2>
        <p>{{$item->description}}</p>
        <p>Prio: {{$item->prio }}</p>

        <p><i>Created at: {{Date('d-m-Y', strtotime($item->created_at))}} </i></p>

@endsection
