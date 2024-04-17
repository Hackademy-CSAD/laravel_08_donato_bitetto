<x-layout>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center">Publish your game</h1>
            </div>
            @if (session('success'))
                <div class="col-12">
                    <p class="alert alert-success m-0">{{ session('success') }}</p>
                </div>
            @endif
            <div class="col-12 col-md-6 mt-3">

                <form method="POST" action="{{ route('games.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                        @error('title') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="release_year" class="form-label">Release year</label>
                        <input type="number" class="form-control" id="release_year" name="release_year" value="{{ old('release_year') }}">
                        @error('release_year') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="poster" class="form-label">Poster</label>
                        <input type="file" class="form-control" id="poster" name="poster">
                        @error('poster') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Publish now</button>
                </form>

            </div>
        </div>
    </div>

</x-layout>
