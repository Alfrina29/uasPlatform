@extends('layouts.main')

@section('container')
    <br></br>
    {{-- <h1 class="mb-3 text-center" style="color: aliceblue; font-family: 'Times New Roman', Times, serif ">{{ $tittle }}</h1> --}}
    @if (count($lists) > 0)
        <br></br>
        <div class="row justify-content-center mb-4">
            <div class="col-md-6">
                <form action="/film/search" method="get">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search.." name="search"
                            value="{{ request('search') }}">
                        <button class="btn btn-dark" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($lists as $list)
                    <div class="col-md-3 m-3" style="">
                        <div class="card " style="font-family: 'Times New Roman', Times, serif ">
                            <img src="/storage/{{ $list->gambar }}" class="card-img-top" alt="...">
                            <h3 class="card-tittel" style="text-align : center">{{ $list->tittle }}</h3>
                            <p class="card-text">Tahun Rilis : {{ $list->tahun }}</p>
                            <p>Genre Film : {{ $list->genre }}</p>
                            <div style="display: flex;
                            justify-content: flex-end;
                            padding: 0 10px 10px 0;">
                                <a href="/edit/{{ $list->id }}" class="btn btn-primary" style="margin-right: 5px">Edit</a>
                                
                                {{-- <button class="btn btn-danger border-0" onclick="return confirm('Are you sure?')">Hapus</button> --}}
                                <form action="/film/{{ $list->id }}" method="post" onsubmit="return confirm('Are you sure?')">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <br></br>
        <div class="row justify-content-center mb-4">
            <div class="col-md-6">
                <form action="/film" method="get">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search.." name="search"
                            value="{{ request('search') }}">
                        <button class="btn btn-dark" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <p class="text-center fs-4">No Post found.</p>
    @endif

@endsection
