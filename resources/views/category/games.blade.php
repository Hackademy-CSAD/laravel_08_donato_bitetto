<x-layout>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>{{$category->name}}</h1>
        </div>
        @foreach($category->games as $game)
        <div class="col-3">
            <div class="card">
                <img src="{{ Storage::url($game->poster) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $game->title }}</h5>
                    <a href="{{ route('games.show', compact('game')) }}" class="btn btn-primary">Show more</a>
                    <a href="{{ route('games.edit', compact('game')) }}" class="btn btn-warning">Edit</a>
                    <form method="POST" action="{{ route('games.destroy', compact('game')) }}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    @if ($game->category)
                        <a href="{{ route('category.games', ['category' => $game->category]) }}">
                            {{ $game->category->name }}
                        </a>
                    @else
                        <p>No category</p>
                    @endif
                </div>
            </div>
            
        </div>
        @endforeach
    </div>
</div>

</x-layout>