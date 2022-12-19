@extends('layouts.main')

@section('container')
    <br>
    <br>
    <main>
        <h1 style="color: #fff;">Edit Film!</h1>

        <div>
            <form action="/edit/{{ $film->id }}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label style="color: #fff;" for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" placeholder="Masukan Judul" name="tittle"
                        required value="{{ $film->tittle }}">
                </div>
                <div class="mb-3">
                    <label style="color: #fff;" for="tahun" class="form-label">Tahun</label>
                    <input type="text" class="form-control" id="tahun" placeholder="Masukan Tahun" name="tahun"
                        required value="{{ $film->tahun }}">
                </div>
                <div class="mb-3">
                    <label style="color: #fff;" for="genre" class="form-label">Genres</label>
                    <select class="form-select" aria-label="Default select example" name="genre_id">
                        @foreach ($genres as $genre)
                            <option value="{{ $genre->id }}">{{ $genre->genre }}</option>
                        @endforeach
                    </select>
                </div>

                <p style="color: #fff;" class="mb-2">Upload gambar</p>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile02" name="gambar">
                </div>

                <div>
                    <button type="submit" class="btn btn-light">Edit Film</button>
                </div>
            </form>
        </div>
    </main>
    
@endsection
