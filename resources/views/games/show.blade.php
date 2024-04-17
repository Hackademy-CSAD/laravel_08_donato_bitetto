<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center">{{ $game->title }}</h1>
            </div>
            <div class="col-6">
                <img class="h-100 w-100 object-fit-cover" src="{{ Storage::url($game->poster) }}" alt="">
            </div>
        </div>
    </div>
</x-layout>