@extends('layouts.main')

@section('container')
    <br>
    <br>
    <main>
        <h1 style="color: #fff;">Tambah Film!</h1>

        <div>
            <form action="/tambah" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label style="color: #fff;" for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" placeholder="Masukan Judul" name="tittle"
                        required>
                </div>
                <div class="mb-3">
                    <label style="color: #fff;" for="tahun" class="form-label">Tahun</label>
                    <input type="text" class="form-control" id="tahun" placeholder="Masukan Tahun" name="tahun"
                        required>
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
                    <button type="submit" class="btn btn-light">Tambah FIlm</button>
                </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
    </main>
@endsection
