@extends('layouts.base')

@section('content')
        <h1>My bucket list!</h1>
        <h2>Edit bucket list item</h2>
        <form method="post" action="{{route('items.update', $item)}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="">Title</label>
                <input value="{{$item->title}}" type="text" name="title" class="form-control" >
            </div>

            <div class="form-group">
                <label for="">Description</label>
                <textarea name="description" class="form-control" id="" cols="30" rows="10">{{$item->description}}</textarea>
            </div>

            <div class="form-group">
                <label for="">prio</label>
                <input value="{{$item->prio}}" type="number" name="prio" class="form-control">
            </div>

            <input type="submit" value="Update Item" class="btn btn-primary">

        </form>
@endsection
