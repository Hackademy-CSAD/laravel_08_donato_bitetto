<x-layout>

    <div class="container my-5">
        <div class="row">
            <div class="col-12 my-5">
                <h1 class="text-center">{{$console->name}}</h1>
            </div>
            @foreach($console->games as $game)
                <div class="col-12 col-sm-3">
                    <x-card :game="$game" />
                </div>
            @endforeach
        </div>
    </div>

</x-layout>