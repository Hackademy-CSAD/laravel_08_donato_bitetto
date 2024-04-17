<x-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">All games</h1>
            </div>
            @if (session('success'))
                <div class="col-12">
                    <p class="alert alert-success m-0">{{ session('success') }}</p>
                </div>
            @endif
            @foreach ($games as $game)
                <div class="col-4">
                    <x-card :game="$game" />
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
