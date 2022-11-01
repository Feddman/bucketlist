<div>
     <ul class="list-group">
        @foreach( $items as $item )
            <li class="list-group-item d-flex justify-content-between">
                <p><a href="{{route('items.show', $item)}}">{{ $item->title }}</a></p>
                <div class="buttons d-flex">

                    <div class="priority d-flex flex-column justify-content-">
                        <i wire:click="prioUp" class="bi bi-caret-up-fill"></i>
                        <i wire:click="prioDown" class="bi bi-caret-down-fill"></i>
                    </div>

                    <a href="{{route('items.edit', $item)}}" class="btn btn-warning" >Edit</a>


                    <form method="POST" action="{{route('items.markDone', $item) }}">
                        @csrf
                        @method('put')
                        <input @if($item->completed_at) disabled @endif type="submit" value="{{$item->completed_at ? 'Done' : 'Mark as done'}}" class="btn btn-success">
                    </form>

                    <form method="POST" action="{{route('items.destroy', $item)}}">
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger" type="submit" value="Delete">
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</div>
