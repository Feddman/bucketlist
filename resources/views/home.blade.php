@extends('layouts.base')
@section('content')
        <h1>My bucket list!</h1>
        @if( session('message') )
            <p class="alert alert-success">{{ session('message') }}</p>
        @endif

        @livewire('item-list')


        <a href="{{route('items.create')}}" class="btn btn-primary">Create new Item!</a>
@endsection
